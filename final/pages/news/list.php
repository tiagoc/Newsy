<?php
include_once '../../config/init.php';
include_once '../../database/news.php';

$smarty->assign("news",getAllNews());
$smarty->display("news/list.tpl");
?>