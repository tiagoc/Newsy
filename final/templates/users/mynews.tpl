{include 'common/header.tpl'}

<div class="row">
    <div class="small-12 columns">
        <h1>My News - {$state}</h1>
        <a href="#" data-dropdown="options" class="button dropdown right">Current State</a><br>
        <ul id="options" data-dropdown-content class="f-dropdown">
            <li><a href="{$BASE_URL}pages/users/mynews.php?state=submitted">Submitted</a></li>
            <li><a href="{$BASE_URL}pages/users/mynews.php?state=published">Published</a></li>
            <li><a href="{$BASE_URL}pages/users/mynews.php?state=rejected">Rejected</a></li>
            <li><a href="{$BASE_URL}pages/users/mynews.php?state=drafts">Drafts</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="small-12 columns">                    
        <table style="width: 100%" class="responsive">
            <thead>
                <tr>
                    <th width="500">Title</th>
                        {if $state == "Submitted"}
                        <th width="270">Submitted at</th>
                        {elseif $state == "Draft" }
                        <th width="270">Created at</th>
                        {elseif $state == "Published"}
                        <th width="150">Published at</th>
                        {elseif $state == "Rejected"}
                        <th width="100">Rejected at</th>
                        <th width="170">Reason</th>
                        {/if}

                    {if $state != "Published"}
                        <th width="50"></th>
                        {/if}
                </tr>
            </thead>
            <tbody>                      
                {foreach $news as $article}                                                    
                        <tr id="article-{$article.id}">
                        <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>
                            {if $state == "Submitted"}
                            <td>{$article.dates.submission.submitted_at}</td>                                            
                            <td><a onclick="deleteNews({$article.id});" class="tiny button radious delete-button">Delete</a></td>                                    
                        {elseif $state == "Draft" }
                            <td>{$article.dates.draft.updated_at}</td>                                            
                            <td><a onclick="submitExistingNews({$article.id});" class="tiny button radious submit-button">Submit</a></td>                                    
                        {elseif $state == "Published"}
                            <td>{$article.dates.reject.published_at}</td>                                                                        
                        {elseif $state == "Rejected"}
                            <td>{$article.dates.reject.rejected_at}</td>
                            <td><a href="{$BASE_URL}pages/news/edit.php?id={$article.id}" class="tiny button radious unpublish-button">Edit</a></td>
                        {/if}                        
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>                                                              
{include 'common/footer.tpl'}