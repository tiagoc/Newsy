<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 15:09:01
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1619208773537a107d6b4800-06556838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa4153e6930334512b456171efcfc381b4477263' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/common/menu_logged_in.tpl',
      1 => 1400229670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1619208773537a107d6b4800-06556838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAME' => 0,
    'BASE_URL' => 0,
    'ROLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a107d8bb9a8_58919545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a107d8bb9a8_58919545')) {function content_537a107d8bb9a8_58919545($_smarty_tpl) {?><a href="#" data-dropdown="user-menu" class="button round dropdown"><i class="fi-torso" id="torso-header-user"></i><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</a><br>
<ul id="user-menu" data-dropdown-content class="f-dropdown">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/list.php"><i class="fi-list"></i>News</a></li>
    <?php if ($_smarty_tpl->tpl_vars['ROLE']->value&&($_smarty_tpl->tpl_vars['ROLE']->value=='journalist'||$_smarty_tpl->tpl_vars['ROLE']->value=='editor'||$_smarty_tpl->tpl_vars['ROLE']->value=='admin')) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/new.php"><i class="fi-pencil"></i>Write Article</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['ROLE']->value&&($_smarty_tpl->tpl_vars['ROLE']->value=='journalist'||$_smarty_tpl->tpl_vars['ROLE']->value=='editor'||$_smarty_tpl->tpl_vars['ROLE']->value=='admin')) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/mynews.php"><i class="fi-results"></i>My Board</a></li>
    <?php }?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php"><i class="fi-torso"></i>My Profile</a></li>
    <?php if ($_smarty_tpl->tpl_vars['ROLE']->value&&($_smarty_tpl->tpl_vars['ROLE']->value=='admin'||$_smarty_tpl->tpl_vars['ROLE']->value=='editor')) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/approvalboard.php"><i class="fi-checkbox"></i>Approval Board</a></li>
    <?php }?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php"><i class="fi-lock"></i>Logout</a></li>
</ul><?php }} ?>
