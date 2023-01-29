<?php 

session_start();
// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Variable qui définit si le formulaire a été envoyé
$wasSet = false;
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
   $wasSet = true;
}

// On récupère les données du formulaire et on les stocke dans la base de données
$SucceedSend = false;
if($wasSet){
    // Données formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // BD
    $db = getConnection();
    $stmt = getStatementContact($db, $name, $email, $message, date("Y-m-d H:i:s"));
    // Insertion
    try{
       $stmt->execute();
       // On affiche le message de confirmation
       $SucceedSend = true;
    } catch (PDOException $e) {
       // Si erreur, on affiche le message d'erreur dans la console
       echo $e->getMessage();
    }
}
?>