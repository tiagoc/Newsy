<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');


$role = $_POST['role'];
$id = $_POST['id'];

try {
    editUser($role, $id);
} catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error updating fields.';
    $_SESSION['form_values'] = $_POST;
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

$_SESSION['success_messages'][] = 'User updated successfully';
header("Location: " . $_SERVER['HTTP_REFERER']);

?>
