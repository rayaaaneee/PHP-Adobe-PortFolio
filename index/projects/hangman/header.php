<?php

// On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// On démarre la session
session_start();

require_once 'config.php';
require_once PATH_DATABASE . 'Connection.php';
require_once PATH_CLASSES . 'Game.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>style.css">
    <!-- JS Only -->
    <script src="<?= PATH_JS; ?>script.js" defer></script>
    <link rel="icon" href="<?= PATH_IMG; ?>favicon/favicon.png">
    <title>Le Pendu</title>
</head>

<body>
    <header>
        <div class="header-content-container">
            <div class="header-title-img-container">
                <img src="<?= PATH_IMG; ?>favicon/favicon.png" alt="Logo du jeu" class="title-img">
                <h1 class="title-page">Hangman</h1>
            </div>
            <div class="separator-bar"></div>
            <h2 class="subtitle-page">By Rayane Merlin</h2>
        </div>
    </header>