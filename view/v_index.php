<head>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>index/style.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>index/dark-style.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>index/style.css">
    <!-- SCRIPT JS -->
    <script src="<?= PATH_SCRIPTS; ?>index/script.js" defer></script>
    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
            </ul>
            <a href="./?page=home" class="get-start">Get start</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="title">
                <h1>Adobe Portfolio</h1>
                <div class="main-bar"></div>
                <h2>Par Rayane Merlin</h2>
            </div>
        </div>
    </main>
    <footer>
        <div class="triangle footer-triangle"></div>
        <a href="./?page=about" class="about-page">
            <p>Crédits</p>
        </a>
    </footer>
</body>