{include 'common/header.tpl'}
<!-- Main Page Content and Sidebar -->

<div class="row">

    <!-- Main Blog Content -->

    <div class="large-9 columns" id="news">        
        {foreach $news as $article}
            <article id="article-{$article.id}">

                <h3><a href="{$BASE_URL}pages/news/view.php?id={$article.id}">{$article.title}</a></h3>
                <h4><small>Written by <a href="{$BASE_URL}pages/users/profile.php?id={$article.journalist_id}">{$article.journalist}</a> on {$article.dates.publish.published_at}.</small></h4>

                <div class="row">
                    <div class="large-12 columns">
                        <p><b>{$article.synopsis}</b></p>
                    </div>
                </div>                                 

                <div class="category"><i class="fi-price-tag"></i> Categories</div><p>
                    {foreach $article.categories as $c name=catlist}
                        {$c.name}
                        {if not $smarty.foreach.catlist.last}
                            , 
                        {/if}
                    {foreachelse}
                        - none -
                    {/foreach}
                </p>
                <p class="text-right"><i class="fi-comment"></i> {$article.ncomments}</p> 
            </article>
            <hr/>    
        {/foreach}


        {if $start > 1}
            <a href="{$BASE_URL}pages/news/list.php?start={$start-$n}&n={$n}" class="button left">Previous Page</a>
        {/if}
                
        <a href="{$BASE_URL}pages/news/list.php?start={$lastnewsid+1}&n={$n}" class="button right">Next Page</a>
    </div>
    <!-- End Main Content -->

    {include 'news/sidebar.tpl'}

</div>

<!-- End Main Content and Sidebar -->
{include 'common/footer.tpl'}