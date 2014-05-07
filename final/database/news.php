<?php

function getAllPublishedNews() {
    global $conn;
    $stmt = $conn->prepare("SELECT id, title, synopsis, body, journalist_id
                            FROM news WHERE state = 'published';                           
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

function rejectNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO rejects VALUES(?,DEFAULT);");
    return $stmt->execute(array($article_id));
}

function publishNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO publishes VALUES(?,DEFAULT);");
    return $stmt->execute(array($article_id));
}

function insertCategories($categories) { // accepts an array of category names
    global $conn;

    foreach ($categories as $c) {
        $stmt = $conn->prepare("INSERT INTO categories VALUES(DEFAULT, ?, DEFAULT);");
        $stmt->execute(array($c));
    }
}

function associateCategoriesNews($categories, $news_id) {
    global $conn;

    foreach ($categories as $c) {
        $stmt = $conn->prepare("INSERT INTO categoriesnews values ((SELECT id FROM categories WHERE name = ?),?);");
        $stmt->execute(array($c, $news_id));
    }
}

function submitNews($title, $synopsis, $body, $categories) {
    global $conn;

    /* insert non-existent categories */
    insertCategories($categories);

    /* insert article per-say */
    $conn->query("BEGIN;");
    $stmt = $conn->prepare("INSERT INTO news VALUES(DEFAULT, ?, ?, ?, DEFAULT, DEFAULT, 'submitted', DEFAULT ,$_SESSION[id]);");
    $stmt->execute(array($title, $synopsis, $body));
    $stmt = $conn->prepare("SELECT id from news order by id desc limit 1");
    $stmt->execute();
    $id_array = $stmt->fetch();
    $conn->query("COMMIT;");

    /* associate article to categories */
    $id = $id_array['id'];
    associateCategoriesNews($categories, $news_id);
}

function submitExistingNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO submissions VALUES(?,DEFAULT);");
    return $stmt->execute(array($article_id));
}

function saveDraft($title, $synopsis, $body, $categories) {
    global $conn;

    insertCategories($categories);

    /* insert non-existent categories */
    insertCategories($categories);

    /* insert article per-say */
    $conn->query("BEGIN;");
    $stmt = $conn->prepare("INSERT INTO news VALUES(DEFAULT, ?, ?, ?, DEFAULT, DEFAULT, 'draft', DEFAULT ,$_SESSION[id]);");
    $stmt->execute(array($title, $synopsis, $body));
    $stmt = $conn->prepare("SELECT id from news order by id desc limit 1");
    $stmt->execute();
    $id_array = $stmt->fetch();
    $conn->query("COMMIT;");

    /* associate article to categories */
    $id = $id_array['id'];
    associateCategoriesNews($categories, $news_id);
}

function saveExistingNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO drafts VALUES(?,DEFAULT);");
    return $stmt->execute(array($article_id));
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

    $dates = array("publishdate" => $publishdate['published_at'], "rejectdate" => $rejectdate['rejected_at'], "submissiondate" => $submissiondate['submitted_at'], "draftdate" => $draftdate['updated_at']);
    return $dates;
}

function getLastPublishDate($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT to_char(published_at,'DD/MM/YYYY at HH24:MI') as published_at FROM publishes WHERE news_id = ? ORDER BY published_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));

    return $stmt->fetch();
}

function getLastSubmissionDate($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT to_char(submitted_at,'DD/MM/YYYY at HH24:MI') as submitted_at FROM submissions WHERE news_id = ? ORDER BY submitted_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));

    return $stmt->fetch();
}

function getLastDraftDate($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT to_char(updated_at,'DD/MM/YYYY at HH24:MI') as updated_at FROM drafts WHERE news_id = ? ORDER BY updated_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));

    return $stmt->fetch();
}

function getLastRejectDate($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT to_char(rejected_at,'DD/MM/YYYY at HH24:MI') as rejected_at FROM rejects WHERE news_id = ? ORDER BY rejected_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));

    return $stmt->fetch();
}

function getLastRejectReason($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT reason FROM rejects WHERE news_id = ? ORDER BY rejected_at DESC LIMIT 1;");
    $stmt->execute(array($news_id));

    return $stmt->fetch();
}

function deleteNews($news_id) {
    global $conn;

    $stmt = $conn->prepare("DELETE FROM news WHERE id = ?;");
    return $stmt->execute(array($news_id));
}

function getAllSubmittedNews() {
    global $conn;

    $stmt = $conn->prepare("SELECT news.id,title,name,journalist_id FROM news join users on users.id = news.journalist_id WHERE state = 'submitted';");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllDrafts() {
    global $conn;

    $stmt = $conn->prepare("SELECT news.id,title,name,journalist_id FROM news join users on users.id = news.journalist_id WHERE state = 'draft';");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllRejects() {
    global $conn;

    $stmt = $conn->prepare("SELECT news.id,title,reason,name,journalist_id FROM news join users on users.id = news.journalist_id WHERE state = 'rejected';");
    $stmt->execute();

    return $stmt->fetchAll();
}
