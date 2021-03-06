<?php

include_once '../../config/init.php';
include_once $BASE_DIR . "database/news.php";


if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'journalist' || $_SESSION['role'] == 'editor') {

    $state = $_GET['state'] ? $_GET['state'] : 'published';
    $start = $_GET['start'] ? $_GET['start'] : 1;
    $n = $_GET['n'] ? $_GET['n'] : 10;

    $reasons = array();
    
    $news = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?state=$state&start=$start&n=$n&user_id=$_SESSION[id]"), true);

    foreach ($news as &$article) {
        if ($state == "rejected") {
            $reason = getLastRejectReason($article['id']);
            $reasons[$article['id']] = $reason['reason'];
        }
    }

    $smarty->assign("news", $news);
    $smarty->assign("reasons", $reasons);
    $smarty->assign("state", ucfirst($state));

    $smarty->display("users/mynews.tpl");
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. Maybe your session timed out?';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}
?>