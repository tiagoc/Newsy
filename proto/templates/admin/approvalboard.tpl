{include 'common/header.tpl'}
<div class="row">
    <div class="small-12 columns">
        <h1>Approval Board</h1>

        <div class="approval-board">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panel2-1">News Pending Approval</a></dd>
                <dd><a href="#panel2-2">Approved News</a></dd>
                <dd><a href="#panel2-3">Reproved News</a></dd>
            </dl>
            <div class="tabs-content">
                <div class="content active" id="panel2-1">

                    <!--  Pending news tab -->
                    <div class="pendingnews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Creator</th>
                                    <th width="50" class="app-rep-button" 
                                        onclick="if ($('.reprove-button').size() == 0)
                                                    $('.reprove-button, .publish-button').html('Reprove');
                                                else
                                                    $('.reprove-button, .publish-button').html('Publish');
                                                                                    $('.reprove-button, .publish-button').toggleClass('publish-button').toggleClass('reprove-button');">Change Approval</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $submittednews as $article}
                                <form action="{$BASE_URL}actions/news/publish.php" method='post'>
                                    <tr>                                        
                                        <td><a href='{$BASE_URL}pages/news/view.php?article={$article.id}'>{$article.title}</a></td>
                                        <td><a href="{$BASE_URL}pages/users/journalistprofile.php?id={$article.journalist_id}">{$article.name}</a></td>
                                        <td><input type="submit" class="tiny button radious publish-button" value="Publish"/></td>

                                    <input type="hidden" name="id" value="{$article.id}"/>
                                    </tr>
                                </form>
                            {/foreach}
                            </tbody>
                        </table>
                    </div>

                    <!--  Pending news tab end -->
                </div>
                <div class="content" id="panel2-2">

                    <!--  Approved news tab -->
                    <div class="approvednews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Creator</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a>The dangers of the sun</a></td>
                                    <td>Sarah Parker</td>
                                    <td><a href="#" class="tiny button radious unpublish-button">Unpublish</a></td>
                                </tr>
                                <tr>
                                    <td><a>Another day in the life of a college student</a></td>
                                    <td>Rita Cae</td>
                                    <td><a href="#" class="tiny button radious unpublish-button">Unpublish</a></td>
                                </tr>
                                <tr>
                                    <td><a>The wonderful days of summer</a></td>
                                    <td>Yoine Lu</td>
                                    <td><a href="#" class="tiny button radious unpublish-button">Unpublish</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--  Approved news tab end -->
                </div>
                <div class="content" id="panel2-3">
                    <!--  Reproved news tab -->

                    <div class="reprovednews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Creator</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a>Real stuff happened</a></td>
                                    <td>Jonh Doe</td>
                                    <td><a href="#" class="tiny button radious delete-button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><a>New news</a></td>
                                    <td>Emma Derpson</td>
                                    <td><a href="#" class="tiny button radious delete-button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><a>Who let the dogs out?</a></td>
                                    <td>Judite Almeida</td>
                                    <td><a href="#" class="tiny button radious delete-button">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--  Reproved news tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
{include 'common/footer.tpl'}