<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

if ($_POST['id']) {
    publishNews($_POST['id']);
}

header("Location: $BASE_URL" . "pages/users/mynews.php");