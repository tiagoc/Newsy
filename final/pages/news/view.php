<?php

include_once '../../config/init.php';

$id = $_GET['id'];
$article = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?id=$id"), true);
$comments = json_decode(file_get_contents($BASE_URL . "api/news/fetchcomments.php?news_id=$id"), true);

if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'editor') {
    $smarty->assign("edit", 'Edit');
}



$smarty->assign("article", $article);
$smarty->assign("comments", $comments);
$smarty->display("news/article.tpl");

?>