<?php

class ProjectDAO
{
    public static ?PDO $db;

    public static function getAllProjects()
    {
        $sql = "SELECT * FROM project ORDER BY id DESC";

        self::$db = Connection::getInstance()->getPDO();

        $query = self::$db->prepare($sql);
        $query->execute();
        $projects = $query->fetchAll();
        return $projects;
    }

    public static function getProjectById($id)
    {
        $sql = "SELECT * FROM project WHERE id = :id";

        self::$db = Connection::getInstance()->getPDO();

        $query = self::$db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $project = $query->fetch();
        return $project;
    }
}
