<?php /* Smarty version Smarty-3.1.15, created on 2013-11-29 11:20:15
         compiled from "/usr/users1/dei/arestivo/public_html/example.twitter.new/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15100625985298786fc486e8-63298262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb24c2615b17373f3ee648bdf6a437d754f9013' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.twitter.new/templates/common/menu_logged_out.tpl',
      1 => 1385719262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15100625985298786fc486e8-63298262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5298786fc56f55_51542863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298786fc56f55_51542863')) {function content_5298786fc56f55_51542863($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
