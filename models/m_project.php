<?php
    function getConnection(){
        try {
            $host = "localhost";
            $dbname = "portfolio";
            $user = "root";
            //$pass = "root";
            $pass = "Opqdkjqo64$";
            //$port = "8889";
            //$db = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            return null;
        }
    }

    function getProjects($db) {
        $sql = "SELECT * FROM projects";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $projects = $stmt->fetchAll();
        return $projects;
    }
    
    function DownloadOrLink($bool){
        if($bool){
            return 'download';
        } else {
            return 'target="_blank"';
        }
    }
    
    function getImageName($bool){
        if($bool){
            echo "download.png";
        } else {
            echo "link.png";
        }
        return;
    }