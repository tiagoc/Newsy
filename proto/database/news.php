<?php

function getAllNews() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM news;                           
    ");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getNews($start_id, $limit) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM news
                            WHERE id > ? LIMIT ?;
    ");
    $stmt->execute(array($start_id, $limit));

    return $stmt->fetchAll();
}

function getArticle($article_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM news
                            WHERE id = ?;
    ");
    $stmt->execute(array($article_id));
}

function submitNews($title, $synopsis, $body) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO news
                            VALUES(DEFAULT, ?, ?, ?, 0, 0, 'submitted' ,$_SESSION[id]);");
    $stmt->execute(array($title, $synopsis, $body));    
}

function saveDraft($title, $synopsis, $body) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO news VALUES(DEFAULT, ?, ?, ?, 0, 0, 'draft' ,$_SESSION[id]);");
    $stmt->execute(array($title, $synopsis, $body));
}
