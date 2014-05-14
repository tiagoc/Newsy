<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$id = $_GET['id'];
$query = $_GET['q'];
$start = $_GET['start']?: 1;
$n = $_GET['n']?: 10;

if ($id) {
    $news = getArticle($id);
} else {
    if ($query) {
        $news = getPublishedNewsByQuery($query);
    } else {
        if ($start && $n) {
            $news = getNews($start, $n, "published");
        } else {
            $news = getNews($start, $n, "published");
        }
    }
}

echo json_encode($news);
