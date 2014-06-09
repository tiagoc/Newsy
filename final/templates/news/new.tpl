{include 'common/header.tpl'}

<form data-abide method="post" name="form">
    <div class="row">
        <div class="small-12 columns">
            <h1>Create New Article</h1>

            <form>
                <div class="row">        
                    <div class="large-10 columns">
                        <label for="title"><b>Title</b>  <small>required</small></label>
                        <input type="text" name="title" placeholder="Insert title here" required/>
                        <small class="error">Title is required. Choose it carefully, this is your headline!</small>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="synopsis"><b>Synopsis</b>  <small>required</small></label>
                        <textarea name="synopsis" placeholder="Insert synopsis here" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="body"><b>Body</b>  <small>required</small></label>
                        <textarea id="body" name="body" placeholder="Insert body here" required></textarea>                        
                    </div>
                </div>
                <div class="row">
                    <div class="large-10 columns">
                        <label for="categories"><b>Categories</b>  <small>required</small></label>
                        <input type="text" name="categories" placeholder="Insert categories here (separated by commas)" required/>
                        <small class="error">Please insert at least one category.</small>
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