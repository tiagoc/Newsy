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
                            WHERE journalist_id = ?;");
    $stmt->execute(array($user_id));
    
    return $stmt->fetchAll();        
}

function getNewsDates($news_id) {
    global $conn;
    $publishdates = getPublishDates($news_id);
    $rejectdates = getRejectDates($news_id);
    $submissiondates = getSubmissionDates($news_id);
    $draftdates = getDraftDates($news_id);
    
    $dates = array("publishdates"=>$publishdates,"rejectdates"=>$rejectdates,"submissiondates"=>$submissiondates,"draftdates"=>$draftdates);
    return $dates;
}

function getPublishDates($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(published_at,'HH24:MI:SS') FROM publishes WHERE news_id = ?;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetchAll();
}

function getSubmissionDates($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(submitted_at,'HH24:MI:SS') FROM submissions WHERE news_id = ?;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetchAll();
}

function getDraftDates($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(saved_at,'HH24:MI:SS') FROM drafts WHERE news_id = ?;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetchAll();
}

function getRejectDates($news_id) {
    global $conn;
 
    $stmt = $conn->prepare("SELECT to_char(rejected_at,'HH24:MI:SS') FROM drafts WHERE news_id = ?;");
    $stmt->execute(array($news_id));
    
    return $stmt->fetchAll();
}