<?php

function getNews($start_id, $limit, $state, $user_id = false) {
    global $conn;

    if (!$user_id) {
        $stmt = $conn->prepare("SELECT news.id, title, synopsis, body, journalist_id, name as journalist, ncomments
                            FROM news join users on (news.journalist_id = users.id)
                            WHERE state = ? AND news.id >= ? LIMIT ?;
    ");
        $stmt->execute(array($state, $start_id, $limit));
    } else {
        $stmt = $conn->prepare("SELECT news.id, title, synopsis, body, journalist_id, name as journalist, ncomments
                       FROM news join users on (news.journalist_id = users.id)
                       WHERE state = :state AND news.id >= :start_id AND news.journalist_id = :user_id LIMIT :n;
    ");
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':start_id', $start_id, PDO::PARAM_INT);
        $stmt->bindValue(':n', $n, PDO::PARAM_INT);
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();
    }

    return $stmt->fetchAll();
}

function getArticle($article_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT news.id, title, synopsis, body, journalist_id, name as journalist, ncomments
                            FROM news join users on (news.journalist_id = users.id) WHERE news.id = ?;
    ");
    $stmt->execute(array($article_id));

    return $stmt->fetch();
}

function rejectNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO rejects VALUES(?,'reason',DEFAULT,$_SESSION[id]);");
    return $stmt->execute(array($article_id));
}

function publishNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO publishes VALUES(?,DEFAULT,$_SESSION[id]);");
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

function insertImages($images) {
    global $conn;

    foreach ($images as $c) {
        $stmt = $conn->prepare("INSERT INTO images VALUES(DEFAULT, ?);");
        $stmt->execute(array($c));
    }
}

function associateImageNews($images, $news_id) {
    global $conn;

    foreach ($images as $c) {
        $stmt = $conn->prepare("INSERT INTO imagesnews values ((SELECT id FROM images WHERE name = ?),?);");
        $stmt->execute(array($c, $news_id));
    }
}

function submitNews($title, $synopsis, $body, $categories) {
    global $conn;

    /* insert non-existent categories */
    insertCategories($categories);

    /* insert article per-say */
    $conn->query("BEGIN;");
    $stmt = $conn->prepare("INSERT INTO news VALUES(DEFAULT, ?, ?, ?, DEFAULT, DEFAULT, 'submitted', DEFAULT , $_SESSION[id]);");
    $stmt->execute(array($title, $synopsis, $body));
    $stmt = $conn->prepare("SELECT id from news order by id desc limit 1");
    $stmt->execute();
    $id_array = $stmt->fetch();
    $conn->query("COMMIT;");

    /* associate article to categories */
    $id = $id_array['id'];
    associateCategoriesNews($categories, $id);
}

function submitExistingNews($article_id) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO submissions VALUES(?, DEFAULT);");
    return $stmt->execute(array($article_id));
}

function saveDraft($title, $synopsis, $body, $categories, $images) {
    global $conn;

    /* insert non-existent categories */
    insertCategories($categories);
    //insertImages($images);

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
    associateCategoriesNews($categories, $id);
    //associateImageNews($images, $id);
}

function saveExistingNews($article_id, $title, $synopsis, $body, $categories) {
    global $conn;

    /* insert non-existent categories */
    insertCategories($categories);

    $conn->query("BEGIN;");
    $stmt = $conn->prepare("UPDATE news SET title = ?, synopsis = ?, body = ? WHERE id = ?");
    $stmt->execute(array($title, $synopsis, $body, $article_id));

    $stmt = $conn->prepare("INSERT INTO drafts VALUES(?,DEFAULT);");
    $stmt->execute(array($article_id));
    $conn->query("COMMIT;");

    associateCategoriesNews($categories, $article_id);
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

function getNewsByCategory($category, $start, $n, $state) {
    global $conn;

    $stmt = $conn->prepare("SELECT news.id, title, synopsis, body, journalist_id
                            FROM news join categorynews on news.id = categorynews.news_id join categories on categorynews.category_id = categories.id WHERE state = ? 
                            AND name = ? AND news.id >= ? LIMIT ?;
    ");
    $stmt->execute(array($state, $category, $start, $n));

    return $stmt->fetchAll();
}

function getNewsByQuery($query, $start, $n, $state) {
    global $conn;

    $stmt = $conn->prepare("SELECT id, title, synopsis, body, journalist_id
                            FROM news WHERE state = ? AND (title LIKE ? OR synopsis LIKE ?)
                            AND news.id >= ? LIMIT ?;
    ");
    $stmt->execute(array($state, '%' . $query . '%', '%' . $query . '%', $start, $n));

    return $stmt->fetchAll();
}

function getComments($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT comments.id, content, to_char(published_at,'DD/MM/YYYY at HH24:MI') as published_at, name, user_id FROM comments join users on (comments.user_id = users.id) WHERE news_id = ?;");
    $stmt->execute(array($news_id));

    return $stmt->fetchAll();
}

function getCategories($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT categories.id, name FROM news join categoriesnews on (news.id = news_id) join categories on (categories.id = category_id) WHERE news_id = ?;");
    $stmt->execute(array($news_id));

    return $stmt->fetchAll();
}

function getImages($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT images.id, name FROM news join imagesnews on (news.id = news_id) join images on (images.id = image_id) WHERE news_id = ?;");
    $stmt->execute(array($news_id));

    return $stmt->fetchAll();
}

function getTitleById($news_id) {
    global $conn;

    $stmt = $conn->prepare("SELECT title FROM news WHERE id = ?;");
    $stmt->execute(array($news_id));

    return $stmt->fetch();
}

function search($string) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM news WHERE title @@ plainto_tsquery(?);");
    $stmt->execute(array($string));

    return $stmt->fetchAll();
}

function insertComment($news_id, $content) {
    global $conn;

    $conn->query("BEGIN");
    $stmt = $conn->prepare("INSERT INTO comments values(DEFAULT, ?, DEFAULT, $_SESSION[id], ?)");
    $stmt->execute(array($content, $news_id));     
    $stmt = $conn->prepare("SELECT comments.id, name, user_id, content, to_char(published_at,'DD/MM/YYYY at HH24:MI') as published_at, news_id FROM comments join users on (users.id = comments.user_id) ORDER BY comments.id desc LIMIT 1");
    $stmt->execute();
    $conn->query("COMMIT;");
    
    return $stmt->fetch();
}

function deleteComment($comment_id) {
    global $conn;
         
    $stmt = $conn->prepare("DELETE FROM comments WHERE id = ?");
    return $stmt->execute(array($comment_id));
}

function markFavourite($news_id) {
    global $conn;
    
    $stmt = $conn->prepare("INSERT into favourites values(?, $_SESSION[id], DEFAULT)");   
    return $stmt->execute(array($news_id));
}

function unmarkFavourite($news_id) {
    global $conn;
    
    $stmt = $conn->prepare("DELETE from favourites where news_id = ? and user_id = $_SESSION[id]");
    return $stmt->execute(array($news_id));
}