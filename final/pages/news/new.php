<?php

include_once '../../config/init.php';

if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'journalist' || $_SESSION['role'] == 'editor') {
    $smarty->display("news/new.tpl");
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. Maybe your session timed out?';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}
?>