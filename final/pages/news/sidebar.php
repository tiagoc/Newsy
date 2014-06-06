<?php

include_once '../../config/init.php';
include_once '../../database/news.php';

$id = $_GET['id'];
$string = $_GET['s'];

$search = json_decode(file_get_contents($BASE_URL."api/news/search.php?id=$id&s=$s"),true);

$smarty->assign("search", $search);

$smarty->display("news/sidebar.tpl");
?>