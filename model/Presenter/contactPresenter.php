<?php
function displayMessageSent($bool)
{
    if ($bool) {
        return '<div id="hasSend">
         <img src="icones/checked.png" draggable="false">
         <p>Votre message a bien été envoyé !</p>
      </div>';
    }
}
