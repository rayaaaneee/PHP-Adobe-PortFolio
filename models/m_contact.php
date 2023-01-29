<?php

function getStatementContact ($db, $name, $email, $message, $date, $time) {
    $sql = "INSERT INTO contacts (name, email, message, date, time) VALUES (:name, :email, :message, :date, :time)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':time', $time);
    return $stmt;
}