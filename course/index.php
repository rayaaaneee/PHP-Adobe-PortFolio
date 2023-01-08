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
   <!--  <script type="text/javascript" src="../removeLoader.js" defer></script> -->
    <!-- <script type="text/javascript" src="../movebackground.js" defer></script> -->
    <script type="text/javascript" src="script.js" defer></script>
    <!-- FAVICON & FONTS-->
    <link rel="shortcut icon" type="image/jpg" href="favicons/favicon1.jpg" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link sizes="180x180" href="../logos/favicon1.png" rel="icon" type="image/png">
    <title>Portfolio</title>
</head>

<body>
    <header>
        <!-- <div id="startbackground"></div> -->
    </header>
    <!-- <iframe id="loader" src="../loader/index.html" allowfullscreen></iframe> -->
    <div id="background1" speedparallax="0.02" speedtranslate="0.4" speedratio="1"></div> 
    <div id="background2" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
    <div id="background3" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
    <article id="parallax-projects">
        <div id="timeline"></div>
        <div id="fordisplay">
            <div id="points">
                <div class="point" id="p1"></div>
                <div class="point" id="p2"></div>
                <div class="point" id="p3"></div>
                <div class="point" id="p4"></div>
                <div class="point" id="p5"></div>
                <div class="point" id="p6"></div>
                <div class="point" id="p7"></div>
                <div class="point" id="p8"></div>
            </div>
            <div id="projects">
                <div class="project" id="proj1" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj2" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj3" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj4" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj5" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj6" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj7" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
                <div class="project" id="proj8" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)">
                    <h1>Ceci est un projet</h1>
                    <p>Ceci est une description</p>
                </div>
            </div>
        </div>
    </article>
<!--     <footer>
        <div id="footer1">
            <p>Ce site a été créé dans le but de présover mes projets et mes compétences.</p>
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