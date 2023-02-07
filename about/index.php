<?php require_once "../controllers/c_about.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../menu/menu.css">
    <link rel="stylesheet" href="../menu/dark-menu.css">
    <link rel="stylesheet" href="../menu/media-menu.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../footer/dark-footer.css">
    <link rel="stylesheet" href="../footer/media-footer.css">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="../background.css">
    <link rel="stylesheet" href="../dark-background.css">
    <link rel="stylesheet" href="../dark-scrollbar.css">
    <link rel="stylesheet" href="../loaderframe.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <!-- CSS DARK MODE -->
    <!-- CSS DES MEDIA QUERIES -->
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
    <title>À propos</title>
</head>
<?php require_once "../menu/menu.php"; ?>

<body class="<?= $theme->getClass("body"); ?>">
</body>
<?php require_once "../footer/footer.php"; ?>

</html>