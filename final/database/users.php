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
    $stmt = $conn->prepare("SELECT name from users where email = ?;");
    $stmt->execute(array($email));

    $return = $stmt->fetch();
    return $return['name'];
}

function getUserID($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT id from users where email = ?;");
    $stmt->execute(array($email));

    $return = $stmt->fetch();
    return $return['id'];
}

function getUser($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * from users where id = ?;");
    $stmt->execute(array($id));

    return $stmt->fetch();
}


function getUserRole($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT role from users where email = ?;");
    $stmt->execute(array($email));

    $return = $stmt->fetch();
    return $return['role'];
}

function doesUserExists($email) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT id from users where email = ?;");
    $stmt->execute(array($email));
    
    return $stmt->fetch() == true;    
}

function getUsers($start_id, $limit) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT email, name, role FROM users WHERE id >= ? LIMIT ?;");
    $stmt->execute(array($start_id, $limit));
    
    return $stmt->fetchAll();
}

function getFavourites($user_id) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT news_id FROM favourites WHERE user_id = ?;");
    $stmt->execute(array($user_id));
    
    return $stmt->fetchAll();
}