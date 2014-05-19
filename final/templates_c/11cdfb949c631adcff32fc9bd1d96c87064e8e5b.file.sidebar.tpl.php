<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 14:03:18
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031530393537a01162d51b1-20045016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11cdfb949c631adcff32fc9bd1d96c87064e8e5b' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/sidebar.tpl',
      1 => 1400229670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031530393537a01162d51b1-20045016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a01162db680_93028488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a01162db680_93028488')) {function content_537a01162db680_93028488($_smarty_tpl) {?><!-- Sidebar -->
<aside class="large-3 columns">
    <div class="panel">
    
        <input type="text" placeholder="Search">
<!--        <a href="#" class="button expand">Search</a>-->
        
       
        <h5 class="text-center">Categories</h5>
        <ul class="side-nav" id="category-widget">
            <script>$(document).ready(fillCategoryWidget());</script>
        </ul>
    </div>
</aside>

<!-- End Sidebar --><?php }} ?>
