<?php include './header-user.php'; ?>

<div class="row">
    <div class="small-12 columns">
        <h1>Write new Article</h1>

        <form>
            <div class="row">        
                <div class="large-10 columns">
                    <label for="title"><b>Title</b></label>
                    <input type="text" name="title"/>
                </div>
            </div>
            <div class="row">
                <div class="large-10 columns">
                    <label for="body"><b>Body</b></label>
                    <textarea name="title"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="large-10 columns">
                    <label for="categories"><b>Categories</b></label>
                    <input type="text" name="categories"/>
                </div>
            </div>
            <input type="submit" class="right button tiny round"/>
        </form>    
    </div>
</div>

<?php include './footer.php'; ?>