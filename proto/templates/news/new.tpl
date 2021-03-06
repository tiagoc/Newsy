{include 'common/header.tpl'}
<form method="post" name="form">
    <div class="row">
        <div class="small-12 columns">
            <h1>Create New Article</h1>

            <form>
                <div class="row">        
                    <div class="large-10 columns">
                        <label for="title"><b>Title</b></label>
                        <input type="text" name="title"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="synopsis"><b>Synopsis</b></label>
                        <textarea name="synopsis"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="body"><b>Body</b></label>
                        <textarea name="body"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="categories"><b>Categories</b></label>
                        <input type="text" name="categories"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <input type="submit" value= "Save" class="right button tiny round" onclick="this.form.action='{$BASE_URL}actions/news/save.php'"/>
                        <input type="submit" value= "Submit" class="right button tiny round" onclick="this.form.action='{$BASE_URL}actions/news/submit.php'"/>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
{include 'common/footer.tpl'}