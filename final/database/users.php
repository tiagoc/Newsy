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
    $stmt = $conn->prepare("SELECT id, to_char(birthday,'DD/MM/YYYY') as birthday, email, gender, name, password, phone, to_char(registered_since,'DD/MM/YYYY at HH24:MI') as registered_since, facebook, googleplus, linkedin, youtube, role, blocked from users where id = ?;");
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

function getUserBanStatus($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT blocked from users where email = ?;");
    $stmt->execute(array($email));
    $return = $stmt->fetch();
    return $return['blocked'];
}

function doesUserExists($email) {
    global $conn;

    $stmt = $conn->prepare("SELECT id from users where email = ?;");
    $stmt->execute(array($email));

    return $stmt->fetch() == true;
}

function getUsers($start_id, $limit) {
    global $conn;

    $stmt = $conn->prepare("SELECT id, email, name, role, blocked FROM users WHERE id >= ? LIMIT ?;");
    $stmt->execute(array($start_id, $limit));

    return $stmt->fetchAll();
}

function getFavourites($user_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM favourites LEFT JOIN news on news.id=favourites.news_id WHERE user_id = ?;");
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function getUserComments($user_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM comments LEFT JOIN news on news.id=comments.news_id WHERE user_id = ?;");
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function getAllJournalistNews($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT id, title, state FROM news
                            WHERE journalist_id = ? ORDER BY id DESC;");
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function editUser($role, $id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET role=? WHERE id=?;");
    $stmt->execute(array($role, $id));
}

function blockUser($block, $id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET blocked=? WHERE id=?;");
    $stmt->execute(array($block, $id));
}

function editUserProfile($id, $birthday, $email, $sex, $name, $password, $phone, $facebook, $googleplus, $linkedin, $youtube) {
    global $conn;

    if (!$password) {
        $stmt = $conn->prepare("UPDATE users SET birthday = to_date(:birthday, 'DD/MM/YYYY'), gender = :gender, name = :name, phone = :phone, facebook = :facebook, googleplus = :googleplus, linkedin = :linkedin, youtube = :youtube WHERE id = :id");
        $stmt->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':facebook', $facebook, PDO::PARAM_STR);
        $stmt->bindParam(':googleplus', $googleplus, PDO::PARAM_STR);
        $stmt->bindParam(':linkedin', $linkedin, PDO::PARAM_STR);
        $stmt->bindParam(':youtube', $youtube, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        $stmt = $conn->prepare("UPDATE users SET birthday = to_date(:birthday, 'DD/MM/YYYY'), gender = :gender, name = :name, password = :password, phone = :phone, facebook = :facebook, googleplus = :googleplus, linkedin = :linkedin, youtube = :youtube WHERE id = :id");
        $stmt->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
        $stmt->bindParam(':facebook', $facebook, PDO::PARAM_STR);
        $stmt->bindParam(':googleplus', $googleplus, PDO::PARAM_STR);
        $stmt->bindParam(':linkedin', $linkedin, PDO::PARAM_STR);
        $stmt->bindParam(':youtube', $youtube, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
