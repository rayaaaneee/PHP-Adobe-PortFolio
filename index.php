<?php
session_start();

// On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';

include_once PATH_DATABASE . 'Connection.php';

$page = null;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (!is_file(PATH_CONTROLLERS . $page . '.php')) {
        $page = "404";
    }
} else {
    /* $page = "index"; */
    $page = "home";
}

require_once PATH_MODELS . "DarkMode.php";
$theme = new DarkMode();

include_once PATH_CONTROLLERS . $page . '.php';
