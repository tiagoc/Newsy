{include 'common/header.tpl'}


<div class="row">

    <!-- Main Content -->

    <div class="large-9 columns" role="content">

        <article>
            <h3><a href="#">{$article.title}</a><i class="fi-star favourite-star-disabled" onclick="$('.favourite-star-disabled, .favourite-star-enabled').toggleClass('favourite-star-disabled').toggleClass('favourite-star-enabled');"></i></h3>
            <h4><small>Written by <a href="{$BASE_URL}pages/users/journalistprofile.php?id={$article.journalist_id}">{$article.journalist}</a> on {$article.dates.publish.published_at}.</small></h4>
            <p></p>

            <div class="row">
                <div class="large-12 columns">
                    <p class="text-justify"><b>{$article.synopsis}</b></p>
                </div>
            </div> 
            <div class="row">
                <div class="large-12 columns">
                    <p class="text-justify">{$article.body}</p>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <p class="text-center"><img src="http://placehold.it/400x240&text=[img]"/></p>
                </div>
            </div>

            <div id="category"><i class="fi-price-tag"></i> Categories</div> <p>
                    {foreach $article.categories as $c name=catlist}
                        {$c.name}
                        {if not $smarty.foreach.catlist.last}
                            , 
                        {/if}
                    {foreachelse}
                        - none -
                    {/foreach}
                </p>
            <div id="rating">Rating: <a id="stars">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#rating").find(".fi-star").attr('onclick', 'selectStars(this);');
                        });
                    </script>
                    <i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i></div> 
            <p class="text-right"><i class="fi-comment"></i> {$article.ncomments}</p> 
        </article>


        <div id="comments">

            {foreach $comments as $comment}
                <div id="comment-{$comment.id}" class="panel radius">
                    <h5><small><div class="comment-username"><a href="../users/profile.php?id={$comment.user_id}">{$comment.name}</a> <div class="comment-datetime">{$comment.published_at}</div><button type="button" class="comment-delete">Delete</button><button type="button" class="comment-edit">Edit</button></small></h5>
                    <p>{$comment.content}</p>
                </div>
            {/foreach}

            <textarea name="body"></textarea>

        </div>

    </div>

    <!-- End Content -->

    {include 'news/sidebar.tpl'}

</div>

{include 'common/footer.tpl'}