<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- FICHIERS PHP -->
   <?php require_once "../models/m_connect.php"; ?>
   <?php require_once "../models/m_contact.php"; ?>
   <?php require_once "../controllers/c_contact.php"; ?>
   <?php require_once "../controllers/DarkMode.php";
   $theme = new DarkMode(); ?>
   <!-- CSS DE BASE -->
   <link rel="stylesheet" href="general.css">
   <link rel="stylesheet" href="../menu/menu.css">
   <link rel="stylesheet" href="page.css">
   <link rel="stylesheet" href="../background.css">
   <link rel="stylesheet" href="../scrollbar.css">
   <link rel="stylesheet" href="../footer/footer.css">
   <link rel="stylesheet" href="../loaderframe.css">
   <!-- CSS DARK THEME -->
   <link rel="stylesheet" href="../menu/dark-menu.css">
   <link rel="stylesheet" href="../dark-scrollbar.css">
   <link rel="stylesheet" href="../dark-footer.css">
   <link rel="stylesheet" href="../dark-background.css">
   <link rel="stylesheet" href="dark-page.css">
   <!-- CSS DES MEDIA QUERIES -->
   <link rel="stylesheet" href="media.css">
   <link rel="stylesheet" href="../menu/mediamenu.css">
   <link rel="stylesheet" href="../footer/media-footer.css">
   <!-- SCRIPTS JS -->
   <script type="text/javascript" src="../menu/menu.js" defer></script>
   <script type="text/javascript" src="../movebackground.js" defer></script>
   <script type="text/javascript" src="contact.js" defer></script>
   <?php
   if (!$wasSet && !$changedMode) {
   ?>
      <script type="text/javascript" src="../removeLoader.js" defer></script>
   <?php
   }
   ?>
   <!-- FAVICON & FONTS -->
   <link rel="shortcut icon" type="image/jpg" href="favicons/favicon1.jpg" />
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <link sizes="180x180" href="../logos/<?= $theme->getFavicon() ?>.png" rel="icon" type="image/png">
   <title>PortFolio</title>
</head>

<body class="<?= $theme->getClass("body") ?>">
   <header>
      <?php if (!$changedMode) { ?>
         <div id="startbackground" class="<?= $theme->getClass("startbackground") ?>"></div>
      <?php } ?>
      <?php require_once "../menu/menu.php"; ?>
   </header>
   <!-- Loader -->
   <?php if (!$changedMode) { ?>
      <iframe id="loader" src="../loader/"></iframe>
   <?php } ?>
   <?php
   if ($wasSet) {
   ?>
      <script>
         document.getElementById("loader").remove();
         document.getElementById("startbackground").remove();
      </script>
   <?php
   }
   ?>
   <!-- backgrounds -->
   <div id="background1" class="<?= $theme->getClass("background1") ?>" speedparallax="0.025" speedtranslate="0.4" speedratio="1"></div>
   <div id="background2" class="<?= $theme->getClass("background2") ?>" speedparallax="-0.03" speedtranslate="0.7" speedratio="1"></div>
   <div id="background3" class="<?= $theme->getClass("background3") ?>" speedparallax="-0.05" speedtranslate="0.5" speedratio="1"></div>

   <article id="form-container">
      <main>
         <div id="pres" class="<?= $theme->getClass("pres") ?>">
            <img draggable="false" src="icones/contact.png" id="imgcontact">
            <h3 class="present">Pour tout contact, vous pouvez aussi passer par cette page.<br>
               Pour cela, c'est très simple : <br> Rentrez le nom / pseudonyme sous lequel vous enverrez le message<br>
               Rentrez votre adresse mail<br>
               Rentrez simplement votre message !
            </h3>
         </div>
         <?php if ($SucceedSend) { ?>
            <div id="hasSend">
               <img src="icones/checked.png" draggable="false">
               <p>Votre message a bien été envoyé !</p>
            </div>
         <?php } ?>
         <div class="formulaire <?= $theme->getClass("formulaire") ?>">
            <form name="myForm" action="./" method="post">
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
   <?php require_once "../footer/footer.php"; ?>
</body>

</html>