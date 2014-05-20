<?php /* Smarty version Smarty-3.1.15, created on 2014-05-20 16:57:38
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1708530214537b629b4f6f94-08095445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70627fe60831844d02b8a81b99afb3784b13ac6e' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/article.tpl',
      1 => 1400601455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708530214537b629b4f6f94-08095445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537b629b5dd9a6_73437578',
  'variables' => 
  array (
    'article' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b629b5dd9a6_73437578')) {function content_537b629b5dd9a6_73437578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="row">

    <!-- Main Content -->

    <div class="large-9 columns" role="content">

        <article>
            <h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a><i class="fi-star favourite-star-disabled" onclick="$('.favourite-star-disabled, .favourite-star-enabled').toggleClass('favourite-star-disabled').toggleClass('favourite-star-enabled');"></i></h3>
            <h4><small>Written by <a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['journalist'];?>
</a> on August 12, 2012.</small></h4>
            <p></p>

            <div class="row">
                <div class="large-12 columns">
                    <p class="text-justify"><b><?php echo $_smarty_tpl->tpl_vars['article']->value['synopsis'];?>
</b></p>
                </div>
            </div> 
            <div class="row">
                <div class="large-12 columns">
                    <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['article']->value['body'];?>
</p>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <p class="text-center"><img src="http://placehold.it/400x240&text=[img]"/></p>
                </div>
            </div>

            <div id="category"><i class="fi-price-tag"></i> Categories</div> <p>Politics, Food </p>
            <div id="rating">Rating: <a id="stars">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#rating").find(".fi-star").attr('onclick', 'selectStars(this);');
                        });
                    </script>
                    <i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i><i class="fi-star rating-star-disabled"></i></div> 
            <p class="text-right"><i class="fi-comment"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['ncomments'];?>
</p> 
        </article>


        <div id="comments">

            <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                <div id="comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" class="panel radius">
                    <h5><small><div class="comment-username"><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
</div><div class="comment-datetime"><?php echo $_smarty_tpl->tpl_vars['comment']->value['published_at'];?>
</div><button type="button" class="comment-delete">Delete</button><button type="button" class="comment-edit">Edit</button></small></h5>
                    <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</p>
                </div>
            <?php } ?>

            <textarea name="body"></textarea>

        </div>

    </div>

    <!-- End Content -->

    <?php echo $_smarty_tpl->getSubTemplate ('news/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
