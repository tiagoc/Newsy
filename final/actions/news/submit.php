<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

if (!$_POST['id'] && $_POST['title'] && $_POST['synopsis'] && $_POST['body'] && $_POST['categories']) {
    $title = $_POST['title'];
    $synopsis = $_POST['synopsis'];
    $body = $_POST['body'];        
    $categories = array_map('trim',explode(",",$_POST['categories']));        

    submitNews($title, $synopsis, $body, $categories);
    $bool = true;
} else if ($_POST['id']) {    
    var_dump(submitExistingNews($_POST['id']));
    $bool = true;
}
header("Location: $BASE_URL" . "pages/users/mynews.php");