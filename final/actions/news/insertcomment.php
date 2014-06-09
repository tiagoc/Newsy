<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$content = $_POST['content'];
$news_id = $_POST['news_id'];

$reply = insertComment($news_id, $content);
echo json_encode($reply);