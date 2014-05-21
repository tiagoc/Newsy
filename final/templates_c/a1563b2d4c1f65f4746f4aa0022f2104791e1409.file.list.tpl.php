<?php /* Smarty version Smarty-3.1.15, created on 2014-05-21 19:21:53
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1124674766537a011605d6d9-87252855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1563b2d4c1f65f4746f4aa0022f2104791e1409' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/list.tpl',
      1 => 1400696511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1124674766537a011605d6d9-87252855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a0116187125_03273298',
  'variables' => 
  array (
    'news' => 0,
    'article' => 0,
    'BASE_URL' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a0116187125_03273298')) {function content_537a0116187125_03273298($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Main Page Content and Sidebar -->

<div class="row">

    <!-- Main Blog Content -->

    <div class="large-9 columns" role="content" id="news">        
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
            <article id="article-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">

                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
                <h4><small>Written by <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['journalist_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['journalist'];?>
</a> on August 12, 2012.</small></h4>

                <div class="row">
                    <div class="large-12 columns">
                        <p><b><?php echo $_smarty_tpl->tpl_vars['article']->value['synopsis'];?>
</b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="large-6 columns">
                        <p><?php echo $_smarty_tpl->tpl_vars['article']->value['body'];?>
</p>
                    </div>
                    <div class="large-6 columns">
                        <img src="http://placehold.it/400x240&text=[img]" />
                    </div>
                </div>                 

                <div id="category"><i class="fi-price-tag"></i> Categories</div> <p>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['c']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['c']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->iteration++;
 $_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration === $_smarty_tpl->tpl_vars['c']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['catlist']['last'] = $_smarty_tpl->tpl_vars['c']->last;
?>
                        <?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>

                        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['catlist']['last']) {?>
                            , 
                        <?php }?>
                    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
                        - none -
                    <?php } ?>
                </p>
                <p class="text-right"><i class="fi-comment"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['ncomments'];?>
</p> 
            </article>
            <hr/>    
        <?php } ?>

        <button>Previous</button>
        <button>Next</button>
    </div>
    <!-- End Main Content -->

    <?php echo $_smarty_tpl->getSubTemplate ('news/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<!-- End Main Content and Sidebar -->
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
