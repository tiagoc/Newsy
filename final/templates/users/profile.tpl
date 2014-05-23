{include 'common/header.tpl'}

<div class="row">
    <div class="large-9 columns">
        <div class="row">

            <div class="row">
                <div class="small-12 columns">
                    <h2 class="left"><i class="fi-torso"></i><div id="username">{$user.name}</div></h2>                
                    <h2 class="right"><a href="#"><i class="fi-pencil"></i></a></h2>
                </div>
            </div>

            <div class="row">
                <div class="small-4 columns"><i class="fi-mail"></i><div id="email">
                        <big>Email</big></div></div>
                <div class="small-8 columns">{$user.email}</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-male-female"></i>
                    <div id="gender"><big>Gender</big></div></div> 
                <div class="small-8 columns">{$user.gender}</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-calendar"></i><div id="birthday">
                        <big>Birthday</big></div></div> 
                <div class="small-8 columns">{$user.birthday}</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-clock"></i>
                    <div id="regdate"><big>Registered Since</big></div></div> 
                <div class="small-8 columns">{$user.registered_since}</div>
            </div>
            <br/><br/>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="large-3 columns">        
        <a href=""><img id="userimage" src=" {$gravatar_link} "></a>
        <a href="#"><big><b><i class="fi-social-youtube small-3 small-centered columns"></i></b></big></a>
        <a href="#"><big><b><i class="fi-social-facebook small-3 small-centered columns"></i></b></big></a>
        <a href="#"><big><b><i class="fi-social-google-plus small-3 small-centered columns"></i></b></big></a>
        <a href="#"><big><b><i class="fi-social-linkedin small-3 small-centered columns"></i></b></big></a>
    </div>
    <!-- End Sidebar -->
</div>

<div class="row">
    <hr>
</div>

<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">Favourite news</h3>
        <ul id="favouritesli">
            <li><i class="fi-star"></i> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
            <li><i class="fi-star"></i> <a href="#">Mauris tristique eros orci, nec sodales nisi adipiscing malesuada</a></li>
            <li><i class="fi-star"></i> <a href="#">Nullam vitae imperdiet justo, in pretium nibh</a></li>
        </ul>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <h3 class="text-left">Last comments</h3>
        <ul id="commentsli">
            <li><i class="fi-comment"></i><div class="comment">Duis sem lectus, sodales venenatis pulvinar sit amet, cursus at augue</div><a href="#">Nulla facilisi</a></li>
            <li><i class="fi-comment"></i><div class="comment">Suspendisse vulputate cursus ornare</div><a href="#">Nam nec enim quis odio facilisis ullamcorper dapibus vel nisl</a></li>
            <li><i class="fi-comment"></i><div class="comment">Interdum et malesuada fames ac ante ipsum primis in faucibus</div><a href="#">Sed sed pretium quam, eu tempor elit</a></li>
        </ul>
    </div>
</div>
{include 'common/footer.tpl'}