<?php

// On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// On démarre la session
session_start();

require_once 'config.php';
require_once PATH_DATABASE . 'connection.php';
require_once PATH_CLASSES . 'game.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>style.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>index.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>gamePage.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>chooseWord.css">
    <!-- JS Only -->
    <script src="<?= PATH_JS; ?>script.js" defer></script>
    <link rel="icon" href="<?= PATH_IMG; ?>favicon/favicon.png">
    <title>Le Pendu</title>
</head>

<body>
    <header>
        <h1 class="title-page">Le Pendu</h1>
        <div class="separator-bar"></div>
        <h2 class="subtitle-page">Par Rayane Merlin</h2>
    </header>