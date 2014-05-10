<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$id = $_GET['id'];
$query = $_GET['q'];
$start = $_GET['start'];
$n = $_GET['n'];

if ($id) {
    $news = getArticle($id);
} else {
    if ($query) {
        $news = getPublishedNewsByQuery($query);
    } else {
        if ($start && $n) {
            $news = getNews($start, $limit, "published");
        } else {
            $news = getAllPublishedNews();
        }
    }
}

echo json_encode($news);
