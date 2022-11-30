//Faire bouger les backgrounds horizontalement

//Déclaration de la vitesse
var speed1 = 0.5;
var speed2 = 0.9;

// Déclaration et initialisation de la position initiale
var x1 = 0; 
var x2 = 0;

// On appelle la fonction moveBackground toutes les 50ms qui déplace les background de 0.4px et 0.7px
const moveBackground = function () {
    setInterval(() => {
        //On décremente la position par la vitese
        x1 -= speed1;
        x2 -= speed2;

        //On applique la nouvelle position
        document.getElementById("background1").style.backgroundPosition = x1 + "px center";
        document.getElementById("background2").style.backgroundPosition = x2 + "px center";
    }, 50);
}

// One lance l'animation en appelant la fonction moveBackground
moveBackground();