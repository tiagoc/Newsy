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

                <div class = "drafts">

                <table>
                  <thead>
                    <tr>
                      <th width="500">Title</th>
                      <th width="270">Created on</th>
                      <th width="50"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a>Lawyer saves woman's life on his way to work</a></td>
                      <td>22/02/2014</td>
                      <td><a href="#" class="tiny button radious submit-button">Submit</a></td>
                    </tr>
                    <tr>
                      <td><a>Life on a circus</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button radious submit-button">Submit</a></td>
                    </tr>
                      <tr>
                      <td><a>The weather is improving</a></td>
                      <td>12/03/2014</td>
                      <td><a href="#" class="tiny button radious submit-button">Submit</a></td>
                    </tr>
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
                    <tr>
                      <td><a>Man survives crash on a wall</a></td>
                      <td>21/02/2014</td>
                      <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                    </tr>
                    <tr>
                      <td><a>For a minute there I lost my car keys</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                    </tr>
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
                    <tr>
                      <td><a>Giant hurricane keeps damaging homes</a></td>
                      <td>19/02/2014</td>
                      <td><a href="#" class="tiny button success disabled radious">Published</a></td>
                    </tr>
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
                      <td><a>A lovely day in London</a></td>
                      <td>Needs some work on the second paragraph</td>
                      <td>17/02/2014</td>
                      <td><a href="#" class="tiny button radious submit-button">Submit</a></td>
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
                      <th width="500">Title</th>
                      <th width="270">Created on</th>
                      <th width="50">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a>For the cinema fans, a new epic movie</a></td>
                      <td>12/03/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Draft</a></td>
                    </tr>
                    <tr>
                      <td><a>There is a large storm on our way</a></td>
                      <td>22/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Draft</a></td>
                    </tr>
                    <tr>
                      <td><a>We don't need to be there</a></td>
                      <td>21/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious pending-button">Pending</a></td>
                    </tr>
                    <tr>
                      <td><a>A single drop of water can run this machine</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious">Draft</a></td>
                    </tr>
                    <tr>
                      <td><a>Thousands of people with a rare disease now have hope for a cure</a></td>
                      <td>20/02/2014</td>
                      <td><a href="#" class="tiny button disabled radious pending-button">Pending</a></td>
                    </tr>
                    <tr>
                      <td><a>Millions of dollars spent last year on war</a></td>
                      <td>19/02/2014</td>
                      <td><a href="#" class="tiny button success disabled radious">Approved</a></td>
                    </tr>
                    <tr>
                      <td><a>Man runs from burglar and falls into a hole on the ground</a></td>
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
{include 'common/footer.tpl'}