<?php

include_once '../../config/init.php';


if ($_SESSION['role'] == 'admin') {
    $user = json_decode(file_get_contents($BASE_URL . "api/users/fetch.php"), true);
    $smarty->assign("user", $user);
    $smarty->display("users/manage.tpl");
    
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. Maybe your session timed out?';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}


?>