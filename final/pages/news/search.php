<?php

include_once '../../config/init.php';
include_once '../../database/news.php';

$id = $_GET['id'];
$string = $_GET['s'];

$news = json_decode(file_get_contents($BASE_URL."api/news/search.php?id=$id&s=$string"),true);

$smarty->assign("news", $news);

$smarty->display("news/list.tpl");

?>