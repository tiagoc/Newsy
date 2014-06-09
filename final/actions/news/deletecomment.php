<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$comment_id = $_POST['comment_id'];

deleteComment($comment_id);