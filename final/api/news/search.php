<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/news.php');

$id = $_GET['id'];
$string = $_GET['s'];

$search = array();

if ($id) {
    $search = getArticle($id);
} else {
    if ($string) {
        $search = search($string);
    }
}

echo json_encode($search);
