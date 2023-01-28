<?php
// Version pour AWS (site en ligne)
function getConnection(){
    try {
        $host = "localhost";
        $dbname = "portfolio";
        $user = "root";
        $pass = "Opqdkjqo64$";
        $port = "3306";
        $charset = "utf8mb4";
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO($dsn, $user, $pass, $options);
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
        $charset = "utf8mb4";
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO($dsn, $user, $pass, $options);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
        return null;
    }      
} */                                                                       
