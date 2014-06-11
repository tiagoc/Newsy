<?php

include_once '../../config/init.php';

$id = $_GET['id'] ? $_GET['id'] : $_SESSION['id'];

if ($_SESSION['id'] == $id) {
    $user = json_decode(file_get_contents($BASE_URL . "api/users/fetch.php?id=$id"), true);
    $name = explode(' ',$user['name']);
    
    $smarty->assign("user",$user);
    $smarty->assign("fname", $name[0]);
    $smarty->assign("lname",$name[1]);
    $smarty->display("users/edit.tpl");
} else {
    $_SESSION['error_messages'][] = 'You have no permission to access this page. What are you doing here? GET OUT';
    header("Location: $BASE_URL" . "pages/news/list.php");
    exit;
}

?>