<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('config.php');
require_once(PATH_CLASSES . 'DarkMode.php');
$theme = new DarkMode();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS DE BASE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>loader/style.css">
    <!-- CSS DARK THEME -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>loader/dark-style.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>loader/style.css">
    <!-- SCRIPTS JAVASCRIPT -->
    <script src="<?= PATH_SCRIPTS; ?>loader/script.js" defer></script>
</head>

<body class="<?= $theme->getClass("body"); ?>">
    <div id="loaderContainer">
        <div id="backgroundLoader" class="<?= $theme->getClass("background-loader"); ?>"></div>
        <div id="containerLoaderBox" class="<?= $theme->getClass("container-loader-box"); ?>" onmouseover="changeCursor();" onmouseout="unchangeCursor();">
            <div id="left">
                <div id="titleLoaderBox">
                    <img draggable="false" src="<?= PATH_IMAGES . 'header/' . $theme->getLogoFilename(); ?>" alt="PortFolio">
                    <h1>Adobe Portfolio</h1>
                </div>
                <div id="textLoaderBox">
                    <div class="abovetext-loader-box">
                        <p class="highfontweight">© 1990 - 2022 Adobe. All rights reserved.</p>
                        <p class="highfontweight">Illustration de Flore Marquin</p>
                        <p class="lowfontweight">Illustration inspirée par le seigneur des anneaux : Les anneaux de pouvoirs. "Pour obtenir plus de détails et des informations juridiques, rendez vous sur l'écran.</p>
                        <p id="dynamicTextLoaderBox" class="highfontweight"></p>
                    </div>
                    <p id="underChangeLoaderBox" class="lowfontweight2">Russel Williams, Thomas Knoll, John Knoll, Mark Hamburg, Jackie Lincoln-O w y ang, A lan Erickson, Sarah Kong, Jerry Harris, Mike Shaw, Thomas Ruark, Yukie Takahashi, David Dobish, John Peterson, Adam Jerugim, Yuko Kagita, Foster Brereton, Meredith Payne Stotzner, Tai Luxon, Vinod Balakrishnan, David Hackel, Eric Floch, Judy Lee, Kevin Hopps, Barkin Aygun, Shanmugh Natarajan, Vishal Wadhwa, Pulkit Jindal, Quynn Megan Le, Stephen Nielson, Bob Archer, Kavana Anand, Chad Rolfs, Charles F. Rose III, Kamal Arora, Joel Baer, Metthew Neldam, Jacob Correia, Pulkit Mehta, Jesper S. Bache, Eric C hing, Dustin Passofaro, Sagar Pathak, Irina Maderych, Praveen Gelra, Vasanth Pai, Zijun Wei, Nithesh Gangadhar Salian</p>
                </div>
                <div id="logoCreativeCloudLoaderBox">
                    <img draggable="false" src="<?= PATH_IMAGES; ?>loader/adobe.png" alt="Adobe">
                    <p>Adobe Creative Cloud</p>
                </div>
            </div>
            <div id="rightPartLoaderBox">
                <div id="loaderBoxMainImg">
                    <img draggable="false" src="<?= PATH_IMAGES; ?>loader/load.png" alt="Adobe Portfolio">
                </div>
                <div id="logomediaLoaderBox">
                    <img draggable="false" src="<?= PATH_IMAGES; ?>loader/adobe.png" alt="Adobe">
                    <p>Adobe Creative Cloud</p>
                </div>
            </div>
        </div>
        <div id="cursorLoaderBox">
            <div class="point p0"></div>
            <div class="point p1"></div>
            <div class="point p2"></div>
            <div class="point p3"></div>
            <div class="point p4"></div>
            <div class="point p5"></div>
        </div>
    </div>
</body>

</html>