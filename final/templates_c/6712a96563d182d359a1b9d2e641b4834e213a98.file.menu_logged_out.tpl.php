<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 08:45:05
         compiled from "/usr/users1/dei/arestivo/public_html/example.twitter/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18194368165298662375cd81-36016238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6712a96563d182d359a1b9d2e641b4834e213a98' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.twitter/templates/common/menu_logged_out.tpl',
      1 => 1386924323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18194368165298662375cd81-36016238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52986623769b03_03649112',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52986623769b03_03649112')) {function content_52986623769b03_03649112($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
