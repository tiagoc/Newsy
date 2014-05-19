<?php /* Smarty version Smarty-3.1.15, created on 2014-05-19 15:04:57
         compiled from "/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/users/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:370145378537a01485a6b37-87821923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '886f4b25517246a2bc6efaf377a50a4b65d15aa3' => 
    array (
      0 => '/usr/users2/mieic2010/ei10014/public_html/Newsy/final/templates/users/new.tpl',
      1 => 1400507471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370145378537a01485a6b37-87821923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537a014865a3e3_98808997',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a014865a3e3_98808997')) {function content_537a014865a3e3_98808997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/register.php" method="post">
    <div class="row">
        <div class="small-12 columns">
            <h1>Create New User</h1>

            <div class="row">
                <div class="small-12 columns">                    
                    <div class="row">
                        <div class="large-4 columns">
                            <label for="fname"><b>First name</b></label>
                            <input type="text" name="fname"/>
                        </div>
                        <div class="large-4 columns">
                            <label for="lname"><b>Last name</b></label>
                            <input type="text" name="lname"/>
                        </div>
                        <!-- needed for alignment -->
                        <div class="large-4 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="email"><b>Email</b></label>
                            <input type="email" name="email"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="password"><b>Password</b></label>
                            <input type="password" name="password"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="birthday" ><b>Gender</b></label>                        
                            <select name="gender">
                                <option value="male" selected> Male </option>
                                <option value="female" selected> Female </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label for="birthday"><b>Birthday</b></label>
                            <input class="datepicker-simple" type="date" name="birthday"/>
                        </div>                    
                        <div class="large-4 columns">
                            <label for="phone"><b>Phone</b></label>
                            <input type="text" name="phone"/>
                        </div>      
                        <!-- needed for alignment -->
                        <div class="large-4 columns"></div>
                    </div>
                    <div class="row">
                        <div id="reg-form" class="large-8 columns">
                            <label for="twitter"><b>Twitter account</b></label>
                            <input type="url" name="twitter"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="youtube"><b>Youtube account</b></label>
                            <input type="url" name="youtube"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="facebook"><b>Facebook account</b></label>
                            <input type="url" name="facebook"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="googleplus"><b>Google+ account</b></label>
                            <input type="url" name="googleplus"/>
                        </div>
                    </div>
                    <div class="row">
                        <div id="reg-form" class="large-8 columns">
                            <label for="linkedin"><b>LinkedIn account</b></label>
                            <input type="url" name="linkedin"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <input type="submit" value="Submit" class="right button tiny round"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
