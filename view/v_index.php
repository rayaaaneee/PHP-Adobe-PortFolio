<head>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>index/style.css">
    <link rel="stylesheet" href="<?= PATH_CSS; ?>index/appearence.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>index/dark-style.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>index/style.css">
    <!-- SCRIPT JS -->
    <script src="<?= PATH_SCRIPTS; ?>index/script.js" defer></script>
    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='<?= $theme->getFavicon(); ?>.png' rel='icon' type='image/x-icon' />
    <title>Adobe Portfolio</title>
</head>

<body class="<?= $theme->getClass("body"); ?>">
    <header>
        <div class="triangle header-triangle"></div>
        <div class="background-container">
            <div class="triangle triangle-red"></div>
            <div class="triangle triangle-orange"></div>
            <div class="triangle triangle-yellow"></div>
            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>
        </div>
        <div class="menu">
            <div class="logo">
                <img src="<?= PATH_IMAGES; ?>favicon/white-favicon.png" alt="logo" draggable="false">
            </div>
            <ul>
                <li><a href="./?page=home">Accueil</a></li>
                <li><a href="./?page=course">Parcours</a></li>
                <li><a href="./?page=perso">Perso</a></li>
                <li><a href="./?page=contact">Contact</a></li>
                <li class="cv-download">
                    <a href="<?= PATH_FILES; ?>CV.pdf" download="CV_Rayane_Merlin.pdf" onmouseover="colorMenuImg();" onmouseleave="uncolorMenuImg();">
                        <div class="container-cv-download">
                            <p>C</p>
                            <p>V</p>
                            <div class="download-img dl-img"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <a href="./?page=home" class="get-start">Découvrir</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="title">
                <h1>Adobe Portfolio</h1>
                <div class="main-bar"></div>
                <div class="subtitle">
                    <h2>Rayane Merlin</h2> <!-- Texte dynamique -->
                    <div class="vertical-bar"></div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="triangle footer-triangle"></div>
        <a href="./?page=about" class="about-page">
            <p>Crédits</p>
        </a>
        <ul class="footer-links">
            <li title="Linked In">
                <a class="linkedin-link" href="https://www.linkedin.com/in/rayanemerlin/" target="_blank" onmouseover="changeImg(this);" onmouseleave="unchangeImg(this);">
                </a>
            </li>
            <li title="Gitlab">
                <a class="gitlab-link" href="https://forge.univ-lyon1.fr/p2103994" target="_blank" onmouseover="changeImg(this);" onmouseleave="unchangeImg(this);">
                </a>
            </li>
            <li title="Github">
                <a class="github-link" href="https://github.com/rayaaaneee" target="_blank" onmouseover="changeImg(this);" onmouseleave="unchangeImg(this);">
                </a>
            </li>
            <li title="Mail">
                <a class="mail-link" href="mailto:rayane.merlin8@gmail.com" onmouseover="changeImg(this);" onmouseleave="unchangeImg(this);">
                </a>
            </li>
            <li title="Phone">
                <a class="tel-link" href="tel:+33768283277" target="_blank" onmouseover="changeImg(this);" onmouseleave="unchangeImg(this);">
                </a>
            </li>
        </ul>
    </footer>
</body>