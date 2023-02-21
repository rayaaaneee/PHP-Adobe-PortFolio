<?php

require_once PATH_PRESENTERS . 'contactPresenter.php';

require_once PATH_MODELS . "Message.php";
require_once PATH_DAO . "MessageDAO.php";
require_once PATH_DTO . "MessageDTO.php";

// Variable qui définit si le formulaire a été envoyé
$wasSet = false;
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
   $wasSet = true;
}

// On récupère les données du formulaire et on les stocke dans la base de données
$SucceedSend = false;
if ($wasSet) {

   // Données formulaire
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);
   $date = date("Y-m-d");

   // Mettre l'heure de paris
   $time = new DateTime('now');
   $time->setTimezone(new DateTimeZone('Europe/Paris'));
   $time = $time->format('H:i:s');


   // BD
   $message = new Message($name, $email, $message, $date, $time);
   if (MessageDTO::insertMessage($message)) {
      $SucceedSend = true;
   }
}

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'contact.php';

require_once PATH_VIEWS . 'footer.php';
