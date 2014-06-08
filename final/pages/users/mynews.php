<?php

include_once '../../config/init.php';
include_once $BASE_DIR . "database/news.php";

$state = $_GET['state'] ? $_GET['state'] : 'published';
$start = $_GET['start'] ? $_GET['start'] : 1;
$n = $_GET['n'] ? $_GET['n'] : 10;

$reasons = array();

$news = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?state=$state&start=$start&n=$n&user_id=$_SESSION[id]"), true);

foreach ($news as &$article) {
    if ($state == "rejected") {
        $reasons[$article['id']] = getLastRejectReason($article['id']);
    }
}

$smarty->assign("news", $news);
$smarty->assign("state", ucfirst($state));

$smarty->display("users/mynews.tpl");
?>