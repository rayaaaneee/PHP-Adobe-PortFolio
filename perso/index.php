<!DOCTYPE html>
<html lang="en">
<head>
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
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="media.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="../menu/menu.js" defer></script>
    <script type="text/javascript" src="../removeLoader.js" defer></script>
    <script type="text/javascript" src="../movebackground.js" defer></script>
    <!-- FAVICON & FONTS-->
    <link rel="shortcut icon" type="image/jpg" href="favicons/favicon1.jpg" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link sizes="180x180" href="../logos/favicon1.png" rel="icon" type="image/png">
    <title>PortFolio</title>
</head>

<body>
    <header>
        <div id="startbackground"></div>
        <div id="menu-container">
            <ul class="menu">
                <a href="../"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
                <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href="../"><p id="text1">ACCUEIL</p></a></li>
                <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href="../CV/"><p id="text2">C.V</p></a></li>
                <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="../perso/"><p id="text3">PERSO</p></a></li>
                <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href="../contact/"><p id="text4">CONTACT</p></a></li>
            </ul>
            <ul class="mediamenu">
                <a href="../index.php"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
                <a class="mediasites" id="receptionsite" href="../"><img src="../logos/reception_logo.png"></a>
                <a class="mediasites" id="cvsite" href="../CV/"><img src="../logos/cv_logo.png"></a>
                <a class="mediasites" id="personalsite" href="../perso/"><img src="../logos/personnal_logo.png"></a>
                <a class="mediasites" id="contactsite" href="../contact/"><img src="../logos/contact_logo.png"></a>
            </ul>
        </div>
    </header>
    <iframe id="loader" src="../loader/index.html" allowfullscreen></iframe>
    <div id="background1" speedparallax="0.025" speedtranslate="0.9"></div> 
    <div id="background2" speedparallax="-0.01" speedtranslate="0.5"></div> 
    <div class="title t1">
        <p>Perso</p>
    </div> 
    <div id="content">
        <div class="text">
            <p>Je suis un étudiant de 19 ans, passionné par l'informatique et les nouvelles technologies. Actuellement en deuxième année de BUT informatique, je souhaite poursuivre mes études dans le domaine du développement et du design.</p>
        </div>
        <div class="photo">
            <img draggable="false" src="imgs/img.png" id="photopres">
        </div>
    </div>
    <div class="title t2">
        <p>Mes musiques :</p>
        <h3>Voici quelques musiques qui m'ont marquées. Je me permets d'en parler dans ce PortFolio car la musique possède une place importante dans ma vie et dans la société en général. Ce que nous écoutons représente en quelque sorte qui nous sommes, est une source de créativité influant sur nous : les auditeurs.</h3>
    </div>   
    <article id="music">
        <div id="frames">
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
    <article id="references">
        
    </article>
    <footer>
        <div id="footer1">
            <p>Ce site a été créé dans le but de présenter mes projets et mes compétences.</p>
            <p>2022, Copyright © - Rayane Merlin</p>
        </div>
        <div id="footer2">
            <a href="https://github.com/rayaaaneee" id="footergithubimg" target="_blank"><img class="footerimgs" src="../footer-logos/github.png"></a>
            <a href="https://www.linkedin.com/in/rayanemerlin/"id="footerlinkedinimg" target="_blank"><img class="footerimgs" src="../footer-logos/linkedin.png"></a>
            <a href="mailto:rayane.merlin8@gmail.com" id="footermailimg" target="_blank"><img class="footerimgs" src="../footer-logos/mail.png"></a>
            <a href="tel:+33768283277" id="footerphoneimg" target="_blank"><img class="footerimgs" src="../footer-logos/phone.png"></a>
        </div>
     </footer>
</body>
</html>