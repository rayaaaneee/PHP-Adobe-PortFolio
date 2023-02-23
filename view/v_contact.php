<head>
    <!-- CSS DE BASE -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>contact/style.css">
    <!-- CSS DARK THEME -->
    <link rel="stylesheet" href="<?= PATH_CSS; ?>contact/dark-style.css">
    <!-- CSS DES MEDIA QUERIES -->
    <link rel="stylesheet" href="<?= PATH_MEDIA; ?>contact/style.css">
    <!-- SCRIPTS JS -->
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>header/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>contact/script.js" defer></script>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/moveBackground.js" defer></script>
    <?php if (!$changedMode && !$wasSet) { ?>
        <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/removeLoader.js" defer></script>
    <?php } ?>
    <title>Accueil</title>
</head>

<header>
    <?php if (!$changedMode && !$wasSet) { ?>
        <div id="startbackground" class="<?= $theme->getClass("startbackground") ?>"></div>
    <?php } ?>
</header>
<!-- Loader -->
<?php if (!$changedMode && !$wasSet) { ?>
    <iframe id="loader" src="loader/"></iframe>
    <script type="text/javascript" src="<?= PATH_SCRIPTS; ?>general/removeLoader.js" defer></script>
<?php } ?>
<!-- backgrounds -->
<div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.025" speedtranslate="0.4" speedratio="1"></div>
<div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
<div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>

<article id="form-container">
    <main>
        <div id="pres" class="<?= $theme->getClass("pres") ?>">
            <img draggable="false" src="<?= PATH_IMAGES; ?>contact/contact.png" id="imgcontact">
            <h3 class="present">Pour tout contact, vous pouvez aussi passer par cette page.<br>
                Pour cela, c'est très simple : <br>
                • Rentrez le nom / pseudonyme sous lequel vous enverrez le message<br>
                • Rentrez votre adresse mail<br>
                • Rentrez simplement votre message !
            </h3>
        </div>
        <?= displayMessageSent($SucceedSend); ?>
        <div class="formulaire <?= $theme->getClass("formulaire") ?>">
            <form name="myForm" action="./?page=contact" method="post">
                <table class="form-style">
                    <tr>
                        <td>
                            <label>
                                Votre nom <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" name="name" class="long" required placeholder="Nom Prénom">
                            <span class="error" id="errorname"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Votre adresse e-mail <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <input type="email" name="email" class="long" required placeholder="example@mail.com">
                            <span class="error" id="erroremail"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Message <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <textarea name="message" class="long field-textarea" required placeholder="Voici mon message.." maxlength="300" oninput="getNbCharsLeft(this);" onfocus="appearCharsLeft();" onblur="disappearCharsLeft();"></textarea>
                            <div class="nb-chars-left">
                                <p class="to-modify">nb chars</p>
                                <p class="nb-chars-left-text">caractères restants</p>
                                <div class="spinner">
                                    <div class="bounce1 bounce"></div>
                                    <div class="bounce2 bounce"></div>
                                    <div class="bounce3 bounce"></div>
                                </div>
                            </div>
                            <span class="error" id="errormsg"></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="input-container <?= $theme->getClass("input-container"); ?>">
                            <input type="submit" value="Envoyer">
                            <input type="reset" value="Réinitialiser" onclick="initNbCharsLeft();">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</article>