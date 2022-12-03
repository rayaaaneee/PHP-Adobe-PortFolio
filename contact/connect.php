<?php
    function getConnection(){
        try {
            $host = "localhost";
            $dbname = "portfolio";
            $user = "root";
            $pass = "root";
            $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            return null;
        }
    }

    function getProjects($db){
        $query = $db->prepare('SELECT * FROM projects');
        $query->execute();
        $projects = $query->fetchAll(PDO::FETCH_ASSOC);
        return $projects;
    }
?>