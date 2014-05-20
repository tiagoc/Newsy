<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$state = $_GET['published']? $_GET['published'] : 'published';
$id = $_GET['id'];
$query = $_GET['q'];
$start = $_GET['start']?$_GET['start']: 1;
$n = $_GET['n']?$_GET['n']: 10;


if ($id) {
    $news = getArticle($id);
} else {
    if ($query) {
        $news = getNewsByQuery($query, $start, $n, $state);
    } else {
        if ($start && $n) {
            $news = getNews($start, $n, $state);
        } else {
            $news = getNews($start, $n, $state);
        }
    }
}

echo json_encode($news);
