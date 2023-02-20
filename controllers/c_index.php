<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "models/m_connect.php";
require_once "models/m_project.php";
require_once "controllers/DarkMode.php";

require_once "presenters/indexPresenter.php";

$theme = new DarkMode();

// Fonction pour récupérer la taille d'un fichier en Mo (arrondi à 2 chiffres après la virgule)
function getFileSizeMo($file)
{
    $size = filesize($file);
    $size = $size / 1000000;
    return round($size, 2);
}

$db = getConnection();
$projects = getProjects($db);
