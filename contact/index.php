<?php 
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
   // Variable qui définit si le formulaire a été envoyé
   $wasSet = false;
   if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
      $wasSet = true;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS DE BASE -->
   <link rel="stylesheet" href="general.css">
   <link rel="stylesheet" href="../menu/menu.css">
   <link rel="stylesheet" href="../menu/mediamenu.css">
   <link rel="stylesheet" href="page.css">
   <link rel="stylesheet" href="../background.css">
   <link rel="stylesheet" href="../scrollbar.css">
   <link rel="stylesheet" href="../footer.css">
   <link rel="stylesheet" href="../loaderframe.css">
   <!-- CSS DES MEDIA QUERIES -->
   <link rel="stylesheet" href="media.css">
   <!-- SCRIPTS JS -->
   <script type="text/javascript" src="../menu/menu.js" defer></script>
   <script type="text/javascript" src="../movebackground.js" defer></script>
   <script type="text/javascript" src="contact.js" defer></script>
   <?php
      if(!$wasSet){
         ?>
         <script type="text/javascript" src="../removeLoader.js" defer></script>
         <?php
      }
   ?>
   <!-- FAVICON & FONTS -->
   <link rel="shortcut icon" type="image/jpg" href="favicons/favicon1.jpg" />
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <link sizes="180x180" href="../logos/favicon1.png" rel="icon" type="image/png">
   <title>Portfolio</title>
   <!-- FICHIERS PHP -->
   <?php require_once "connect.php"; ?>
</head>
<body> 
   <header>
      <div id="startbackground"></div>
      <div id="menu-container">
         <ul class="menu">
            <a href="../"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
             <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href="../"><p id="text1">ACCUEIL</p></a></li>
             <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href="../CV/"><p id="text2">C.V</p></a></li>
             <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="../perso/"><p id="text3">PERSO</p></a></li>
             <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href=""><p id="text4">CONTACT</p></a></li>
         </ul>
         <ul class="mediamenu">
            <a href="../"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
            <a class="mediasites" id="receptionsite" href="../"><img src="../logos/reception_logo.png"></a>
            <a class="mediasites" id="cvsite" href="../CV/"><img src="../logos/cv_logo.png"></a>
            <a class="mediasites" id="personalsite" href="../perso/"><img src="../logos/personnal_logo.png"></a>
            <a class="mediasites" id="contactsite" href=""><img src="../logos/contact_logo.png"></a>
        </ul>
     </div>
   </header>
   <iframe id="loader" src="../loader/index.html"></iframe> 
   <?php 
      if($wasSet){
         ?>
         <script>
            document.getElementById("loader").remove();
            document.getElementById("startbackground").remove();
         </script>
         <?php
      }
   ?>
   <div id="background1" ></div>
   <div id="background2"></div>      
   <article id="form-container">
        <main>
            <div id="pres">
               <img draggable="false" src="icones/contact.png" id="imgcontact">
               <h3 class="present">Pour tout contact, vous pouvez aussi passer par cette page.<br>
                    Pour cela, c'est très simple : <br> Rentrez le nom / pseudonyme sous lequel vous enverrez le message<br>
                    Rentrez votre adresse mail<br>
                    Rentrez simplement votre message !
               </h3>
            </div>
            <div class="formulaire">
                <form name="myForm" action="index.php" method="post">
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
                            <textarea name="message" class="long field-textarea" required placeholder="Voici mon message.."></textarea>
                            <span class="error" id="errormsg"></span>
                         </td>
                      </tr>
                      <tr>
                         <td></td>
                         <td>
                            <input type="submit" value="Envoyer">      
                            <input type="reset" value="Réinitialiser"> 
                         </td>
                      </tr>
                   </table>
                </form>
            </div>
            <div id="hasSend">
            <?php
               if($wasSet){
                  // On récupère les données du formulaire et on les stocke dans la base de données

                  // Données formulaire
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];

                  // BD
                  $db = getConnection();
                  $stmt = getStatementContact($db, $name, $email, $message);
                  // Insertion
                  try{
                     $stmt->execute();
                     // On affiche le message de confirmation
                     ?>
                        <img src="icones/checked.png" draggable="false">
                        <p>Votre message a bien été envoyé !</p>
                     <?php
                  } catch (PDOException $e) {
                     // Si erreur, on affiche le message d'erreur dans la console
                     echo $e->getMessage();
                  }
               }
            ?>
        </div>
        </main>  
      </article>
      <footer style="margin-top : 200px;">
         <div id="footer1">
            <p>Ce site a été créé dans le but de présenter mes projets et mes compétences.</p>
            <p>2022, Copyright © - Rayane Merlin</p>
        </div>
        <div id="footer2">
            <a href="https://github.com/rayaaaneee" id="footergithubimg" target="_blank"><img class="footerimgs" src="../footer-logos/github.png"></a>
            <a href="https://www.linkedin.com/in/rayanemerlin/"id="footerlinkedinimg" target="_blank"><img class="footerimgs" src="../footer-logos/linkedin.png"></a>
            <a href="mailto:rayane.merlin8@gmail.com" id="footermailimg" target="_blank"><img class="footerimgs" src="../footer-logos/mail.png"></a>
            <a href="tel:+33768283277" id="footerphoneimg" target="_blank"><img class="footerimgs" src="../footer-logos/phone.png"></a>
        </div>
      </footer>
</body>
</html>