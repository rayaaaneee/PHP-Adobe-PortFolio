<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "../controllers/DarkMode.php";
    $theme = new DarkMode(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS DE BASE-->
    <link rel="stylesheet" href="../loaderframe.css">
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="../menu/menu.css">
    <link rel="stylesheet" href="../menu/mediamenu.css">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="../background.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="stylesheet" href="../footer.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="../menu/dark-menu.css"> 
    <link rel="stylesheet" href="../dark-scrollbar.css">
    <link rel="stylesheet" href="../dark-footer.css">
    <link rel="stylesheet" href="../dark-background.css">
    <link rel="stylesheet" href="dark-page.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="media.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="../menu/menu.js" defer></script>
    <?php if (!$changedMode) { ?>
        <script type="text/javascript" src="../removeLoader.js" defer></script> 
    <?php } ?>
    <script type="text/javascript" src="../movebackground.js" defer></script>
    <script type="text/javascript" src="bar.js" defer></script>
    <!-- FAVICON & FONTS-->
    <link rel="shortcut icon" type="image/jpg" href="favicons/favicon1.jpg" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link sizes="180x180" href="../logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
    <title>PortFolio</title>
</head>
<body class="<?= $theme->getClass("body") ?>">
    <header>
        <?php if (!$changedMode) { ?>
            <div id="startbackground" class="<?= $theme->getClass("startbackground") ?>"></div> 
        <?php } ?>
        <div id="menu-container"> 
            <ul class="menu <?= $theme->getClass("menu") ?>"> 
                <a href="../"><img src="../logos/<?= $theme->getLogoFilename(); ?>.png" class="logo"></a> 
                <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href="../"><p id="text1">ACCUEIL</p></a></li> 
                <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href="../course/"><p id="text2">PARCOURS</p></a></li> 
                <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="../perso/"><p id="text3">PERSO</p></a></li> 
                <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href="../contact/"><p id="text4">CONTACT</p></a></li> 
                <form action="./" method="post" class="theme-form">
                    <button type="submit" name="dark-mode" class="<?= $theme->getButtonClass()?> mode-button"></button>
                </form>
            </ul> 
            <ul class="mediamenu"> 
                <a href=""><img src="logos/portfolio_logo.png" class="logo"></a> 
                <a class="mediasites" id="receptionsite" href=""><img src="logos/reception_logo.png"></a> 
                <a class="mediasites" id="coursesite" href="course/"><img src="logos/cv_logo.png"></a> 
                <a class="mediasites" id="personalsite" href="perso/"><img src="logos/personnal_logo.png"></a> 
                <a class="mediasites" id="contactsite" href="contact/"><img src="logos/contact_logo.png"></a> 
            </ul> 
        </div> 
    </header>
    <!-- LOADER & backgrounds -->
    <?php if (!$changedMode) { ?>
        <iframe id="loader" src="../loader/"></iframe> 
    <?php } ?>
    <div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.025" speedtranslate="0.4" speedratio="1"></div> 
    <div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
    <div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
    <div class="title t1">
        <p>Perso</p>
    </div> 
    <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar1"></div> 
    <div id="content" class="<?= $theme->getClass("content") ?>" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);">
        <div class="text">
            <p>Je suis un étudiant de 19 ans, passionné par l'informatique et les nouvelles technologies. Actuellement en deuxième année de BUT informatique, je souhaite poursuivre mes études dans le domaine du développement et du design.</p>
        </div>
        <div class="photo">
            <img draggable="false" src="imgs/img.png" id="photopres">
        </div>
    </div>
    <div class="title t2">
        <p>Mes musiques :</p>
        <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar2"></div> 
        <h3>Voici quelques musiques qui m'ont marquées. Je me permets d'en parler dans ce PortFolio car la musique possède une place importante dans ma vie et dans la société en général. Ce que nous écoutons représente en quelque sorte qui nous sommes, est une source de créativité influant sur nous : les auditeurs.</h3>
    </div>   
    <article id="music"  onmouseover="colorBar(2);" onmouseleave="uncolorBar(2);">
        <div id="frames" class="<?= $theme->getClass("frames") ?>">
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/chaos/1650554820?i=1650555477"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/rappel/1479714057?i=1479714084"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/vent-de-lest/1444355821?i=1444356247"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/444-nuits/1475691326?i=1475692483"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/les-%C3%A9toiles-vagabondes/1468503258?i=1468503273"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/epilogue/1441154377?i=1441155236"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/les-bruits-de-ma-ville-feat-ph%C3%A9nom%C3%A8ne-bizness-in%C3%A9dit/1440846312?i=1440847610"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/fan%C3%A9/1518975690?i=1518975845"></iframe>
        </div>
    </article>
    <div class="title t3">
        <p>Les références :</p>
   </div> 
    <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar3"></div> 
    <article id="references">
        
    </article>
    <footer class="<?= $theme->getClass("footer") ?>"> 
        <div id="footer1"> 
            <p>Ce site a été créé dans le but de présenter mes projets et mes compétences.</p> 
            <p>2022, Copyright © - Rayane Merlin</p> 
        </div> 
        <div id="footer2"> 
            <a href="https://github.com/rayaaaneee" id="footergithubimg" target="_blank"><img class="footerimgs" src="../footer-logos/<?= $theme->getImagePath("github"); ?>.png"></a> 
            <a href="https://www.linkedin.com/in/rayanemerlin/"id="footerlinkedinimg" target="_blank"><img class="footerimgs" src="../footer-logos/<?= $theme->getImagePath("linkedin"); ?>.png"></a> 
            <a href="mailto:rayane.merlin8@gmail.com" id="footermailimg" target="_blank"><img class="footerimgs" src="../footer-logos/<?= $theme->getImagePath("mail"); ?>.png"></a> 
            <a href="tel:+33768283277" id="footerphoneimg" target="_blank"><img class="footerimgs" src="../footer-logos/<?= $theme->getImagePath("phone"); ?>.png"></a> 
        </div> 
      </footer> 
</body>
</html>