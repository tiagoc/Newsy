<!-- Sidebar -->

<aside class="large-3 columns">
    <div class="panel">

        <form method="get">
            <div class="row collapse">
                <div class="small-9 columns">
                    <input name="s" type="text" placeholder="Search">
                </div>
                <div class="small-3 columns">
                    <button class="button postfix" onclick="this.form.action = '{$BASE_URL}pages/news/search.php'">Go</button>
                </div>
            </div>	
        </form>


        <h5 class="text-center">Categories</h5>
        <ul class="side-nav" id="category-widget">
            <script>$(document).ready(fillCategoryWidget());</script>
        </ul>
    </div>
</aside>

<!-- End Sidebar -->