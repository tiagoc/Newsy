<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$title = $_POST['title'];
$synopsis = $_POST['synopsis'];
$body = $_POST['body'];

submitNews($title, $synopsis, $body);