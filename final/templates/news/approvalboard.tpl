{include 'common/header.tpl'}

<div class="row">
    <div class="small-12 columns">
        <h1>Approval Board</h1>
    </div>
</div>
<br/>
<div class="row">
    <div class="large-5 columns"><b>Title</b></div>
    <div class="large-3 columns"><b>Creator</b></div>
    <div class="large-2 columns"></div>
    <div class="large-2 columns"></div>    
    <hr/>
</div>

{foreach $news as $article}
    {if $article.journalist != $NAME}
        <div class="row" id="article-{$article.id}">    
            <div class="large-5 columns"><a href="../news/view.php?article={$article.id}">{$article.title}</a></div>
            <div class="large-3 columns"><a href="../users/journalistprofile.php?id={$article.journalist_id}">{$article.journalist}</a></div>
            <div class="large-2 columns"><button onclick="publishNews({$article.id});" class="tiny button radious publish-button">Publish</button></div>
            <div class="large-2 columns"><button onclick="rejectNews({$article.id});" class="tiny button radious delete-button">Reject</button></div>    
        </div>
    {/if}
{/foreach}

{include 'common/footer.tpl'}