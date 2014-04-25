<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

if (!$_POST['password']) {
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/new.php');
    exit;
}

$birthday = $_POST['birthday'];
$email = $_POST['email'];
$sex = $_POST['gender'];
$name = strip_tags($_POST['fname']) . strip_tags($_POST['rname']);
$password = $_POST['password'];
$phone = $_POST['phone'];
$facebook = $_POST['facebook'];
$googleplus = $_POST['googleplus'];
$linkedin = $_POST['linkedin'];
$youtube = $_POST['youtube'];

try {
    createUser($birthday, $email, $sex, $name, $password, $phone, $facebook, $googleplus, $linkedin, $youtube);
} catch (PDOException $e) {

    if (strpos($e->getMessage(), 'users_pkey') !== false) {
        $_SESSION['error_messages'][] = 'Duplicate username';
        $_SESSION['field_errors']['username'] = 'Username already exists';
    } else {
        $_SESSION['error_messages'][] = 'Error creating user';
    }

    $_SESSION['form_values'] = $_POST;
    //header("Location: $BASE_URL" . 'pages/users/new.php');
    exit;
}
$_SESSION['success_messages'][] = 'User registered successfully';
header("Location: $BASE_URL");
?>
