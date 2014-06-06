<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$state = $_GET['state'] ? $_GET['state'] : 'published';
$id = $_GET['id'];
$query = $_GET['q'];
$start = $_GET['start'] ? $_GET['start'] : 1;
$n = $_GET['n'] ? $_GET['n'] : 10;

$news = array();

if ($id) {
    $news = getArticle($id);
    $news ? $news['categories'] = getCategories($news['id']) : null;
    $news ? $news['images'] = getImages($news['id']) : null;
    $news['dates'] = array("draft" => getLastDraftDate($news['id']), "publish" => getLastPublishDate($news['id']), "submission" => getLastSubmissionDate($news['id']), "reject" => getLastRejectDate($news['id']));
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
        //$article['images'] = getImages($article['id']);
        $article['dates'] = array("draft" => getLastDraftDate($article['id']), "publish" => getLastPublishDate($article['id']), "submission" => getLastSubmissionDate($article['id']), "reject" => getLastRejectDate($article['id']));
    }
}
echo json_encode($news);
