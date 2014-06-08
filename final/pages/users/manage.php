<?php
include_once '../../config/init.php';

$user = json_decode(file_get_contents($BASE_URL . "api/users/fetch.php"), true);

$smarty->assign("user", $user);

$smarty->display("users/manage.tpl");
?>