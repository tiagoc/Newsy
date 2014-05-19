<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 14:39:32
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1354793025537a01161bc761-39149896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde9ecff3e86fe6612dd2a1a9b83126918e96bc5' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/common/header.tpl',
      1 => 1400506483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1354793025537a01161bc761-39149896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a01162a5187_60949500',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'NAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a01162a5187_60949500')) {function content_537a01162a5187_60949500($_smarty_tpl) {?><!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Newsy</title>

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/foundation-icons.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/foundation.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/globalrules.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/custom.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/responsive-tables.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/foundation-datepicker.css" />

        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/vendor/modernizr.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/foundation.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/foundation/foundation.orbit.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/foundation/foundation.dropdown.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/Chart.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/responsive-tables.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/foundation-datepicker.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/news.js"></script>
    </head>


    <body>

        <!-- Nav Bar -->

        <div class="row">
            <div class="small-12 columns">
                <span class="left">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><h1>Newsy <small>Fresh news. Your way.</small></h1></a>
                </span>

                <span class="right">  
                    <?php if ($_smarty_tpl->tpl_vars['NAME']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                </span>    

                <div id="loginModal" class="reveal-modal small" data-reveal>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                        <div class="row">
                            <div class="small-8 small-centered columns">
                                <h1>Login</h1>
                                <input type="text" name="email" placeholder="email"/>                                
                                <input type="password" name="password" placeholder="password"/>  
                                <input type="submit" value="Submit" class="right button tiny round"/>                                
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="small-8 small-centered columns">
                                Don't have an account? Register <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/new.php">here</a>!
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <hr/>
        </div>   

        <!-- End Nav -->
        <div class="row" id="error_messages">
            <div class="small-12 columns">
                <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                    <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
                <?php } ?>
            </div>
        </div>
        <div class="row" id="success_messages">
            <div class="small-12 columns">
                <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
                    <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
                <?php } ?>
            </div>
        </div>        
        <br/><?php }} ?>
