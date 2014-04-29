<?php

include_once '../../config/init.php';
include_once $BASE_DIR . "database/news.php";

$news = getAllJournalistNews($_SESSION['id']);

$dates = array();
$reasons = array();
foreach ($news as $article) {
    $dates[$article['id']] = getNewsLastDates($article['id']);
    if ($article['state'] === 'rejected') {
        $dates[$article['state']] = getLastRejectReason($article['id']);
    }
    
    $article['state'] = ucwords($article['state']);
}
$smarty->assign("news", $news);
$smarty->assign("dates", $dates);

$smarty->display("users/mynews.tpl");
?>