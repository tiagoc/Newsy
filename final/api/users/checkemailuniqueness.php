<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

$email = $_GET['email'];

if ($email) {
    $status = (doesUserExists($email));    
} else {
    $status = "no email defined";
}

echo json_encode(array("status" => $status));