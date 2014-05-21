<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$state = $_GET['state'] ? $_GET['state'] : 'published';
$id    = $_GET['id'];
$query = $_GET['q'];
$start = $_GET['start'] ? $_GET['start'] : 1;
$n     = $_GET['n'] ? $_GET['n'] : 10;

$news = array();

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

    foreach ($news as &$article) {
        $article['categories'] = getCategories($article['id']);
    }
}

$news? $news['categories'] = getCategories($news['id']) : null;
echo json_encode($news);
