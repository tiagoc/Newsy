<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

if (!$_POST['id'] && $_POST['title'] && $_POST['synopsis'] && $_POST['body']) {

    $title = $_POST['title'];
    $synopsis = $_POST['synopsis'];
    $body = $_POST['body'];

    saveDraft($title, $synopsis, $body);
} else if ($_POST['id'] && $_POST['title'] && $_POST['synopsis'] && $_POST['body']) {
    saveExistingNews($_POST['id'], $title, $synopsis, $body);
}

header("Location: $BASE_URL" . "pages/users/mynews.php");
