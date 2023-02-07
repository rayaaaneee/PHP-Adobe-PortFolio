<?php require_once "../controllers/c_about.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../menu/menu.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../footer/media-footer.css">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="../background.css">
    <link rel="stylesheet" href="../loaderframe.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <!-- CSS DARK MODE -->
    <link rel="stylesheet" href="../menu/dark-menu.css">
    <link rel="stylesheet" href="../footer/dark-footer.css">
    <link rel="stylesheet" href="../dark-background.css">
    <link rel="stylesheet" href="../dark-scrollbar.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="../menu/media-menu.css">
    <link rel="stylesheet" href="media-page.css">
    <!-- JS -->
    <script src="../menu/menu.js" defer></script>
    <script type="text/javascript" src="movebackground.js" defer></script>
    <?php if (!$changedMode) { ?>
        <script type="text/javascript" src="removeLoader.js" defer></script>
    <?php } ?>
    <script src="script.js" defer></script>
    <link sizes="180x180" href="logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link sizes="180x180" href="../logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
    <title>À propos</title>
</head>


<body class="<?= $theme->getClass("body"); ?>">
    <header>
        <?php require_once "../menu/menu.php"; ?>
        <?php if (!$changedMode) { ?>
            <div id="startbackground" class="<?= $theme->getClass("startbackground"); ?>"></div>
        <?php }
        require_once "../menu/menu.php" ?>
    </header>
    <!-- LOADER & backgrounds-->
    <?php if (!$changedMode) { ?>
        <iframe id="loader" src="../loader/"></iframe>
    <?php } ?>
    <div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.02" speedtranslate="0.4" speedratio="1"></div>
    <div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
    <div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>
    <div class="main-container">
        <div class="content">
            <div class="privacy">
                <div class="title-container">
                    <h1 class="title">• Politique de confidentialité</h1>
                    <img src="icones/privacy.png" alt="" />
                </div>
                <p class="text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, a nemo? Odit in alias beatae tempore, iste vitae neque quae ratione at ducimus, nobis quia architecto. Nulla laudantium inventore doloremque a, alias quia dolorum dolores explicabo. Natus quam quod deserunt atque voluptates dolores vitae vel eos, facilis molestiae eveniet consequuntur recusandae ipsum tempore debitis adipisci? Quis temporibus voluptatem maxime laboriosam sed nam, vitae aperiam perferendis minima iusto eius repellendus tempore omnis quisquam. Tempora facilis perspiciatis possimus quidem eius quia, dolore quo consequatur non labore nihil excepturi eveniet obcaecati qui cumque. Deleniti deserunt tenetur autem unde alias. Expedita quod reprehenderit assumenda?</p>
            </div>
            <div class="contact">
                <div class="title-container">
                    <h1 class="title">• À propos</h1>
                    <img src="icones/about_yellow.png" alt="" />
                </div>
                <p class="text-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, laboriosam! Placeat, cumque illo! Quisquam voluptate quasi enim rerum obcaecati laboriosam neque illo provident! Dicta accusantium veritatis laudantium minima in atque at voluptates reiciendis qui hic cupiditate veniam repellat, vero quod molestias officia illo nulla nostrum dolor consectetur similique illum accusamus optio. Fugiat vitae delectus, cumque perferendis maxime voluptate voluptatibus pariatur doloribus officiis ducimus, dolores tenetur. Incidunt dicta recusandae quae itaque cupiditate, corporis, soluta ratione fugiat voluptatem, repudiandae dolores. Porro recusandae nihil beatae tempora vel, ad molestias expedita ratione soluta praesentium eos exercitationem sit quia iste dolor non quibusdam, asperiores libero?</p>
            </div>
        </div>
</body>

<?php require_once "../footer/footer.php"; ?>

</html>