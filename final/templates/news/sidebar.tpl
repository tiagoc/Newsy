<!-- Sidebar -->

<aside class="large-3 columns">
    <div class="panel">
  
        <form action="{$BASE_URL}pages/news/search.php" method="get">
            <div class="row collapse">
                <div class="small-9 columns">
                    <input name="s" type="text" placeholder="Search">
                </div>
                <div class="small-3 columns">
                    <input value="Go" type="submit" class="button postfix"/>
		</div>
            </div>	
	</form>
            
            
            
            <input type="submit" value= "Submit" 
                   class="right button tiny round" 
                   onclick="this.form.action = '{$BASE_URL}actions/news/submit.php'"/>

        <h5 class="text-center">Categories</h5>
        <ul class="side-nav" id="category-widget">
            <script>$(document).ready(fillCategoryWidget());</script>
        </ul>
    </div>
</aside>

<!-- End Sidebar -->