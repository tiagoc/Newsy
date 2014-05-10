<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$newsid = $_GET['news_id'];
if (!$news_id) {
    echo json_encode(getComments($news_id));
} else {
    echo json_encode(array("error" => "no news id defined"));
}