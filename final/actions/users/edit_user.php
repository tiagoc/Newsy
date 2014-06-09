<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');


$email = $_POST['email'];
$name = $_POST['name'];
$role = $_POST['role'];
$role = $_POST['id'];

try {
    editUser($email, $name, $role, $id);
} catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error updating fields.';
}

$_SESSION['form_values'] = $_POST;
header("Location: $BASE_URL" . $_SERVER['HTTP_REFERER']);
exit;

$_SESSION['success_messages'][] = 'User updated successfully';
header("Location: $BASE_URL");
?>
