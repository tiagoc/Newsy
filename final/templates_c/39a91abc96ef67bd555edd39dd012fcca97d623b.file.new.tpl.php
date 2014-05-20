<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 15:10:14
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:704493756537a10c6b2e9e1-12722339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a91abc96ef67bd555edd39dd012fcca97d623b' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/new.tpl',
      1 => 1400229670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704493756537a10c6b2e9e1-12722339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a10c6c19e08_50078944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a10c6c19e08_50078944')) {function content_537a10c6c19e08_50078944($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                        <input type="submit" value= "Save" class="right button tiny round" onclick="this.form.action='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/news/save.php'"/>
                        <input type="submit" value= "Submit" class="right button tiny round" onclick="this.form.action='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/news/submit.php'"/>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
