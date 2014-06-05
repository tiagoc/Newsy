{include 'common/header.tpl'}

<div class="row">
    <div class="large-9 columns">
        <div class="row">

            <div class="row">
                <div class="small-12 columns">
                    <h2 class="left"><i class="fi-torso"></i><div id="username">{$user.name}</div></h2>                
                    <h2 class="right"><a href="#"><i class="fi-pencil"></i></a></h2>
                </div>
            </div>

            <div class="row">
                <div class="small-4 columns"><i class="fi-mail"></i><div id="email">
                        <big>Email</big></div></div>
                <div class="small-8 columns">{$user.email}</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-male-female"></i>
                    <div id="gender"><big>Gender</big></div></div> 
                <span id="gender-data"><div class="small-8 columns">{$user.gender}</div></span>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-calendar"></i><div id="birthday">
                        <big>Birthday</big></div></div> 
                <div class="small-8 columns">{$birthday_fixed}</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-clock"></i>
                    <div id="regdate"><big>Registered Since</big></div></div> 
                <div class="small-8 columns">{$registered_since_fixed}</div>
            </div>
            <br/><br/>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="large-3 columns">        
        <a href="{$gravatar_link}"><img id="userimage" src="{$gravatar_link}"></a>
        <a href="{$user.youtube}"><big><b><i class="fi-social-youtube small-3 small-centered columns"></i></b></big></a>
        <a href="{$user.facebook}"><big><b><i class="fi-social-facebook small-3 small-centered columns"></i></b></big></a>
        <a href="{$user.googleplus}"><big><b><i class="fi-social-google-plus small-3 small-centered columns"></i></b></big></a>
        <a href="{$user.linkedin}"><big><b><i class="fi-social-linkedin small-3 small-centered columns"></i></b></big></a>
    </div>
    <!-- End Sidebar -->
</div>

<div class="row">
    <hr>
</div>

<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">Favourite news</h3>
            <ul id="favouritesli">
            
            {foreach $user.favs as $fav}
                <li><i class="fi-star"></i>
                    <a href="../news/view.php?id={$fav.news_id}">{$fav.title}</a></li>
            {/foreach}
            
        </ul>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">Last comments</h3>
        <ul id="commentsli">
                        
            {foreach $user.comments as $comment}
                <li><i class="fi-comment"></i><div class="comment">{$comment.content}</div>
                    <a href="../news/view.php?id={$comment.news_id}">{$comment.title}</a></li>
            {/foreach}
            
        </ul>
    </div>
</div>
<br/>
<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">My last news</h3>
        <ul id="statsli" style="list-style-type: none; margin-left: 0em;">
            {foreach $user.lastnews as $news}
            <li><i class="fi-book"></i> <a href="../news/view.php?id={$comment.news_id}">{$news.title}</a></li>
            {/foreach}
        </ul>        
    </div>
    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">Approved news</h3>
        <canvas id="myChart" width="400px" height="400px"></canvas>
    </div>
</div>

<script>
    var data = [
        {
            value: 30,
            color: "#F38630"
        },
        {
            value: 70,
            color: "#E0E4CC"
        }
    ]
    
    var options = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 2,
        //Boolean - Whether we should animate the chart	
        animation: true,
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Pie
        animateRotate: true,
        //Boolean - Whether we animate scaling the Pie from the centre
        animateScale: false,
        //Function - Will fire on animation completion.
        onAnimationComplete: null
    }

    // Get the context of the canvas element we want to select
    var ctx = $("#myChart").get(0).getContext("2d");
    // Create the fucking chart
    var chart = new Chart(ctx).Pie(data, options);
</script>

{include 'common/footer.tpl'}