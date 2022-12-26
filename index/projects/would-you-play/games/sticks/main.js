var choosecontainer = document.getElementById('choose-sticks-container');
var allinstructionsticks = document.querySelectorAll(".allinstructionssticks");
var sticks = new managesticks();
var gamecontainer = document.getElementById('sticks-game-container');
var allsticks = gamecontainer.querySelector("#allsticks");

/* Passer au tour suivant */
const goNextTurn = () => {
}

/* Fonction principale qui démarre le jeu */
const startSticksGame = () => {
    // On affiche le container du jeu
    choosecontainer.style.display = "none";
    gamecontainer.removeAttribute("style");

    // On crée l'instance de managesticks et on démarre le jeu
    var sticks = new managesticks(nbSticks, starting);
}

/* On fait apperaitre les instructions dans l'ordre */
var indexInstruction = 0; 
var indexLimit = allinstructionsticks.length;
var nbSticks = 30;
var starting = null;
var canStart = false;

const appearSticksInstructions = () => {
    //On cache toutes les instructions
    for(var i = 0; i < allinstructionsticks.length; i++)
        allinstructionsticks[i].style.display = "none";

    // On recupere les informations de chaque instruction
    switch(indexInstruction){
        case 0:
            if(parseInt(allinstructionsticks[0].querySelector("select").value) == 1)
                indexInstruction=1;
            else
                indexInstruction=2;
            break;
        case 1:
            // Si l'utilisateur n'a rien mit on met 30 par defaut
            canStart = true;
            if(allinstructionsticks[1].querySelector("input").value == ""){
                break;
            }
            nbSticks = parseInt(allinstructionsticks[1].querySelector("input").value);
            break;
        case 2:
            if(parseInt(allinstructionsticks[2].querySelector("select").value) == 1)
                starting = true;
            else
                starting = false;
            canStart = true;
            break;
        default:
            break;
    }

    // Si la limite d'index est atteinte, on arrete
    if(canStart){
        // On remet les instructions correctement
        for(var i = 0; i < allinstructionsticks.length; i++)
            allinstructionsticks[i].style.display = "none";
        indexInstruction = 0;
        startSticksGame();
        return;
    }

    // On affiche l'instruction suivante en désaffichant celle d'avant
    allinstructionsticks[indexInstruction].removeAttribute("style");
    allinstructionsticks[indexInstruction-1].style.display = "none";
}