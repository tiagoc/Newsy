<?php
include_once '../../config/init.php';
include_once '../../database/news.php';

$smarty->assign("news",getAllPublishedNews());
$smarty->display("news/list.tpl");
?>