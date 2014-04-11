<?php

function getAllNews() {
    $stmt = $conn->prepare("SELECT *
                            FROM news;                           
    ");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getNews($start_id, $limit) {
    $stmt = $conn->prepare("SELECT *
                            FROM news
                            WHERE id > ? LIMIT ?;
    ");
    $stmt->execute(array($start_id, $limit));

    return $stmt->fetchAll();
}

function getArticle($article_id) {
    $stmt = $conn->prepare("SELECT *
                            FROM news
                            WHERE id = ?;
    ");
    $stmt->execute(array($article_id));
}
