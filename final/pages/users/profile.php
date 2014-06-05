<?php

include_once '../../config/init.php';

$id = $_GET['id'] ? $_GET['id'] : $_SESSION['id'];

$user = json_decode(file_get_contents($BASE_URL . "api/users/fetch.php?id=$id"), true);


$smarty->assign("user", $user);
$email_gravatar=md5($user['email']);
$smarty->assign("gravatar_link", "http://www.gravatar.com/avatar/$email_gravatar?s=280;");

$smarty->assign("user_comments", $user_comments);


$smarty->assign("birthday_fixed", date('d-m-Y', strtotime($user['birthday'])));
$smarty->assign("registered_since_fixed", date('d-m-Y', strtotime($user['registered_since'])));

$smarty->display("users/profile.tpl");
?>