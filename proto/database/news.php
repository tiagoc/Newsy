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
    
    return $stmt->fetch();
}

function submitNews($title, $synopsis, $body) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO news
                            VALUES(DEFAULT, ?, ?, ?, DEFAULT, DEFAULT, 'submitted', DEFAULT ,$_SESSION[id]);");
    return $stmt->execute(array($title, $synopsis, $body));        
}

function saveDraft($title, $synopsis, $body) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO news
                            VALUES(DEFAULT, ?, ?, ?, DEFAULT, DEFAULT, 'draft', DEFAULT ,$_SESSION[id]);");
    return $stmt->execute(array($title, $synopsis, $body));    
}

function getAllJournalistNews($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT id, title, state FROM news
                            WHERE journalist_id = ? ORDER BY id DESC;");
    $stmt->execute(array($user_id));
    
    return $stmt->fetchAll();        
}

function getNewsLastDates($news_id) {    
    $publishdate = getLastPublishDate($news_id);
    $rejectdate = getLastRejectDate($news_id);
    $submissiondate = getLastSubmissionDate($news_id);
    $draftdate = getLastDraftDate($news_id);
    
    $dates = array("publishdate"=>$publishdate['published_at'],"rejectdate"=>$rejectdate['rejected_at'],"submissiondate"=>$submissiondate['submitted_at'],"draftdate"=>$draftdate['updated_at']);
    return $dates;
}

function getLastPublishDate($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(published_at,'HH24:MI:SS') as published_at FROM publishes WHERE news_id = ? ORDER BY published_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetch();
}

function getLastSubmissionDate($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(submitted_at,'HH24:MI:SS') as submitted_at FROM submissions WHERE news_id = ? ORDER BY submitted_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetch();
}

function getLastDraftDate($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(updated_at,'HH24:MI:SS') as updated_at FROM drafts WHERE news_id = ? ORDER BY updated_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetch();
}

function getLastRejectDate($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(rejected_at,'HH24:MI:SS') as rejected_at FROM rejects WHERE news_id = ? ORDER BY rejected_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetch();
}

function getLastRejectReason($news_id) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT reason FROM rejects WHERE news_id = ? ORDER BY rejected_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetch();
}