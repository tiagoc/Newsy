<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];


$isblocked = getUserBanStatus($email);

if ($isblocked == 0) {

    if (isLoginCorrect($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = getUserName($email);
        $_SESSION['id'] = getUserID($email);
        $_SESSION['role'] = getUserRole($email);
        $_SESSION['success_messages'][] = 'Login successful';
    } else {
        $_SESSION['error_messages'][] = 'Login failed';
    }
} else {
    $_SESSION['error_messages'][] = 'You have been banned from this website!';
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
