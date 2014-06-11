{include 'common/header.tpl'}
<!-- Main Page Content and Sidebar -->



<div class="row">

    <!-- Main Blog Content -->     
        <div class="large-9 columns" id="news">        
            {foreach $news as $article}
                <article id="article-{$article.id}" class="item">

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
        </div>        
        <div id="loadmoreajaxloader" style="display:none;"><center><img src="{$BASE_URL}images/assets/ajax-loader.gif" /></center></div>
    <!-- End Main Content -->

    {include 'news/sidebar.tpl'}

</div>

<script type="text/javascript">

    $(document).ready(function() {
        var lastnewsid = parseInt("{$lastnewsid}")+1;
        var baseurl = "{$BASE_URL}";

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() == $(document).height()) {

                $('div#loadmoreajaxloader').show();

                $.getJSON("../../api/news/fetch.php?state=published&start=" + lastnewsid, function(data) {                                        
                    $.each(data, function(i, article) {                              
                        $('#news').append('<article id="article-' + article.id + '" class="item"><h3><a href="' + baseurl + 'pages/news/view.php?id=' + article.id + '">' + article.title + '</a></h3><h4><small>Written by <a href="' + baseurl + 'pages/users/profile.php?id=' + article.journalist_id + '">' + article.journalist + '</a> on ' + article.dates.publish.published_at + '.</small></h4><div class="row"><div class="large-12 columns"><p><b>' + article.synopsis + '</b></p></div></div><p class="text-right"><i class="fi-comment"></i> ' + article.ncomments + '</p></article><hr/>');
                        if (i === data.length-1) {
                            lastnewsid = article.id+1;                            
                        }
                    });
                });

                $('div#loadmoreajaxloader').hide();
            }
        });


    });
</script>

<!-- End Main Content and Sidebar -->
{include 'common/footer.tpl'}