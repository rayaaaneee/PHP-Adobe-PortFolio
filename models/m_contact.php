<?php

function getStatementContact ($db, $name, $email, $message, $date) {
    $sql = "INSERT INTO contacts (name, email, message, date) VALUES (:name, :email, :message, :date)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':date', $date);
    return $stmt;
}