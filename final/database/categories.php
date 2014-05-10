<?php

function getAllCategories() {
    global $conn;
    
    $stmt = $conn->prepare("SELECT id, name FROM categories");
    $stmt->execute();
    
    return $stmt->fetchAll();
}