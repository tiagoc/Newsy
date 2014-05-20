<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$newsid = $_GET['news_id'];
if ($newsid) {
    echo json_encode(getComments($newsid));
} else {
    echo json_encode(array("error" => "no news id defined"));
}