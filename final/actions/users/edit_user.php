<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');


$role = $_POST['role'];
$id = $_POST['id'];
$blocked = $_POST['blocked'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$sex = $_POST['gender'];
$name = $_POST['fname'] . ' ' . $_POST['lname'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$facebook = $_POST['facebook'];
$googleplus = $_POST['googleplus'];
$linkedin = $_POST['linkedin'];
$youtube = $_POST['youtube'];

if (isset($_POST['blocked'])) {
    try {
        blockUser($blocked, $id);
    } catch (PDOException $e) {
        $_SESSION['error_messages'][] = 'Error updating fields.';
        $_SESSION['form_values'] = $_POST;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    try {
        editUser($role, $id);
    } catch (PDOException $e) {
        $_SESSION['error_messages'][] = 'Error updating fields.';
        $_SESSION['form_values'] = $_POST;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
} else {
    try {
        editUserProfile($id, $birthday, $email, $sex, $name, $password, $phone, $facebook, $googleplus, $linkedin, $youtube);
    } catch (PDOException $e) {
        $_SESSION['error_messages'][] = 'Error updating fields.';
        $_SESSION['form_values'] = $_POST;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}

$_SESSION['success_messages'][] = 'User updated successfully';
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
