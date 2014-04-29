<?php
include_once '../../config/init.php';
include_once $BASE_DIR."database/news.php";

$news = getAllJournalistNews($_SESSION['id']);
$smarty->assign("news",$news);

$smarty->display("users/mynews.tpl");
?>