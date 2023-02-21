<head>
    <!-- CSS DE BASE-->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>perso/style.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>perso/dark-style.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>perso/media.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>perso/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>header/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/moveBackground.js" defer></script>
    <title>Perso</title>
</head>

<header>
    <?php if (!$changedMode) { ?>
        <div id="startbackground" class="<?= $theme->getClass("startbackground") ?>"></div>
    <?php } ?>
</header>
<!-- Loader -->
<?php if (!$changedMode) { ?>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/removeLoader.js" defer></script>
    <iframe id="loader" src="loader/"></iframe>
<?php } ?>
<div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.025" speedtranslate="0.4" speedratio="1"></div>
<div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
<div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
<div class="title t1">
    <p>Perso</p>
</div>
<div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar1"></div>
<div id="content" class="<?= $theme->getClass("content") ?>" onmouseover="colorBar(1);" onmouseleave="uncolorBar(1);">
    <div class="text">
        <p>Je suis un étudiant de 19 ans, passionné par l'informatique et les nouvelles technologies. Actuellement en deuxième année de BUT informatique, je souhaite poursuivre mes études dans le domaine du développement et du design.</p>
    </div>
    <div class="photo">
        <img draggable="false" src="<?= PATH_IMAGES; ?>perso/img.png" id="photopres">
    </div>
</div>
<div class="title t2">
    <p>Mes musiques :</p>
    <div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar2"></div>
    <h3>Voici quelques musiques qui m'ont marquées. Je me permets d'en parler dans ce PortFolio car la musique possède une place importante dans ma vie et dans la société en général. Ce que nous écoutons représente en quelque sorte qui nous sommes, est une source de créativité influant sur nous : les auditeurs.</h3>
</div>
<article id="music" onmouseover="colorBar(2);" onmouseleave="uncolorBar(2);">
    <div id="frames" class="<?= $theme->getClass("frames") ?>">
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/chaos/1650554820?i=1650555477"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/rappel/1479714057?i=1479714084"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/vent-de-lest/1444355821?i=1444356247"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/444-nuits/1475691326?i=1475692483"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/les-%C3%A9toiles-vagabondes/1468503258?i=1468503273"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/epilogue/1441154377?i=1441155236"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/les-bruits-de-ma-ville-feat-ph%C3%A9nom%C3%A8ne-bizness-in%C3%A9dit/1440846312?i=1440847610"></iframe>
        <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="max-width:600px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/album/fan%C3%A9/1518975690?i=1518975845"></iframe>
    </div>
</article>
<div class="title t3">
    <p>Les références :</p>
</div>
<div class="horizontal-bars <?= $theme->getClass("horizontal-bars") ?>" id="horizontal-bar3"></div>
<article id="references">

</article>