<?php

/**
 * @var array{
 *     eventName: string,
 *     eventPicture:string,
 *     eventPictureDescription: string,
 *     eventDate: string,
 *     eventDescription: string,
 *     eventPlaceName: string,
 *     eventPlaceStreet: string,
 *     eventPlaceCity: string,
 *     eventPlaceCountry: string,
 *     pricings: string,
 *     pricingsSelect: string} $display The data to display
 * @var string $textToDisplay
 * @var bool $posted
 * @var array{event: string} $ticketAddedToCart
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= PATH_CSS ?>reception.css">
    <link rel="stylesheet" href="<?= PATH_CSS ?>event.css">
    <link rel="stylesheet" href="<?= PATH_MEDIA ?>Reception.css">
    <link rel="stylesheet" href="<?= PATH_MEDIA ?>Event.css">
    <script src="<?php echo PATH_SCRIPTS . "justbought.js" ?>" defer></script>
    <script src="<?php echo PATH_SCRIPTS . "eventComments.js" ?>" defer></script>
    <title><?= $display['eventName'] ?></title>
</head>

<body>
    <?php require_once PATH_VIEWS . 'header.php'; ?>
    <?php if (!$posted) { ?>
        <div id="container">
            <div id="container-description-event">
                <div id="img-title-date">
                    <img src="<?= $display['eventPicture'] ?>" draggable="false" alt="<?= $display['eventPictureDescription'] ?>">
                    <div id="title-date">
                        <h1><?= $display['eventName'] ?></h1>
                        <p><?= $display['eventDate'] ?></p>
                        <iframe width="100%" height="80%" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=<?= GOOGLE_API_TOKEN ?>&q=<?= $display['eventPlaceName'] ?>+<?= $display['eventPlaceStreet'] ?>+<?= $display['eventPlaceCity'] ?>+<?= $display['eventPlaceCountry'] ?>">
                        </iframe>
                    </div>
                </div>
                <div id="summary-and-informations">
                    <div id="summary">
                        <h1 class="title-section">Résumé</h1>
                        <p><?= $display['eventDescription'] ?></p>
                    </div>
                    <div id="description-and-image-container">
                        <div id="informations-event">
                            <h1 class="title-section">Informations</h1>
                            <div id="place">
                                <h3 class="title-desc">Lieu</h3>
                                <div class="info-events-container">
                                    <p><?= $display['eventPlaceName'] ?></p>
                                    <p><?= $display['eventPlaceStreet'] ?></p>
                                    <p><?= $display['eventPlaceCity'] ?></p>
                                    <p><?= $display['eventPlaceCountry'] ?></p>
                                </div>
                            </div>
                            <div id="places">
                                <h3 class="title-desc">Nombre de places restantes</h3>
                                <div class="info-events-container">
                                    <?= $display['pricings'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <form id="form-event" method="post">
                            <?= $display['pricingsSelect'] ?>
                            <div id="quantity">
                                <p for="quantity">Quantité</p>
                                <input type="number" class="quantity-input" name="quantity" min="1" max="10" value="1" required>
                            </div>
                            <button id="btn-book" type="submit">Ajouter au panier</button>
                        </form>
                    <?php } else { ?>
                        <div id="form-event">
                            <?= $display['pricingsSelect'] ?>
                            <div id="quantity">
                                <p for="quantity">Quantité</p>
                                <input type="number" class="quantity-input" name="quantity" min="1" max="10" value="1" required>
                            </div>
                            <a id="btn-book" href="./?page=connection">Ajouter au panier</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['user'])) { ?>
            <form action="./?page=event&event=<?= $display["eventId"]; ?>" class="send-comment-form" method="post">
                <a href="./?page=connection&part=profile">
                    <img src="<?= $_SESSION["user"]->getProfilePicturePath(); ?>" alt="avatar" class="user-img">
                    <p><?= $_SESSION["user"]->getFirstName(); ?></p>
                </a>
                <div class="field-comment-and-bar">
                    <input type="text" name="sendcomment" class="comment-field" placeholder="Ecrivez votre commentaire ici .." onfocus="extendBar(this)" onblur="shrinkBar(this)" oninput="displayCancelButton(this)" maxlength="600" required></input>
                    <div class="white-comment-bar"></div>
                </div>
                <input type="hidden" name="eventid" value="<?= $display['eventId'] ?>">
                <input type="submit" value="Envoyer">
                <button type="button" id="cancel-comment" onclick="emptyCommentField(this)">Annuler</button>
            </form>
        <?php } ?>
        <section class="comment-container">
            <div id="title-comment">
                <h1><?= $displayer["nbComments"]; ?></h1>
                <h1> commentaires :</h1>
            </div>
            <div class="comment-bar"></div>
            <?= $displayer["comment"] ?>
        </section>
</body>

</html>
<?php } else { ?>
    <div id="addtocarttextcontainer">
        <div id="imgandtextaddtocart">
            <img src="<?= PATH_IMAGES . "/useful/justbought.png" ?>" alt="justbought" draggable="false">
            <h1 id="thankstoaddtocart" class="addtocarttext"><?php echo $textToDisplay; ?></h1>
        </div>
        <?= $ticketAddedToCart["event"] ?>
        <a href="?page=cart" class="buttonwherebuy" onmouseover="changeImgButtonColor(this);" onmouseout="unchangeImgButtonColor(this);">
            <img draggable="false" src="<?php echo PATH_IMAGES . "useful/cart.png"; ?>">Voir mon panier
        </a>
        <a href="./" class="buttonwherebuy" onmouseover="changeImgButtonColor(this);" onmouseout="unchangeImgButtonColor(this);">
            Continuer mes achats<img draggable="false" src="<?= PATH_IMAGES . "useful/doublearrow.png"; ?>">
        </a>
    </div>
<?php } ?>
<?php require_once PATH_VIEWS . 'footer.php'; ?>