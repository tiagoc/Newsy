<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 09:51:50
         compiled from "/usr/users1/dei/arestivo/public_html/example.twitter/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416522260529868068a83a7-15069575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '580b1b007af85be05c9bd1ca7aa136c6af0a4a06' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.twitter/templates/common/menu_logged_in.tpl',
      1 => 1386924323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416522260529868068a83a7-15069575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529868068b4cc5_92146933',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529868068b4cc5_92146933')) {function content_529868068b4cc5_92146933($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
