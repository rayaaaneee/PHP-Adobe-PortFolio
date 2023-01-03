<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);                                          
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- CSS DE BASE --> 
    <link rel="stylesheet" href="index/general.css"> 
    <link rel="stylesheet" href="menu/menu.css"> 
    <link rel="stylesheet" href="menu/mediamenu.css"> 
    <link rel="stylesheet" href="index/page.css"> 
    <link rel="stylesheet" href="background.css"> 
    <link rel="stylesheet" href="loaderframe.css"> 
    <link rel="stylesheet" href="scrollbar.css"> 
    <link rel="stylesheet" href="index/framecv.css"> 
    <link rel="stylesheet" href="index/CV-fullscreen.css"> 
    <link rel="stylesheet" href="footer.css"> 
    <!-- CSS DES MEDIA QUERIES --> 
    <link rel="stylesheet" href="index/media/mediaframecv.css"> 
    <link rel="stylesheet" href="index/media/mediapage.css"> 
    <!-- SCRIPTS JS --> 
    <script type="text/javascript" src="index/script.js" defer></script> 
    <script type="text/javascript" src="menu/menu.js" defer></script> 
    <script type="text/javascript" src="removeLoader.js" defer></script> 
    <script type="text/javascript" src="movebackground.js" defer></script>
    <!-- FAVICON & FONTS --> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> 
    <link sizes="180x180" href="logos/favicon1.png" rel="icon" type="image/png"> 
    <title>PortFolio</title> 
    <!-- FICHIERS PHP -->
    <?php require "models/m_connect.php"?>
    <?php require "models/m_project.php"; ?>
</head>
<header> 
    <div id="startbackground"></div> 
    <div id="menu-container"> 
        <ul class="menu"> 
            <a href=""><img src="logos/portfolio_logo.png" class="logo"></a> 
            <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href=""><p id="text1">ACCUEIL</p></a></li> 
            <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href="CV/"><p id="text2">C.V</p></a></li> 
            <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="perso/"><p id="text3">PERSO</p></a></li> 
            <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href="contact/"><p id="text4">CONTACT</p></a></li> 
        </ul> 
        <ul class="mediamenu"> 
            <a href=""><img src="logos/portfolio_logo.png" class="logo"></a> 
            <a class="mediasites" id="receptionsite" href=""><img src="logos/reception_logo.png"></a> 
            <a class="mediasites" id="cvsite" href="CV/"><img src="logos/cv_logo.png"></a> 
            <a class="mediasites" id="personalsite" href="perso/"><img src="logos/personnal_logo.png"></a> 
            <a class="mediasites" id="contactsite" href="contact/"><img src="logos/contact_logo.png"></a> 
        </ul> 
    </div> 
</header> 
<body>
    <!-- LOADER & backgrounds-->
    <iframe id="loader" src="loader/index.html"></iframe> 
    <div id="background1" speedparallax="0.02" speedtranslate="0.4" speedratio="1"></div> 
    <div id="background2" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
    <div id="background3" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
    <article id="main"> 
        <div class="title t1" id="firstmid"> 
            <p>Mes projets</p> 
        </div> 
        <div class="horizontal-bars" id="horizontal-bar1"></div> 
        <article class="projects"> 
            <?php
                $db = getConnection();
                $projects = getProjects($db);
                $i=1;
                foreach ($projects as $project) {
                    ?>
                    <a href="<?php echo "index/projects/" . $project['file']; ?>" <?php echo DownloadOrLink($project['download']); ?> class="main-container" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);"> 
                        <div class="content" onmouseover="growImg(<?php echo $i ?>);" onmouseleave="shrinkImg(<?php echo $i ?>);"> 
                            <div class="to_download"> 
                                <p><?php echo $project['title'] ?></p> 
                                <img src="index/icons/<?php echo getImageName($project['download'])?>" draggable="false"> 
                            </div> 
                            <img src="index/project-logos/<?php echo $project['icon'] ?>" id="img<?php echo $i ?>" class="workslogos" draggable="false"> 
                        </div> 
                    </a> 
                    <?php
                    $i++;
                }
            ?>
            <?php if($i > 8) { ?>
                <div id="seemore" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);"> 
                    <div class="content" id="More" onmouseover="growImg(<?php echo $i ?>);" onmouseleave="shrinkImg(<?php echo $i ?>);"> 
                        <img src="index/icons/more.png" draggable="false" id="img<?php echo $i ?>" class="workslogos"> 
                    </div> 
                </div> 
            <?php } ?>
        </article> 
        <h2 class="explicationtext">Vous trouverez ici mes projets importants, qu'ils soient scolaire ou faits de mon côté. <br>Il vous suffit de cliquer pour les télécharger.</h2> 
    </article> 
    <article id="cv"> 
        <div class="title t2" id="secondmid"><p>Mon CV</p></div> 
        <div class="horizontal-bars" id="horizontal-bar2" ></div> 
        <div id="container-cv" onmouseover="colorBar(2);" onmouseleave="uncolorBar(2);"> 
            <div id="cv-img" onclick="openPage();"> 
                <img src="index/files/CV.png" alt="cv" data-lightbox="CV_Rayane_Merlin.png" data-title="Voici mon C.V actuel, celui-ci est amené à être modifié mais restera à jour sur le site."> 
            </div> 
            <div id="framecv"> 
                <div id="container"> 
                    <div id="imgcv"> 
                        <img draggable="false" src="index/files/CV.png" alt="photo"> 
                    </div> 
                    <div id="buttons"> 
                        <div id="cross" onclick="closePage();"> 
                            <p>x</p> 
                        </div> 
                        <div id="print" onclick="printPDF();"> 
                            <img draggable="false" id="imgbutton"src="index/icons-frame-cv/print.png"> 
                        </div> 
                        <a href="index/files/CV.pdf" download="CV_Rayane_Merlin.pdf"> 
                            <div id="download"> 
                                <img draggable="false" id="imgbutton" src="index/icons-frame-cv/download.png" alt="dl"> 
                            </div> 
                        </a> 
                        <div id="infos" onclick="showInformations();" onmouseleave="hideInformations();"> 
                            <img draggable="false" id="imgbutton" src="index/icons-frame-cv/infos.png" alt="" id="imginfo"> 
                        </div> 
                    </div> 
                    <div id="informations"> 
                        <div id="title">
                            <p></p>
                        </div>
                        <div id="size">
                            <p></p>
                        </div>
                        <div id="date">
                            <p></p>
                        </div>
                        <div id="type">
                            <p></p>
                        </div>
                    </div> 
                </div> 
                <div id="container-cv-text-bar"> 
                    <div class="framecv-bar"></div> 
                    <div id="framecv-text"> 
                        <p>À savoir : <br><br> Voici mon CV, celui-ci est amené à être modifié avec le temps, dans quelques mois il sera différent. <br> 
                        N'hésitez pas à passer sur ce site, celui-ci est mis à jour très régulièrement et contiendra donc forcément la dernière version en date. </p> 
                    </div> 
                    <div class="framecv-bar"></div> 
                </div> 
 
                <div id="background"></div> 
            </div> 
            <div id="cv-text"> 
                <div class="blackbar"></div> 
                <div id="zoom"> 
                    <p>N'hésitez pas à cliquer sur l'image du C.V pour zoomer, cela vous permettra de le visionner dans sa qualité optimale sans avoir besoin de le télécharger.</p> 
                    <img draggable="false" src="index/icons/zoom.png" alt="zoom"> 
                </div> 
                <p class="beforebutton">Vous pouvez télécharger mon CV actuel au format pdf en cliquant sur le bouton ci-dessous.</p> 
                <a href="index/files/CV.pdf" download="CV_Rayane_Merlin.pdf"><button class="cv-button">Télécharger</button></a> 
                <p class="beforebutton">Vous pouvez également consulter mon CV en ligne dans la page "CV" visible sur le menu de navigation ou en cliquant sur le boutton ci-dessous.</p> 
                <a href="CV/index.html"><button class="cv-button">Consulter le CV</button></a> 
                <div class="blackbar"></div> 
            </div> 
    </article> 
    <article id="realisation">
        <div class="title t3" id="firstmid"> 
            <p>La réalisation :</p> 
        </div> 
        <div class="horizontal-bars" id="horizontal-bar3"></div> 
    </article>
</body> 
<footer> 
    <div id="footer1"> 
        <p>Ce site a été créé dans le but de présenter mes projets et mes compétences.</p> 
        <p>2022, Copyright © - Rayane Merlin</p> 
    </div> 
    <div id="footer2"> 
        <a href="https://github.com/rayaaaneee" id="footergithubimg" target="_blank"><img class="footerimgs" src="footer-logos/github.png"></a> 
        <a href="https://www.linkedin.com/in/rayanemerlin/"id="footerlinkedinimg" target="_blank"><img class="footerimgs" src="footer-logos/linkedin.png"></a> 
        <a href="mailto:rayane.merlin8@gmail.com" id="footermailimg" target="_blank"><img class="footerimgs" src="footer-logos/mail.png"></a> 
        <a href="tel:+33768283277" id="footerphoneimg" target="_blank"><img class="footerimgs" src="footer-logos/phone.png"></a> 
    </div> 
</footer> 
</html>