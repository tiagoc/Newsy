<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 15:29:55
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/users/mynews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:703843930537a1563c46450-02333795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc4fdd1df3d422e6465b126effb1109493308b7' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/users/mynews.tpl',
      1 => 1400229670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703843930537a1563c46450-02333795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'article' => 0,
    'BASE_URL' => 0,
    'dates' => 0,
    'reasons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a1563f104b6_35348735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a1563f104b6_35348735')) {function content_537a1563f104b6_35348735($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
    <div class="small-12 columns">
        <h1>My News</h1>

        <div class="newstab">
            <dl class="tabs" data-tab>
                <dd><a href="#panel2-1">Pending Approval</a></dd>
                <dd><a href="#panel2-2">Approved</a></dd>
                <dd><a href="#panel2-3">Reproved</a></dd>
                <dd><a href="#panel2-4">Drafts</a></dd>
                <dd class="active"><a href="#panel2-5">All News</a></dd>
            </dl>

            <div class="tabs-content">
                <div class="content" id="panel2-4">

                    <!--  Drafts tab -->

                    <div class="drafts">

                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>                      
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['article']->value['state']=='Draft') {?>                            
                                        <tr id="draft-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
                                            <td><a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['article']->value['id']]["draftdate"];?>
</td>                                            
                                            <td><a onclick="submitExistingNews(<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
);" class="tiny button radious submit-button">Submit</a></td>                                    
                                        </tr>
                                    <?php }?>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                    <!--  Drafts tab end -->

                </div>
                <div class="content" id="panel2-1">


                    <!--  Pending approval news tab -->

                    <div class = "pending">

                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['article']->value['state']=='Submitted') {?>  
                                        <tr id="submitted-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
                                            <td><a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['article']->value['id']]["submissiondate"];?>
</td>
                                            <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                                        </tr>
                                    <?php }?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!--  Pending approval tab end -->


                </div>
                <div class="content" id="panel2-2">


                    <!--  Approved news tab -->

                    <div class = "approved">

                        <table>
                            <thead>
                                <tr>
                                    <th width="500">Title</th>
                                    <th width="270">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['article']->value['state']=='Approved') {?>  
                                        <tr id="published-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
                                            <td><a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['article']->value['id']]["publishdate"];?>
</td>
                                            <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                                        </tr>
                                    <?php }?>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                    <!--  Approved news tab end -->


                </div>
                <div class="content" id="panel2-3">


                    <!--  Reproved news tab -->

                    <div class = "reproved">

                        <table>
                            <thead>
                                <tr>
                                    <th width="350">Title</th>
                                    <th width="250">Observations</th>
                                    <th width="30">Created on</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                           
                                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['article']->value['state']=='Rejected') {?>  
                                        <tr id="rejected-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
                                            <td><a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['article']->value['id']]['reason'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['article']->value['id']]["rejectdate"];?>
</td>
                                            <td><a href="#" class="tiny button alert radious delete-button">Delete</a></td>
                                        </tr>
                                    <?php }?>
                                <?php } ?>                            
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--  Reproved news tab end -->

                <div class="content active" id="panel2-5">

                    <!--  All news tab -->

                    <div class = "allnews">
                        <table>
                            <thead>
                                <tr>
                                    <th width="770">Title</th>
                                    <th width="50">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                    <tr>
                                        <td><a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/news/view.php?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>               
                                        <td><a href="#" class="tiny button disabled radious"><?php echo $_smarty_tpl->tpl_vars['article']->value['state'];?>
</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!--  All news tab end -->  
                </div>
            </div>
        </div>
    </div>
</div>                                                                
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
