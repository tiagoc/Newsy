<?php include './header-user.php'; ?>

<div class="row">
    <div class="small-12 columns">
        <h1>Edit Article</h1>

        <form>
            <div class="row">        
                <div class="large-10 columns">
                    <label for="title"><b>Title</b></label>
                    <input type="text" name="title" value="Lorem Ipsum"/>
                </div>
            </div>
            <div class="row">
                <div class="large-10 columns">
                    <label for="body"><b>Body</b></label>
                    <textarea name="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rhoncus rutrum ipsum, at facilisis elit pharetra quis. Aenean justo felis, elementum vitae ultricies at, ultricies vel augue. Donec egestas velit sed arcu dignissim, convallis viverra elit hendrerit. Sed in volutpat lorem, non consequat augue. Sed tristique eros sed est ornare, in congue metus porta. Nam sit amet velit eu arcu tincidunt imperdiet sit amet non sapien. Suspendisse eu dolor convallis, imperdiet diam et, vehicula enim. Cras condimentum arcu eget molestie iaculis. Donec lacinia, orci non tincidunt aliquet, odio enim aliquet augue, nec vestibulum lacus neque a metus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In lobortis arcu a malesuada lobortis. Donec sodales, felis eget fermentum sodales, eros diam sagittis lectus, vitae sollicitudin lorem sem sit amet nisl. Pellentesque sit amet arcu ornare, euismod mauris molestie, vulputate est. Aenean scelerisque egestas erat ac rutrum.Ut at adipiscing enim, in adipiscing turpis. Donec ut ipsum a ligula tempus interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent non diam urna. Integer auctor et diam non volutpat. Nam ipsum quam, ullamcorper id pretium ac, volutpat id eros. Maecenas suscipit imperdiet elit, id pharetra nulla tempor a. Suspendisse potenti.</textarea>
                </div>
            </div>
            <div class="row">
                <div class="large-10 columns">
                    <label for="categories"><b>Categories</b></label>
                    <input type="text" name="categories" value="Lorem, Ipsum"/>
                </div>
            </div>
            <div class="row">
                <div class="large-10 columns">
                    <input type="submit"  value= "Save" class="right button tiny round"/>
                    <input type="submit"  value= "Submit" class="right button tiny round"/>
                </div>
            </div>
        </form>    
    </div>
</div>

<?php include './footer.php'; ?>