<?php

include_once '../../config/init.php';
include_once $BASE_DIR . "database/news.php";


if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'editor') {

    $start = $_GET['start'] ? $_GET['start'] : 1;
    $n = $_GET['n'] ? $_GET['n'] : 10;

    $reasons = array();

    $news = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?state=submitted&start=$start&n=$n"), true);

    $smarty->assign("news", $news);
   
    $smarty->display("news/approvalboard.tpl");
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. Maybe your session timed out?';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}
?>