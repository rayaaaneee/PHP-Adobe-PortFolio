<?php

class MessageDAO
{
    public static PDO $db;

    public static function getAllMessages()
    {
        self::$db = Connection::getInstance()->getPDO();

        // Préparation de la requête
        $sql = "SELECT * FROM messages";

        // Préparation de la requête
        $stmt = self::$db->prepare($sql);

        // Exécution de la requête
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        $messages = $stmt->fetchAll(PDO::FETCH_CLASS, 'MessageDTO');

        return $messages;
    }

    public static function getMessageById($id)
    {
        self::$db = Connection::getInstance()->getPDO();

        // Préparation de la requête
        $sql = "SELECT * FROM messages WHERE id = :id";

        // Préparation de la requête
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':id', $id);

        // Exécution de la requête
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        $message = $stmt->fetchObject('MessageDTO');

        return $message;
    }
}
