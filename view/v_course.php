<head>
    <!-- CSS DE BASE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/style.css">
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>media/course/style.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/dark-style.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>home/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>header/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/moveBackground.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>course/script.js" defer></script>
    <?php if (!$changedMode) { ?>
        <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/removeLoader.js" defer></script>
    <?php } ?>
    <title>Parcours</title>
</head>

<header>
    <?php if (!$changedMode) { ?>
        <div id="startbackground" class="<?= $theme->getClass("startbackground") ?>"></div>
    <?php } ?>
</header>
<!-- Loader -->
<?php if (!$changedMode) { ?>
    <iframe id="loader" src="loader/"></iframe>
<?php } ?>

<div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.02" speedtranslate="0.4" speedratio="1"></div>
<div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.5" speedratio="1"></div>
<div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.3" speedratio="1"></div>
<article id="parallax-projects">
    <div id="timeline" style="transform:translateY(100vh);"></div>
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
            <div class="project" id="proj1" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj2" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj3" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj4" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj5" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj6" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj7" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
            <div class="project" id="proj8" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                <h1>Ceci est un projet</h1>
                <p>Ceci est une description</p>
            </div>
        </div>
    </div>
</article>