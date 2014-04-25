<?php

function createUser($birthday, $email, $sex, $name, $password, $phone, $facebook, $googleplus, $linkedin, $youtube) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users
                            VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, localtimestamp, ?, ?, ?, ?, 'user');");
    $stmt->execute(array($birthday, $email, $sex, $name, sha1($password), $phone, $facebook, $googleplus, $linkedin, $youtube));
}

function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM users 
                            WHERE email = ? AND password = ?");
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch() == true;
}

function getUserName($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT name from users where email = ?");
    $stmt->execute(array($email));

    return $stmt->fetch() == true;
}

function getUserID($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT id from users where email = ?");
    $stmt->execute(array($email));

    return $stmt->fetch() == true;
}

function getUserRole($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT role from users where email = ?");
    $stmt->execute(array($email));

    return $stmt->fetch() == true;
}

?>
