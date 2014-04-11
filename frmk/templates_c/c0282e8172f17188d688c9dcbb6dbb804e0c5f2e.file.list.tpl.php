<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 03:06:17
         compiled from "/usr/users1/dei/arestivo/public_html/example.twitter.new/templates/tweets/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16591770395298786faa4dd3-33300059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0282e8172f17188d688c9dcbb6dbb804e0c5f2e' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.twitter.new/templates/tweets/list.tpl',
      1 => 1386295027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16591770395298786faa4dd3-33300059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5298786fb78389_44361155',
  'variables' => 
  array (
    'tweets' => 0,
    'tweet' => 0,
    'BASE_URL' => 0,
    'last_tweet_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298786fb78389_44361155')) {function content_5298786fb78389_44361155($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="tweets">
  <h2>Tweets</h2>

  <div id="new_tweets"></div>

  <?php  $_smarty_tpl->tpl_vars['tweet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tweet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tweets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->key => $_smarty_tpl->tpl_vars['tweet']->value) {
$_smarty_tpl->tpl_vars['tweet']->_loop = true;
?>

  <article class="tweet-data">
    <span class="realname"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['realname'];?>
</span>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/tweets/list_user.php?username=<?php echo $_smarty_tpl->tpl_vars['tweet']->value['username'];?>
" class="username">@<?php echo $_smarty_tpl->tpl_vars['tweet']->value['username'];?>
</a>

    <span class="time"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['time'];?>
</span>
    <div class="tweet-text"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['text'];?>
</div>
  </article>

  <?php } ?>

</section>

<script>last_tweet_id = <?php echo $_smarty_tpl->tpl_vars['last_tweet_id']->value;?>
</script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/tweets.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
