<?php

include_once '../../config/init.php';

$id = $_GET['id'] ? $_GET['id'] : $_SESSION['id'];

$user = json_decode(file_get_contents($BASE_URL . "api/users/fetch.php?id=$id"), true);

$smarty->assign("user", $user);

$smarty->display("users/profile.tpl");
?>