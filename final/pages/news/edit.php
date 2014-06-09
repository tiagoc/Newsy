<?php

include_once '../../config/init.php';

$id = $_GET['id'];

$article = json_decode(file_get_contents($BASE_URL . "api/news/fetch.php?id=$id"), true);

$smarty->assign("article", $article);
$smarty->display("news/edit.tpl");
?>