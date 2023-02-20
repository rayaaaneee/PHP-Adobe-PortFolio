<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FICHIERS PHP -->
    <?php require_once "controllers/c_index.php"; ?>
    <!-- CSS DE BASE -->
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="index/page.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="loaderframe.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="index/frame-cv.css">
    <link rel="stylesheet" href="footer/footer.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="menu/dark-menu.css">
    <link rel="stylesheet" href="dark-scrollbar.css">
    <link rel="stylesheet" href="footer/dark-footer.css">
    <link rel="stylesheet" href="dark-background.css">
    <link rel="stylesheet" href="index/dark-page.css">
    <link rel="stylesheet" href="index/project-page.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="index/media/media-frame-cv.css">
    <link rel="stylesheet" href="index/media/media-page.css">
    <link rel="stylesheet" href="index/media/media-project-page.css">
    <link rel="stylesheet" href="menu/mediamenu.css">
    <link rel="stylesheet" href="footer/media-footer.css">
    <link rel="stylesheet" href="index/media/media-project-page.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="index/script.js" defer></script>
    <script type="text/javascript" src="menu/menu.js" defer></script>
    <script type="text/javascript" src="movebackground.js" defer></script>
    <?php if (!$changedMode) { ?>
        <script type="text/javascript" src="removeLoader.js" defer></script>
    <?php } ?>
    <!-- FAVICON & FONTS -->
    <link sizes="180x180" href="logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>PortFolio</title>
</head>

<body class="<?= $theme->getClass("body") ?>">
    <header>
        <?php if (!$changedMode) { ?>
            <div id="startbackground" class="<?= $theme->getClass("startbackground"); ?>"></div>
        <?php }
        require_once "./menu/menu.php" ?>
    </header>
    <!-- LOADER & backgrounds-->
    <?php if (!$changedMode) { ?>
        <iframe id="loader" src="loader/"></iframe>
    <?php } ?>
    <div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.02" speedtranslate="0.4" speedratio="1"></div>
    <div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
    <div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
    <article id="main">
        <div class="title t1" id="firstmid">
            <p>Mes projets</p>
        </div>
        <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar1"></div>
        <article class="projects">
            <?php
            $i = 1;
            foreach ($projects as $project) {
            ?>
                <div class="main-container" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);" onclick="openProjectPage(this);">
                    <div class="content content<?= $i; ?> <?= $theme->getClass("content") ?>" onmouseover="growImg(<?= $i ?>);" onmouseleave="shrinkImg(<?= $i ?>);">
                        <div class="to_download">
                            <p><?= ($project['title']) ?></p>
                            <img src="index/icons/<?= $theme->getImagePath(getImageName($project['is_link'])) ?>.png" draggable="false">
                        </div>
                        <img src="index/project-logos/<?= $theme->getImagePath($project['icon']) ?>.png" id="img<?= $i ?>" class="workslogos" draggable="false">
                    </div>
                    <p class="project-desc hidden"><?= $project['project_desc'] ?></p>
                    <p class="project-use-desc hidden"><?= $project['use_desc'] ?></p>
                    <p class="project-is-download hidden"><?= isDownload($project['download']); ?></p>
                    <p class="project-href hidden">/index/projects/<?= $project['file']; ?></p>
                    <?php if (isLink($project['is_link'])) { ?>
                        <p class="project-size hidden"><?= getFileSizeMo("index/projects/" . $project['file']); ?></p>
                    <?php } ?>
                </div>
            <?php
                $i++;
            }
            ?>
            <?php if ($i > 9) { ?>
                <div id="seemore" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);">
                    <div class="content <?= $theme->getClass("more"); ?>" id="More" onmouseover="growImg(<?php echo $i ?>);" onmouseleave="shrinkImg(<?php echo $i ?>);">
                        <img src="index/icons/more.png" draggable="false" id="img<?php echo $i ?>" class="workslogos">
                    </div>
                </div>
            <?php } ?>
        </article>
        <div class="project-page-container">
            <div class="project-page">
                <div class="project-page-content">
                    <div class="title-project-container">
                        <img class="link-or-download" src="index/icons/link-icon.png" draggable="false">
                        <p class="title-project"></p>
                    </div>
                    <div class="project-desc text-project-container">
                        <div class="project-desc-text title-page-project">
                            <img src="index/icons/desc-icon-pink.png" draggable="false">
                            <p>Description :</p>
                        </div>
                        <p class="project-desc-value page-content"></p>
                    </div>
                    <div class="project-use-desc text-project-container">
                        <div class="project-use-desc-text title-page-project">
                            <img src="index/icons/use-desc-icon-pink.png" draggable="false">
                            <p>Utilisation :</p>
                        </div>
                        <p class="project-use-desc-value page-content"></p>
                    </div>
                    <a class="download-or-redirect title-page-project"></a>
                    <div class="project-size-container text-project-container">
                        <img src="index/icons/white-memory-icon.png" draggable="false">
                        <p class="page-content">Taille du fichier :</p>
                        <p class="project-size-value page-content"></p>
                        <p class="page-content">Mo</p>
                    </div>
                    <div class="background-project-page"></div>
                </div>
                <div class="quit-project-button" onclick="closeProjectPage();">
                    <p>X
                    <p>
                </div>
            </div>
    </article>
    <h2 class="explicationtext <?= $theme->getClass("explication-text") ?>">Vous trouverez ici mes projets importants, qu'ils soient scolaire ou faits de mon côté. <br>Il vous suffit de cliquer pour les télécharger.</h2>
    <article id="cv">
        <div class="title t2" id="secondmid">
            <p>Mon CV</p>
        </div>
        <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar2"></div>
        <div id="container-cv" class="<?= $theme->getClass("container-cv") ?>" onmouseover="colorBar(2);" onmouseleave="uncolorBar(2);">
            <div id="cv-img" onclick="openPage();">
                <img src="index/files/CV.png" alt="cv" data-lightbox="CV_Rayane_Merlin.png" data-title="Voici mon C.V actuel, celui-ci est amené à être modifié mais restera à jour sur le site." draggable="false">
            </div>
            <div id="framecv-visible">
                <div id="container">
                    <div id="imgcv">
                        <img draggable="false" src="index/files/CV.png" alt="photo">
                    </div>
                    <div id="buttons">
                        <div id="cross" onclick="closePage();">
                            <p>x</p>
                        </div>
                        <div id="print" onclick="printPDF();">
                            <img draggable="false" id="imgbutton" src="index/icons-frame-cv/print.png">
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
                <div class="blackbar <?= $theme->getClass("blackbar") ?>"></div>
                <div id="zoom">
                    <p>N'hésitez pas à cliquer sur l'image du C.V pour zoomer, cela vous permettra de le visionner dans sa qualité optimale sans avoir besoin de le télécharger.</p>
                    <img draggable="false" src="index/icons/<?= $theme->getImagePath("zoom"); ?>.png" alt="zoom">
                </div>
                <p class="beforebutton">Vous pouvez télécharger mon CV actuel au format pdf en cliquant sur le bouton ci-dessous.</p>
                <a href="index/files/CV.pdf" download="CV_Rayane_Merlin.pdf"><button class="cv-button <?= $theme->getClass("cv-button") ?>">Télécharger</button></a>
                <div class="blackbar <?= $theme->getClass("blackbar") ?>"></div>
            </div>
    </article>
    <article id="realisation">
        <div class="title t3" id="firstmid">
            <p>La réalisation :</p>
        </div>
        <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar3"></div>
    </article>
    <?php require_once "./footer/footer.php"; ?>
</body>

</html>