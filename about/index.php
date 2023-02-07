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
                <p class="text-content">Your privacy is important to me. It is Adobe PortFolio's policy to respect your privacy and comply with any applicable law and regulation regarding any personal information we may collect about you, including across our website, https://rayanemerlin.com, and other sites we own and operate. </br>This policy is effective as of 7 February 2023 and was last updated on 7 February 2023.</p>
                <h2 class="subtitle">- Me contacter</h2>
                <p class="text-content">For any questions or concerns regarding your privacy, you may contact us using the following details:</br>https://rayanemerlin.com/contact</p>
                <h2 class="subtitle">- Informations collectées</h2>
                <p class="text-content">
                    Information we collect includes both information you knowingly and actively provide us when using or participating in any of our services and promotions, and any information automatically sent by your devices in the course of accessing our products and services.
                </p>
                <h2 class="subtitle">- Log Data</h2>
                <p class="text-content">
                    When you visit our website, our servers may automatically log the standard data provided by your web browser. It may include your device’s Internet Protocol (IP) address, your browser type and version, the pages you visit, the time and date of your visit, the time spent on each page, other details about your visit, and technical details that occur in conjunction with any errors you may encounter. </br> Please be aware that while this information may not be personally identifying by itself, it may be possible to combine it with other data to personally identify individual persons.
                </p>
                <h2 class="subtitle">- Personal Information</h2>
                <p class="text-content">We may ask for personal information which may include one or more of the following: </br>• Name</br>• Email</p>
                <h2 class="subtitle">- Use of Cookies</h2>
                <p class="text-content">We use “cookies” to collect information about you and your activity across our site. A cookie is a small piece of data that our website stores on your computer, and accesses each time you visit, so we can understand how you use our site. This helps us serve you content based on preferences you have specified.</p>
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