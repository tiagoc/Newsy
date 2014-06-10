<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$news_id = $_GET['news_id'];
$user_id = $_GET['user_id'];

echo json_encode(array("status" => isFavourite($news_id,$user_id)));