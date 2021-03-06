<?php include 'header-user.php'; ?>


<div class="row">

    <!-- Main Content -->

    <div class="large-9 columns" role="content">
    
        <article>
            <h3><a href="#">News Title</a><i class="fi-star favourite-star-disabled" onclick="$('.favourite-star-disabled, .favourite-star-enabled').toggleClass('favourite-star-disabled').toggleClass('favourite-star-enabled');"></i></h3>
            <h4><small>Written by <a href="#">John Smith</a> on August 12, 2012.</small></h4>
            <p></p>

            <div class="row">
                <div class="large-6 columns">
                    <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
                    <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. </p>
                </div>
                <div class="large-6 columns">
                    <img src="http://placehold.it/400x240&text=[img]" />
                </div>
            </div> 

                <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

                <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

                <div id="category"><i class="fi-price-tag"></i> Categories</div> <p>Politics, Food </p>
                <div id="rating">Rating: <a id="stars">
                <script type="text/javascript">
                
                function selectStars(estrela) {
                
                    var found = false;
                
                    for (var i = 0; i < $("#rating").find(".fi-star").length; i++) {
                
                        if(!found) 
                        {    
                            $("#rating").find(".fi-star").eq(i).addClass('rating-star-enabled').removeClass('rating-star-disabled');
                        } 
                        else 
                        {
                            $("#rating").find(".fi-star").eq(i).removeClass('rating-star-enabled').addClass('rating-star-disabled');
                        } 

                        if($(estrela).position().top == $("#rating").find(".fi-star").eq(i).position().top && $(estrela).position().left == $("#rating").find(".fi-star").eq(i).position().left) 
                        {
                            found = true;
                        }
                    }
                }

                $(document).ready(function () {
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

    <?php include './sidebar.php'?>
    
</div>

<?php include_once 'footer.php'; ?>
