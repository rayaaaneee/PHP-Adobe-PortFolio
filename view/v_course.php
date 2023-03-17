<head>
    <!-- CSS DE BASE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/style.css">
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>media/course/style.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/dark-style.css">
    <!-- SCRIPTS JS -->
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

<div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.02" speedtranslate="0.4"></div>
<div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.5"></div>
<div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.3"></div>
<div class="explain-container">
    <div class="explain">
        <img class="medal-img" src="<?= PATH_IMAGES; ?>course/medal-white.png" alt="icon-study">
        <h1 class="explain-text">Qu'est-ce que cette page ?</h1>
        <p class="explain-text">Voici mon parcours scolaire post bac.</p>
        <p class="explain-text">Cliquez sur chacune des cases pour en savoir plus sur chaque semestre, leur contenu et les projets réalisés.</p>
        <a href="#proj1">Consulter</a>
    </div>
</div>
<article id="parallax-projects">
    <div id="timeline" style="transform:translateY(100vh);"></div>
    <div id="fordisplay">
        <div id="points">
            <?php for ($i = 0; $i < $nbSemesters; $i++) { ?>
                <div class="point-container" data-date='<?= $semesters[$i]->formatStartingDate(); ?>'>
                    <div class="point" id="p<?= $i + 1 ?>"></div>
                </div>
            <?php } ?>
        </div>
        <div id="projects">
            <?php for ($i = 0; $i < $nbSemesters; $i++) { ?>
                <div class="project" id="proj<?= $i + 1; ?>" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                    <div class="title-project-container">
                        <img src="<?= PATH_IMAGES; ?>course/study.png" alt="icon-study">
                        <h1 class="title-project"><?= $semesters[$i]->getTitle(); ?></h1>
                        <div class="arrow-container">
                            <div class="arrow"></div>
                        </div>
                    </div>
                    <p><?= $semesters[$i]->getDescription(); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</article>