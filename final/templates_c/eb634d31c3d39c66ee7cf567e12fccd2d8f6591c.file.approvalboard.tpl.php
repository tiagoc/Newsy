<?php /* Smarty version Smarty-3.1.15, created on 2014-05-20 17:20:25
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/approvalboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316091523537b80c97b54e4-65959435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb634d31c3d39c66ee7cf567e12fccd2d8f6591c' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/news/approvalboard.tpl',
      1 => 1400229670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316091523537b80c97b54e4-65959435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submittednews' => 0,
    'BASE_URL' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537b80c992b7b5_06369167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b80c992b7b5_06369167')) {function content_537b80c992b7b5_06369167($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
    <div class="small-12 columns">
        <h1>Approval Board</h1>

        <div class="approval-board">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panel2-1">News Pending Approval</a></dd>
                <dd><a href="#panel2-2">Approved News</a></dd>
                <dd><a href="#panel2-3">Reproved News</a></dd>
            </dl>
            <div class="tabs-content">
                <div class="content active" id="panel2-1">

                    <!--  Pending news tab -->
                    <div class="pendingnews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Creator</th>
                                    <th width="50" class="app-rep-button" 
                                        onclick="if ($('.reprove-button').size() == 0)
                                                    $('.reprove-button, .publish-button').html('Reprove');
                                                else
                                                    $('.reprove-button, .publish-button').html('Publish');
                                                                                    $('.reprove-button, .publish-button').toggleClass('publish-button').toggleClass('reprove-button');">Change Approval</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submittednews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/news/publish.php" method='post'>
                                    <tr id="draft-<?php echo $_smarty_tpl->tpl_vars['article']->value-'id';?>
">                                        
                                        <td><a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/journalistprofile.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['journalist_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a></td>
                                        <td><input type="submit" class="tiny button radious publish-button" value="Publish"/></td>

                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"/>
                                    </tr>
                                </form>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!--  Pending news tab end -->
                </div>
                <div class="content" id="panel2-2">

                    <!--  Approved news tab -->
                    <div class="approvednews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Creator</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a>The dangers of the sun</a></td>
                                    <td>Sarah Parker</td>
                                    <td><a href="#" class="tiny button radious unpublish-button">Unpublish</a></td>
                                </tr>
                                <tr>
                                    <td><a>Another day in the life of a college student</a></td>
                                    <td>Rita Cae</td>
                                    <td><a href="#" class="tiny button radious unpublish-button">Unpublish</a></td>
                                </tr>
                                <tr>
                                    <td><a>The wonderful days of summer</a></td>
                                    <td>Yoine Lu</td>
                                    <td><a href="#" class="tiny button radious unpublish-button">Unpublish</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--  Approved news tab end -->
                </div>
                <div class="content" id="panel2-3">
                    <!--  Reproved news tab -->

                    <div class="reprovednews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Creator</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a>Real stuff happened</a></td>
                                    <td>Jonh Doe</td>
                                    <td><a href="#" class="tiny button radious delete-button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><a>New news</a></td>
                                    <td>Emma Derpson</td>
                                    <td><a href="#" class="tiny button radious delete-button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><a>Who let the dogs out?</a></td>
                                    <td>Judite Almeida</td>
                                    <td><a href="#" class="tiny button radious delete-button">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--  Reproved news tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
