<?php

// On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// On démarre la session
session_start();

require_once 'config.php';
require_once PATH_DATABASE . 'Connection.php';
require_once PATH_MODELS . 'Game.php';

require_once 'config.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (is_file(PATH_CONTROLLERS . $page . '.php')) {
        $page = $page;
    } else {
        $page = "reception";
    }
} else {
    $page = "reception";
}

require_once PATH_CONTROLLERS . $page . '.php';
