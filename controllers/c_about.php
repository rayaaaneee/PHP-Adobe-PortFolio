<?php

session_start();
// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "../controllers/DarkMode.php";

$theme = new DarkMode();
