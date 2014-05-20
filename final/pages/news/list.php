<?php

include_once '../../config/init.php';
include_once '../../database/news.php';

$start = $_GET['start']? $_GET['start'] : 1;
$n = $_GET['n']? $_GET['n'] : 10;

$news = json_decode(file_get_contents($BASE_URL."api/news/fetch.php?start=$start&n=$n"),true);

$lastnewsid = $news[count($news)-1]['id'];

$smarty->assign("start", $start);
$smarty->assign("n", $n);
$smarty->assign("news", $news);
$smarty->assign("lastnewsid",$lastnewsid);

$smarty->display("news/list.tpl");
?>