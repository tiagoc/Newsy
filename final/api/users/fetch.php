<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

$id = $_GET['id'];
$start = $_GET['start']?$_GET['start'] : 1; // ternary operator; in doubt, check http://stackoverflow.com/questions/4329697/conditionally-assigning-php-values
$n = $_GET['n']?$_GET['n'] : 15;

if ($id) {
    $users = getUser($id);
} else {
    $users = getUsers($start, $n);
}

echo json_encode($users);
