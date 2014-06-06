{include 'common/header.tpl'}

<form data-abide method="post" name="form">
    <div class="row">
        <div class="small-12 columns">
            <h1>Create New Article</h1>

            <form>
                <div class="row">        
                    <div class="large-10 columns">
                        <label for="title"><b>Title</b>  <small>required</small></label>
                        <input type="text" name="title" required/>
                        <small class="error">Title is required. Choose it carefully, this is your headline!</small>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="synopsis"><b>Synopsis</b>  <small>required</small></label>
                        <textarea name="synopsis" required></textarea>
                        <small class="error">Please insert a small synopsis of your article here.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="body"><b>Body</b>  <small>required</small></label>
                        <textarea name="body" required></textarea>
                        <small class="error">Mandatory field. This is the body of your article.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="categories"><b>Categories</b>  <small>required</small></label>
                        <input type="text" name="categories" required/>
                        <small class="error">Please insert at least one category.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="categories"><b>Images</b></label>
                        <form id="imageform" method="post" enctype="multipart/form-data" action='ajaxImageUpload.php' style="clear:both"> 
                            <div id='imageloadstatus' style='display:none'><img src="{$BASE_URL}images/assets/loader.gif" alt="Uploading...."/></div>
                            <div id='imageloadbutton'>
                                <input type="file" name="photos[]" id="photoimg" multiple="true" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <input type="submit" value= "Save" class="right button tiny round" onclick="this.form.action = '{$BASE_URL}actions/news/save.php'"/>
                        <input type="submit" value= "Submit" class="right button tiny round" onclick="this.form.action = '{$BASE_URL}actions/news/submit.php'"/>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
{include 'common/footer.tpl'}