<?php
// Version pour AWS (site en ligne)
function getConnection(){
    try {
        $host = "localhost";
        $dbname = "portfolio";
        $user = "root";
        $pass = "Opqdkjqo64$";
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
        return null;
    }                
}                                                                                                                                                                     

// Version pour MAMP (site en local)
/* function getConnection(){
    try {
        $host = "localhost";
        $dbname = "portfolio";
        $user = "root";
        $pass = "root";
        $port = "8889";
        $db = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
        return null;
    }      
} */                                                                    
