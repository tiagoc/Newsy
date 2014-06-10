{include 'common/header.tpl'}


<div class="row">

    <!-- Main Content -->

    <div class="large-9 columns">

        <article>
            <h3><a href="#">{$article.title}</a><i id="favouritestar" class="fi-star favourite-star-disabled" onclick="toggleFavourite({$article.id});"></i></h3>
            <h4><small>Written by <a href="{$BASE_URL}pages/users/journalistprofile.php?id={$article.journalist_id}">{$article.journalist}</a> on {$article.dates.publish.published_at}.</small>
                <small><a href="{$BASE_URL}pages/news/edit.php?id={$article.id}">{$edit}</a></small>
            </h4>
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
                            $("#rating").find(".fi-star").attr('onclick', 'selectStars({$article.id},this);');
                        });
                    </script>
                    <i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i></a></div> 
            <p class="text-right"><i class="fi-comment"></i> {$article.ncomments}</p> 
        </article>


        <div
            class="fb-like"
            data-send="true"
            data-width="450"
            data-show-faces="true">
        </div>
        
        <p></p>

        <div id="comments">

            {foreach $comments as $comment}
                <div id="comment-{$comment.id}" class="panel radius">
                    <h5><small><div class="comment-username"><a href="../users/profile.php?id={$comment.user_id}">{$comment.name}</a></div> <div class="comment-datetime">{$comment.published_at}</div>
                            <button type="button" onclick="deleteComment({$comment.id});" class="comment-delete">Delete</button><button type="button" class="comment-edit">Edit</button></small></h5>
                    <p>{$comment.content}</p>
                </div>
            {/foreach}           

        </div>

        <div id="commmentarea">
            <textarea id="comment-content" placeholder="Insert your comment here..."></textarea>
            <button onclick="insertComment({$article.id}, $('#comment-content').val());" class="button round right tiny">Submit</button>
        </div>
    </div>

    <!-- End Content -->

    {include 'news/sidebar.tpl'}

</div>


<script>
    $(document).ready(function() {
        checkFavourite({$article.id},{$ID});
    });
</script>

{include 'common/footer.tpl'}