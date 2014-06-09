<?php

include_once '../../config/init.php';

if ($_SESSION['role'] == 'admin') {
    $smarty->display("users/edit.tpl");
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. What are you doing here? GET OUT';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}

?>