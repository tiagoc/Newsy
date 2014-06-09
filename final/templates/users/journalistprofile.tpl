
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