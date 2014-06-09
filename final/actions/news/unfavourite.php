<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$news_id = $_POST['news_id'];

unmarkFavourite($news_id);