<?php include './header-user.php'; ?>

<div class="row">
    <div class="small-12 columns">
        <h1>Approval Board</h1>

        <div class="approvaltab">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panel2-1">News pending approval</a></dd>
                <dd><a href="#panel2-2">Approved News</a></dd>
                <dd><a href="#panel2-3">Reproved News</a></dd>
            </dl>
            <div class="tabs-content">
                <div class="content active" id="panel2-1">

                    <!--  Pending news tab -->

                    <div class = "pendingnews">

                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th width="150">Title</th>
                                    <th width="150">Creator</th>
                                    <th width="150">Publish</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a>Real stuff happened</a></td>
                                    <td>Jonh Doe</td>
                                    <td><a href="#" class="tiny button radious">Publish</a></td>
                                </tr>
                                <tr>
                                    <td><a>New news</a></td>
                                    <td>Emma Derpson</td>
                                    <td><a href="#" class="tiny button radious">Publish</a></td>
                                </tr>
                                <tr>
                                    <td><a>Who let the dogs out?</a></td>
                                    <td>Judite Almeida</td>
                                    <td><a href="#" class="tiny button radious">Publish</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!--  Pending news tab end -->

                </div>
                <div class="content" id="panel2-2">


                    <!--  Approved news tab -->

                    <div class = "approvednews">

                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th width="150">Title</th>
                                    <th width="150">Creator</th>
                                    <th width="150">Publish</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a>The countdown</a></td>
                                    <td>Steve Nojob</td>
                                    <td><a href="#" class="tiny button alert radious">Unpublish</a></td>
                                </tr>
                                <tr>
                                    <td><a>Important things</a></td>
                                    <td>Catherine York</td>
                                    <td><a href="#" class="tiny button alert radious">Unpublish</a></td>
                                </tr>
                                <tr>
                                    <td><a>Great questions</a></td>
                                    <td>Francesco Silva</td>
                                    <td><a href="#" class="tiny button alert radious">Unpublish</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!--  Approved news tab end -->


                </div>
                <div class="content" id="panel2-3">


                    <!--  Reproved news tab -->

                    <div class = "approvednews">

                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th width="150">Title</th>
                                    <th width="150">Creator</th>
                                    <th width="150">Publish</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                <tr>

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

<?php
         include './footer.php'; ?>