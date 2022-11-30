<?php 
    require_once 'contact.php';
    // Se connecter à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact";
    new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insertion des données dans la base de données
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $conn->exec($sql);
    echo "<h1>Votre message a bien été envoyé !</h1>";

    // Fermer la connexion
    $conn = null;

    // Redirection vers la page de confirmation
    header('Location: contact.php');
?>