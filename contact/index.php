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
   <script type="text/javascript" src="../menu.js" defer></script>
   <script type="text/javascript" src="../menu.js" defer></script>
   <script type="text/javascript" src="../removeLoader.js" defer></script>
   <script type="text/javascript" src="../movebackground.js" defer></script>
   <!-- FAVICON & FONTS -->
   <link rel="shortcut icon" type="image/jpg" href="favicons/favicon1.jpg" />
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <link sizes="180x180" href="../logos/favicon1.png" rel="icon" type="image/png">
   <title>Portfolio</title>
</head>
<body>  
   <header>
      <div id="startbackground"></div>
      <div id="menu-container">
         <ul class="menu">
            <a href="../index.html"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
             <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href="../index.html"><p id="text1">ACCUEIL</p></a></li>
             <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href="../CV/index.html"><p id="text2">C.V</p></a></li>
             <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="../perso/index.html"><p id="text3">PERSO</p></a></li>
             <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href="../contact/index.php"><p id="text4">CONTACT</p></a></li>
         </ul>
         <ul class="mediamenu">
            <a href="../index.html"><img src="../logos/portfolio_logo.png" alt="logo" class="logo"></a>
            <a class="mediasites" id="receptionsite" href="../index.html"><img src="../logos/reception_logo.png"></a>
            <a class="mediasites" id="cvsite" href="../CV/index.html"><img src="../logos/cv_logo.png"></a>
            <a class="mediasites" id="personalsite" href="../perso/index.html"><img src="../logos/personnal_logo.png"></a>
            <a class="mediasites" id="contactsite" href="../contact/index.php"><img src="../logos/contact_logo.png"></a>
        </ul>
     </div>
   </header>
   <iframe id="loader" src="../loader/index.html" allowfullscreen></iframe>    
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
                <form name="myForm" action="connect.php" onsubmit="return validateForm()" method="post">
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
      <?php 
         if (isset($_POST['myForm'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
         }
      ?>
</body>
</html>