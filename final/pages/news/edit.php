<?php

include_once '../../config/init.php';


if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'journalist' || $_SESSION['role'] == 'editor') {

    $id = $_GET['id'];

    $article = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?id=$id"), true);

    $smarty->assign("article", $article);
    $smarty->display("news/edit.tpl");
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. Maybe your session timed out?';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}

?>