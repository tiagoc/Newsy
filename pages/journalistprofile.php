<?php include 'header-user.php'; ?>

<div class="row">
    <div class="large-9 columns">
        <div class="row">

            <div class="row">
                <div class="small-12 columns">
                    <h2 class="left"><i class="fi-torso"></i><div id="username">John Smith</div></h2>                
                    <h2 class="right"><a href="#"><i class="fi-pencil"></i></a></h2>
                </div>
            </div>

            <div class="row">
                <div class="small-4 columns"><i class="fi-mail"></i><div id="email"><big>Email</big></div></div><div class="small-8 columns">nofway@random.com</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-male-female"></i><div id="gender"><big>Gender</big></div></div> <div class="small-8 columns">Male</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-calendar"></i><div id="birthday"><big>Birthday</big></div></div> <div class="small-8 columns">31/12/1994</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-home"></i><div id="address"><big>Address</big></div></div> <div class="small-8 columns">Random Street, nr 3, Silicon Valley</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-clock"></i><div id="regdate"><big>Registered Since</big></div></div> <div class="small-8 columns">10/03/2014</div>
            </div>
            <br/><br/>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="large-3 columns">        
        <a href=""><img id="userimage" src="http://placehold.it/400x280"></a>
        <a href="#"><big><b><i class="fi-social-youtube small-3 small-centered columns"></i></b></big></a>
        <a href="#"><big><b><i class="fi-social-facebook small-3 small-centered columns"></i></b></big></a>
        <a href="#"><big><b><i class="fi-social-google-plus small-3 small-centered columns"></i></b></big></a>
        <a href="#"><big><b><i class="fi-social-linkedin small-3 small-centered columns"></i></b></big></a>
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
            <li><i class="fi-star"></i> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
            <li><i class="fi-star"></i> <a href="#">Mauris tristique eros orci, nec sodales nisi adipiscing malesuada</a></li>
            <li><i class="fi-star"></i> <a href="#">Nullam vitae imperdiet justo, in pretium nibh</a></li>
        </ul>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">Last comments</h3>
        <ul id="commentsli">
            <li><i class="fi-comment"></i><div class="comment">Duis sem lectus, sodales venenatis pulvinar sit amet, cursus at augue</div><a href="#">Nulla facilisi</a></li>
            <li><i class="fi-comment"></i><div class="comment">Suspendisse vulputate cursus ornare</div><a href="#">Nam nec enim quis odio facilisis ullamcorper dapibus vel nisl</a></li>
            <li><i class="fi-comment"></i><div class="comment">Interdum et malesuada fames ac ante ipsum primis in faucibus</div><a href="#">Sed sed pretium quam, eu tempor elit</a></li>
        </ul>
    </div>
</div>
<br/>
<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">My last news</h3>
        <ul id="statsli" style="list-style-type: none; margin-left: 0em;">
            <li><i class="fi-book"></i> <a href="#">Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit</a></li>
            <li><i class="fi-book"></i> <a href="#">Pork drumstick turkey fugiat</a></li>
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

<?php include 'footer.php'; ?>
