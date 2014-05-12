{include 'common/header.tpl'}


<div class="row">

    <!-- Main Content -->

    <div class="large-9 columns" role="content">

        <article>
            <h3><a href="#">{$article.title}</a><i class="fi-star favourite-star-disabled" onclick="$('.favourite-star-disabled, .favourite-star-enabled').toggleClass('favourite-star-disabled').toggleClass('favourite-star-enabled');"></i></h3>
            <h4><small>Written by <a href="#">{$article.journalist}</a> on August 12, 2012.</small></h4>
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

            <div id="category"><i class="fi-price-tag"></i> Categories</div> <p>Politics, Food </p>
            <div id="rating">Rating: <a id="stars">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#rating").find(".fi-star").attr('onclick', 'selectStars(this);');
                        });
                    </script>
                    <i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i></div> 
            <p class="text-right"><i class="fi-comment"></i> 0 comments</p> 
        </article>


        <div id="comments">

            <div class="panel radius">
                <h5><small><div class="comment-username">José Miranda</div><div class="comment-datetime">11/03/2014   22:15</div><button type="button" class="comment-delete">Delete</button><button type="button" class="comment-edit">Edit</button></small></h5>
                <p>This is some great news!</p>
            </div>

            <div class="panel radius">
                <h5><small><div class="comment-username">Roger Dickinson</div><div class="comment-datetime">11/03/2014   22:30</div><button type="button" class="comment-delete">Delete</button><button type="button" class="comment-edit">Edit</button></small></h5>
                <p>I fondly agree with Miranda!</p>
            </div>

            <textarea name="body"></textarea>

        </div>

    </div>

    <!-- End Content -->

    {include 'news/sidebar.tpl'}

</div>

{include 'common/footer.tpl'}