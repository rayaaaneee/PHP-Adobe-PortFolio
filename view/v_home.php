<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>home/style.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>home/frame-cv.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>home/dark-style.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>home/project-page.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>home/frame-cv.css">
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>home/project-page.css">
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>home/style.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>home/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>header/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/moveBackground.js" defer></script>
    <?php if (!$changedMode) { ?>
        <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/removeLoader.js" defer></script>
    <?php } ?>
    <title>Accueil</title>
</head>

<?php if (!$changedMode) { ?>
    <div id="startbackground" class="<?= $theme->getClass("startbackground"); ?>"></div>
<?php } ?>
<!-- LOADER & backgrounds-->
<?php if (!$changedMode) { ?>
    <iframe id="loader" src="./loader/"></iframe>
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
            $project = new Project($project);
        ?>
            <div class="main-container" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);" onclick="openProjectPage(this);">
                <div class="content content<?= $i; ?> <?= $theme->getClass("content") ?>" onmouseover="growImg(<?= $i ?>);" onmouseleave="shrinkImg(<?= $i ?>);">
                    <div class="to_download">
                        <p><?= $project->getTitle() ?></p>
                        <img src="<?= $theme->getImagePath($project->getImagePath()); ?>" draggable="false">
                    </div>
                    <img src="<?= PATH_IMAGES . "home/project-logos/" . $theme->getImagePath($project->getIcon()) ?>" id="img<?= $i ?>" class="workslogos" draggable="false">
                </div>
                <p class="project-desc hidden"><?= $project->getDescription() ?></p>
                <p class="project-use-desc hidden"><?= $project->getUseDescription() ?></p>
                <p class="project-is-download hidden"><?= $project->isDownload(); ?></p>
                <p class="projet-is-link hidden"><?= $project->isLink(); ?></p>
                <p class="project-href hidden">/index/projects/<?= $project->getFile() ?></p>
                <?php if ($project->isDownload()) { ?>
                    <p class="project-size hidden"><?= $project->getFileSize(); ?></p>
                <?php } ?>
            </div>
        <?php
            $i++;
        }
        ?>
        <?php if ($i > 9) { ?>
            <div id="seemore" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);">
                <div class="content <?= $theme->getClass("more"); ?>" id="More" onmouseover="growImg(<?php echo $i ?>);" onmouseleave="shrinkImg(<?php echo $i ?>);">
                    <img src="<?= PATH_IMAGES; ?>home/icon/more.png" draggable="false" id="img<?php echo $i ?>" class="workslogos">
                </div>
            </div>
        <?php } ?>
    </article>
    <div class="project-page-container">
        <div class="project-page">
            <div class="project-page-content">
                <div class="title-project-container">
                    <img class="link-or-download" src="<?= PATH_IMAGES; ?>home/icon/white-link.png" draggable="false">
                    <p class="title-project"></p>
                </div>
                <div class="project-desc text-project-container">
                    <div class="project-desc-text title-page-project">
                        <img src="<?= PATH_IMAGES; ?>home/icon/desc-icon-pink.png" draggable="false">
                        <p>Description :</p>
                    </div>
                    <p class="project-desc-value page-content"></p>
                </div>
                <div class="project-use-desc text-project-container">
                    <div class="project-use-desc-text title-page-project">
                        <img src="<?= PATH_IMAGES; ?>home/icon/use-desc-icon-pink.png" draggable="false">
                        <p>Utilisation :</p>
                    </div>
                    <p class="project-use-desc-value page-content"></p>
                </div>
                <a class="download-or-redirect title-page-project"></a>
                <div class="project-size-container text-project-container">
                    <img src="<?= PATH_IMAGES; ?>home/icon/white-memory-icon.png" draggable="false">
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
            <img src="<?= PATH_FILES; ?>CV.png" alt="cv" data-lightbox="CV_Rayane_Merlin.png" data-title="Voici mon C.V actuel, celui-ci est amené à être modifié mais restera à jour sur le site." draggable="false">
        </div>
        <div id="framecv-visible">
            <div id="container">
                <div id="imgcv">
                    <img draggable="false" src="<?= PATH_FILES; ?>CV.png" alt="photo">
                </div>
                <div id="buttons">
                    <div id="cross" onclick="closePage();">
                        <p>x</p>
                    </div>
                    <div id="print" onclick="printPDF();">
                        <img draggable="false" id="imgbutton" src="<?= PATH_IMAGES; ?>home/frame-cv/print.png">
                    </div>
                    <a href="<?= PATH_FILES; ?>CV.pdf" download="CV_Rayane_Merlin.pdf">
                        <div id="download">
                            <img draggable="false" id="imgbutton" src="<?= PATH_IMAGES; ?>home/frame-cv/download.png" alt="dl">
                        </div>
                    </a>
                    <div id="infos" onclick="showInformations();" onmouseleave="hideInformations();">
                        <img draggable="false" id="imgbutton" src="<?= PATH_IMAGES; ?>home/frame-cv/infos.png" alt="" id="imginfo">
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
                <img draggable="false" src="<?= PATH_IMAGES . "home/icon/" . $theme->getImagePath("zoom"); ?>" alt="zoom">
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