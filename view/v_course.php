<head>
    <!-- CSS DE BASE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/style.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/semester-page.css">
    <!-- CSS MEDIA -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>media/course/style.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>course/dark-style.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>header/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/moveBackground.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>course/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>course/SemesterPage.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/removeLoader.js" defer></script>
    <title>Parcours</title>
</head>

<header>
    <div id="startbackground"></div>
</header>
<!-- Loader -->
<iframe id="loader" src="loader/"></iframe>

<?php require_once PATH_VIEWS_PARTS . 'background.php'; ?>

<div class="explain-container">
    <div class="explain animate">
        <img class="medal-img" src="<?= PATH_IMAGES; ?>course/medal-white.png" alt="icon-study" draggable="false">
        <h1 class="explain-text">Qu'est-ce que cette page ?</h1>
        <p class="explain-text">Voici mon parcours scolaire allant de l'obtention du bac jusqu'à aujourd'hui.</p>
        <p class="explain-text">Cliquez sur chacune des cases pour en savoir plus sur chaque semestre, leur contenu et les projets réalisés.</p>
        <a href="#view" class="explain-text" onclick="clearUrl();">
            <p>Consulter</p>
            <div class="arrow-view-container">
                <div class="arrow-view"></div>
                <div class="arrow-view"></div>
            </div>
        </a>
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
            <div id="view"></div>
            <?php for ($i = 0; $i < $nbSemesters; $i++) : ?>
                <div class="project animate" id="proj<?= $i + 1; ?>" onmouseover="colorButtonsAssociateToProject(this);" onclick="onclickProject(this)" onmouseout="uncolorButtonsAssociateToProject(this)">
                    <div class="title-project-container">
                        <img src="<?= $semesters[$i]->getIconPath(); ?>" alt="icon-study" draggable="false">
                        <h1 class="title-project"><?= $semesters[$i]->getTitle(); ?></h1>
                        <div class="arrow-container">
                            <div class="arrow" onclick="openSemesterPage(this, event);"></div>
                        </div>
                    </div>
                    <p class="project-description"><?= $semesters[$i]->getDescription(); ?></p>
                    <div class="bottom-project-container">
                        <div class="bottom-project"></div>
                    </div>
                    <div class="hidden-informations hidden" hidden>
                        <p class="title-semester"><?= $semesters[$i]->getTitle(); ?></p>
                        <p class="icon-white"><?= $semesters[$i]->getWhiteIconPath(); ?></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</article>
<article id="semesterPage">
    <div class="semester-page-main-container">
        <div class="semester-page-title-img-container">
            <img class="semester-page-img" alt="icon-study" draggable="false">
            <p class="title-semester"></p>
        </div>
        <div class="semester-page-body">
            <div class="semester-part">
                <div class="semester-page-date semester-page-title-part">
                    <img src="<?= PATH_IMAGES; ?>course/calendar-pink.png" alt="calendar" draggable="false">
                    <div class="page-title-part"> Dates : </div>
                </div>
                <div class="semester-page-content">
                </div>
            </div>
            <div class="semester-part">
                <div class="semester-page-school semester-page-title-part">
                    <img src="<?= PATH_IMAGES; ?>course/school-pink.png" alt="calendar" draggable="false">
                    <div class="page-title-part"> Ecole : </div>
                </div>
                <div class="semester-page-content">
                </div>
            </div>
            <div class="semester-part">
                <div class="semester-page-tab semester-page-title-part">
                    <img src="<?= PATH_IMAGES; ?>course/tab.png" alt="calendar" draggable="false">
                    <div class="page-title-part"> Matières : </div>
                </div>
                <div class="semester-page-content">
                </div>
            </div>
        </div>
    </div>
    <div class="cross-semester-page-container" onclick="closeSemesterPage();">
        <p>X</p>
    </div>
    <div class="background-semester-page"></div>
</article>