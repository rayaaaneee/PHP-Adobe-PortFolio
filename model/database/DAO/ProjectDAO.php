<?php

class ProjectDAO
{
    public static ?PDO $db;

    public static function getAllProjects()
    {
        $sql = "SELECT * FROM projects ORDER BY id DESC";

        self::$db = Connection::getInstance()->getPDO();

        $query = self::$db->prepare($sql);
        $query->execute();
        $projects = $query->fetchAll();
        return $projects;
    }
}
