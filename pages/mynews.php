<?php include './header-user.php'; ?>

<div class="row">
    <div class="small-12 columns">
        <h1>My news</h1>

        <div class="newstab">
        <dl class="tabs" data-tab>
          <dd class="active"><a href="#panel2-1">Drafts</a></dd>
          <dd><a href="#panel2-2">Pending Approval</a></dd>
            <dd><a href="#panel2-3">Approved</a></dd>
          <dd><a href="#panel2-4">Rejected</a></dd>
            <dd><a href="#panel2-5">All news</a></dd>
        </dl>
        <div class="tabs-content">
          <div class="content active" id="panel2-1">

            <!--  Drafts tab -->

                <div class = "drafts">

                <table>
                  <thead>
                    <tr>
                      <th width="150">Title</th>
                      <th width="150">Created on</th>
                      <th width="150">Submit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a>Lorem ipsum</a></td>
                      <td>22/02/2014</td>
                      <td><a href="#" class="tiny button radious">Publish</a></td>
                    </tr>
                    <tr>
                      <td><a>Consectetuer adipiscing elit</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button radious">Publish</a></td>
                    </tr>
                      <tr>
                      <td><a>Nonummy nibh euismod</a></td>
                      <td>12/03/2014</td>
                      <td><a href="#" class="tiny button radious">Publish</a></td>
                    </tr>
                  </tbody>
                </table>

                </div>

              <!--  Drafts tab end -->

          </div>
            <div class="content" id="panel2-2">


              <!--  Pending approval news tab -->

                <div class = "pendingnews">

                <table>
                  <thead>
                    <tr>
                      <th width="150">Title</th>
                      <th width="150">Created on</th>
                      <th width="150">Publish</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a>Tincidunt ut laoreet</a></td>
                      <td>21/02/2014</td>
                      <td><a href="#" class="tiny button alert radious">Remove</a></td>
                    </tr>
                    <tr>
                      <td><a>Dolore magna</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button alert radious">Remove</a></td>
                    </tr>
                  </tbody>
                </table>

                </div>

              <!--  Pending approval tab end -->


            </div>
          <div class="content" id="panel2-3">


              <!--  Approved news tab -->

                <div class = "approvednews">

                <table>
                  <thead>
                    <tr>
                      <th width="150">Title</th>
                      <th width="150">Created on</th>
                      <th width="150">Publish</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a>Aliquam erat volutpat</a></td>
                      <td>19/02/2014</td>
                      <td><a href="#" class="tiny button success radious">Published</a></td>
                    </tr>
                  </tbody>
                </table>

                </div>

              <!--  Approved news tab end -->


          </div>
          <div class="content" id="panel2-4">


              <!--  Reproved news tab -->

                <div class = "reprovednews">

                <table>
                  <thead>
                    <tr>
                      <th width="150">Title</th>
                      <th width="150">Created on</th>
                      <th width="150">Observations</th>
                      <th width="150">Publish</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a>Ut wisi enim</a></td>
                      <td>17/02/2014</td>
                      <td>Needs some work on the second paragraph</td>
                      <td><a href="#" class="tiny button radious">Publish</a></td>
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
                      <td><a>Nonummy nibh euismod</a></td>
                      <td>12/03/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Draft</a></td>
                    </tr>
                    <tr>
                      <td><a>Lorem ipsum</a></td>
                      <td>22/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Draft</a></td>
                    </tr>
                    <tr>
                      <td><a>Tincidunt ut laoreet</a></td>
                      <td>21/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Pending</a></td>
                    </tr>
                    <tr>
                      <td><a>Consectetuer adipiscing elit</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Draft</a></td>
                    </tr>
                    <tr>
                      <td><a>Dolore magna</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Pending</a></td>
                    </tr>
                    <tr>
                      <td><a>Aliquam erat volutpat</a></td>
                      <td>19/02/2014</td>
                      <td><a href="#" class="tiny button success disabled radious">Published</a></td>
                    </tr>
                    <tr>
                      <td><a>Ut wisi enim</a></td>
                      <td>17/02/2014</td>
                      <td><a href="#" class="tiny button alert disabled radious">Reproved</a></td>
                    </tr>
                      
                  </tbody>
                </table>

                </div>

              <!--  All news tab end -->

          
              
              
          </div>
        </div>







            </div>






    </div>
</div>

<?php include './footer.php'; ?>