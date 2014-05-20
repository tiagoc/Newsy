<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 16:38:58
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326913291537a2592cf7095-58724340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9a9375501f88711d1c62976f4567bc35102e11' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/users/profile.tpl',
      1 => 1400229670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326913291537a2592cf7095-58724340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a2592e3aee4_38224039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a2592e3aee4_38224039')) {function content_537a2592e3aee4_38224039($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
    <div class="large-9 columns">
        <div class="row">

            <div class="row">
                <div class="small-12 columns">
                    <h2 class="left"><i class="fi-torso"></i><div id="username">John Smith</div></h2>                
                    <h2 class="right"><a href="#"><i class="fi-pencil"></i></a></h2>
                </div>
            </div>

            <div class="row">
                <div class="small-4 columns"><i class="fi-mail"></i><div id="email"><big>Email</big></div></div><div class="small-8 columns">nofway@random.com</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-male-female"></i><div id="gender"><big>Gender</big></div></div> <div class="small-8 columns">Male</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-calendar"></i><div id="birthday"><big>Birthday</big></div></div> <div class="small-8 columns">31/12/1994</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-home"></i><div id="address"><big>Address</big></div></div> <div class="small-8 columns">Random Street, nr 3, Silicon Valley</div>
            </div>
            <br/>
            <div class="row">
                <div class="small-4 columns"><i class="fi-clock"></i><div id="regdate"><big>Registered Since</big></div></div> <div class="small-8 columns">10/03/2014</div>
            </div>
            <br/><br/>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="large-3 columns">        
        <a href=""><img id="userimage" src="http://placehold.it/400x280"></a>
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
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
