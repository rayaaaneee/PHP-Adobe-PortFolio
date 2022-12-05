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
    <title>Portfolio</title>
</head>

<body>
    <header>
        <div id="startbackground"></div>
        <div id="menu-container">
            <ul class="menu">
                <a href="../"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
                <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href="../"><p id="text1">ACCUEIL</p></a></li>
                <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href=""><p id="text2">PARCOURS</p></a></li>
                <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="../CV/"><p id="text3">C.V</p></a></li>
                <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href="../perso/"><p id="text4">PERSO</p></a></li>
                <li onmouseover="change(5);" onmouseleave="unchange(5);"><a class="sites s5" href="../contact/"><p id="text5">CONTACT</p></a></li>
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
    <div id="background1" ></div>
    <div id="background2"></div>
    <article id="parallax-projects">
            <div id="timeline"></div>
            <div id="projects">
                <div class="project" id="p1">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
            </div>
    </article>
<!--     <footer>
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
     </footer> -->
</body>
</html>