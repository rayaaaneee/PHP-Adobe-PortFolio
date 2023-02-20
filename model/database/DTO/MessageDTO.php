<?php

class MessageDTO
{
    public static PDO $db;

    public static function getStatementContact($name, $email, $message, $date, $time)
    {
        self::$db = Connection::getInstance()->getPDO();
        // Encodage UTF-8
        self::$db->exec("SET CHARACTER SET utf8");
        // Préparation de la requête
        $sql = "INSERT INTO contacts (name, email, message, date, time) VALUES (:name, :email, :message, :date, :time)";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':time', $time);
        return $stmt;
    }
}
