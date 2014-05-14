<?php

include_once '../../config/init.php';

$id = $_GET['id'];
$article = json_decode(file_get_contents($BASE_URL . "api/news/fetchpublished.php?id=$id"), true);
$comments = json_decode(file_get_contents($BASE_URL . "api/news/fetchcomments.php?news_id=$id"), true);

$smarty->assign("article", $article);
$smarty->display("news/article.tpl");
?>