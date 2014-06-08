<?php
include_once '../../config/init.php';
include_once $BASE_DIR . "database/news.php";

$start = $_GET['start'] ? $_GET['start'] : 1;
$n = $_GET['n'] ? $_GET['n'] : 10;

$reasons = array();

$news = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?state=submitted&start=$start&n=$n"), true);

$smarty->assign("news", $news);

$smarty->display("news/approvalboard.tpl");
?>