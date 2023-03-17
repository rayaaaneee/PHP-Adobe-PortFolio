<?php
session_start();

// On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';

include_once PATH_DATABASE . 'Connection.php';

// Si on appelle depuis la page de contact on envoie simplement le message
if (isset($_POST['message'])) {

    require_once PATH_CONTROLLERS_PARTS . "sendMessage.php";
    exit;
    // Sinon on affiche la page appelée
} else {

    $changedMode = false;
    if (isset($_POST['dark-mode'])) {
        $changedMode = true;
    }

    $page = null;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if (!is_file(PATH_CONTROLLERS . $page . '.php')) {
            $page = "404";
        }
    } else {
        $page = "index";
    }

    require_once PATH_CLASSES . "DarkMode.php";
    $theme = new DarkMode();

    include_once PATH_CONTROLLERS . $page . '.php';
}
