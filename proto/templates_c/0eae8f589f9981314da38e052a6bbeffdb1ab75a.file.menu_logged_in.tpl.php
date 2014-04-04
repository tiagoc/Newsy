<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 03:06:17
         compiled from "/usr/users1/dei/arestivo/public_html/example.twitter.new/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562418173529878a7e42327-10706247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eae8f589f9981314da38e052a6bbeffdb1ab75a' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.twitter.new/templates/common/menu_logged_in.tpl',
      1 => 1386263521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562418173529878a7e42327-10706247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529878a7f352c9_01265154',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529878a7f352c9_01265154')) {function content_529878a7f352c9_01265154($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
