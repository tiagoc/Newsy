{include 'common/header.tpl'}

<div class="row">
    <div class="small-12 columns">
        <h1>My News</h1>

        <div class="newstab">
            <dl class="tabs" data-tab>
                <dd><a href="#panel2-1">Pending Approval</a></dd>
                <dd><a href="#panel2-2">Approved</a></dd>
                <dd><a href="#panel2-3">Reproved</a></dd>
                <dd><a href="#panel2-4">Drafts</a></dd>
                <dd class="active"><a href="#panel2-5">All News</a></dd>
            </dl>

            <div class="tabs-content">
                <div class="content" id="panel2-4">

                    <!--  Drafts tab -->

                    <div class="drafts">

                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>                      
                                {foreach $news as $article}
                                    {if $article.state == 'Draft'}                            
                                        <tr id="draft-{$article.id}">
                                            <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>
                                            <td>{$dates[$article['id']]["draftdate"]}</td>                                            
                                            <td><a onclick="submitExistingNews({$article.id});" class="tiny button radious submit-button">Submit</a></td>                                    
                                        </tr>
                                    {/if}
                                {/foreach}
                            </tbody>
                        </table>

                    </div>

                    <!--  Drafts tab end -->

                </div>
                <div class="content" id="panel2-1">


                    <!--  Pending approval news tab -->

                    <div class = "pending">

                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $news as $article}
                                    {if $article.state == 'Submitted'}  
                                        <tr id="submitted-{$article.id}">
                                            <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>
                                            <td>{$dates[$article['id']]["submissiondate"]}</td>
                                            <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                                        </tr>
                                    {/if}
                                {/foreach}
                            </tbody>
                        </table>
                    </div>

                    <!--  Pending approval tab end -->


                </div>
                <div class="content" id="panel2-2">


                    <!--  Approved news tab -->

                    <div class = "approved">

                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $news as $article}
                                    {if $article.state == 'Approved'}  
                                        <tr id="published-{$article.id}">
                                            <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>
                                            <td>{$dates[$article['id']]["publishdate"]}</td>
                                            <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                                        </tr>
                                    {/if}
                                {/foreach}
                            </tbody>
                        </table>

                    </div>

                    <!--  Approved news tab end -->


                </div>
                <div class="content" id="panel2-3">


                    <!--  Reproved news tab -->

                    <div class = "reproved">

                        <table>
                            <thead>
                                <tr>
                                    <th width="350">Title</th>
                                    <th width="250">Observations</th>
                                    <th width="30">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                           
                                    {foreach $news as $article}
                                        {if $article.state == 'Rejected'}  
                                        <tr id="rejected-{$article.id}">
                                            <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>
                                            <td>{$reasons[$article['id']]['reason']}</td>
                                            <td>{$dates[$article['id']]["rejectdate"]}</td>
                                            <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                                        </tr>
                                    {/if}
                                {/foreach}                            
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--  Reproved news tab end -->

                <div class="content active" id="panel2-5">

                    <!--  All news tab -->

                    <div class = "allnews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="770">Title</th>
                                    <th width="50">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $news as $article}
                                    <tr>
                                        <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>               
                                        <td><a href="#" class="tiny button disabled radious">{$article.state}</a></td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>

                    <!--  All news tab end -->  
                </div>
            </div>
        </div>
    </div>
</div>                                                                
{include 'common/footer.tpl'}