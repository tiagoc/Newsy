{include 'common/header.tpl'}
<!-- Main Page Content and Sidebar -->

<div class="row">

    <!-- Main Blog Content -->

    <div class="large-9 columns" role="content" id="news">        
        {foreach $news as $article}
            <article id="article-{$article.id}">

                <h3><a href="#">{$article.title}</a></h3>
                <h4><small>Written by <a href="#">{$article.journalist}</a> on August 12, 2012.</small></h4>

                <div class="row">
                    <div class="large-12 columns">
                        <p><b>{$article.synopsis}</b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="large-6 columns">
                        <p>{$article.body}</p>
                    </div>
                    <div class="large-6 columns">
                        <img src="http://placehold.it/400x240&text=[img]" />
                    </div>
                </div>                 

                <div id="category"><i class="fi-price-tag"></i> Categories</div> <p>Politics, Food </p>
                <p class="text-right"><i class="fi-comment"></i> {$article.ncomments}</p> 
            </article>
            <hr/>    
        {/foreach}

        <button>Previous</button>
        <button>Next</button>
    </div>
    <!-- End Main Content -->

    {include 'news/sidebar.tpl'}

</div>

<!-- End Main Content and Sidebar -->
{include 'common/footer.tpl'}