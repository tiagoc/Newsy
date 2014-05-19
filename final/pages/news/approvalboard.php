<?php
include_once '../../config/init.php';
include_once $BASE_DIR . "database/news.php";

$submittednews = getAllSubmittedNews();

$dates = array();
$reasons = array();
foreach ($submittednews as &$article) { // & needed to directly reference the array $submittednews
    $dates[$article['id']] = getNewsLastDates($article['id']);
    $article['state'] = ucwords($article['state']);
}

$smarty->assign("submittednews", $submittednews);
$smarty->assign("dates", $dates);


$smarty->display("news/approvalboard.tpl");
?>