<?php require_once "../controllers/c_about.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../menu/menu.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../footer/media-footer.css">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="../background.css">
    <link rel="stylesheet" href="../loaderframe.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="dark-page.css">
    <link rel="stylesheet" href="../menu/dark-menu.css">
    <link rel="stylesheet" href="../footer/dark-footer.css">
    <link rel="stylesheet" href="../dark-background.css">
    <link rel="stylesheet" href="../dark-scrollbar.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="../menu/mediamenu.css">
    <link rel="stylesheet" href="media-page.css">
    <!-- JS -->
    <script src="../menu/menu.js" defer></script>
    <script type="text/javascript" src="../movebackground.js" defer></script>
    <?php if (!$changedMode) { ?>
        <script type="text/javascript" src="../removeLoader.js" defer></script>
    <?php } ?>
    <script src="script.js" defer></script>
    <link sizes="180x180" href="logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link sizes="180x180" href="../logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
    <title>À propos</title>
</head>


<body class="<?= $theme->getClass("body"); ?>">
    <header>
        <?php require_once "../menu/menu.php"; ?>
        <?php if (!$changedMode) { ?>
            <div id="startbackground" class="<?= $theme->getClass("startbackground"); ?>"></div>
        <?php }
        require_once "../menu/menu.php" ?>
    </header>
    <!-- LOADER & backgrounds-->
    <?php if (!$changedMode) { ?>
        <iframe id="loader" src="../loader/"></iframe>
    <?php } ?>
    <div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.02" speedtranslate="0.4" speedratio="1"></div>
    <div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
    <div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
    <div class="main-container">
        <div class="content">
            <div class="privacy">
                <div class="title-container title-container-first-child">
                    <h1 class="title title1">• Politique de confidentialité</h1>
                    <div class="bar"></div>
                    <img src="<?= $theme->getImagePath("icones/privacy"); ?>.png" alt="privacy" />
                </div>
                <p class="text-content">Votre vie privée est importante pour moi. La politique d'Adobe PortFolio est de respecter votre vie privée et de se conformer à toutes les lois et réglementations applicables concernant les informations personnelles que nous pouvons collecter à votre sujet, y compris sur mon site Web, https://rayanemerlin.com.</br>Cette politique est en vigueur depuis le 7 février 2023 et a été mise à jour pour la dernière fois le 7 février 2023.</p>
                <h2 class="subtitle">- Me contacter</h2>
                <p class="text-content">Pour toute question ou préoccupation concernant votre vie privée, vous pouvez nous contacter en utilisant les coordonnées suivantes :</br>https://rayanemerlin.com/contact</p>
                <h2 class="subtitle">- Informations collectées</h2>
                <p class="text-content">Les informations que nous collectons incluent à la fois les informations que vous nous fournissez sciemment et activement lorsque vous utilisez ou participez à l'un de nos services et promotions, et toute information envoyée automatiquement par vos appareils lors de l'accès à nos produits et services.
                </p>
                <h2 class="subtitle">- Log Data</h2>
                <p class="text-content">Lorsque vous visitez notre site Web, nos serveurs peuvent enregistrer automatiquement les données standard fournies par votre navigateur Web. Il peut inclure l'adresse IP (Internet Protocol) de votre appareil, le type et la version de votre navigateur, les pages que vous visitez, l'heure et la date de votre visite, le temps passé sur chaque page, d'autres détails sur votre visite et des détails techniques qui se produisent dans conjonction avec les erreurs que vous pourriez rencontrer. </br> Veuillez noter que même si ces informations peuvent ne pas être personnellement identifiables en elles-mêmes, il peut être possible de les combiner avec d'autres données pour identifier personnellement des personnes individuelles.
                </p>
                <h2 class="subtitle">- Personal Information</h2>
                <p class="text-content">Il pourrait vous être demandées des informations personnelles qui peuvent inclure un ou plusieurs des éléments suivants :</br>• Nom</br>• Email</p>
                <h2 class="subtitle">- Utilisation des cookies</h2>
                <p class="text-content">Nous utilisons des « cookies » pour collecter des informations sur vous et votre activité sur notre site. Un cookie est un petit élément de données que notre site Web stocke sur votre ordinateur et auquel il accède à chaque fois que vous visitez, afin que nous puissions comprendre comment vous utilisez notre site. Cela nous aide à vous proposer du contenu en fonction des préférences que vous avez spécifiées.</p>
            </div>
            <div class="contact">
                <div class="title-container">
                    <h1 class="title title2">• À propos</h1>
                    <div class="bar"></div>
                    <img src="<?= $theme->getImagePath("icones/about"); ?>.png" alt="about_icon" />
                </div>
                <p class="text-content">Ce site a été entièrement codé par mes soins dans le but de présenter mon parcours, mes projets et mes compétences.</p>
            </div>
        </div>
</body>

<?php require_once "../footer/footer.php"; ?>

</html>