var choosecontainer = document.getElementById('choose-sticks-container');
var allinstructionsticks = document.querySelectorAll(".allinstructionssticks");
var sticks = null;
var gamecontainer = document.getElementById('sticks-game-container');
var allsticks = gamecontainer.querySelector("#allsticks");
var sticks = null;
/* Passer au tour suivant */
const goNextTurn = (game) => {
    if(!AI.goNextTurnButton.disabled) {
        managesticks.goNextSound.play();
        sticks.bot.play();
    }
}

/* Fonction principale qui démarre le jeu */
var isStarted = false;
const startSticksGame = () => {
    isStarted = true;

    // On affiche le container du jeu
    choosecontainer.style.display = "none";
    gamecontainer.removeAttribute("style");

    // On crée l'instance de managesticks et on démarre le jeu
    sticks = new managesticks(nbSticks, starting);
}

/* On fait apperaitre les instructions dans l'ordre */
var indexInstruction = 0; 
var indexLimit = allinstructionsticks.length;
var nbSticks = 0;

// Remettre à null
var starting = null;

var canStart = false;
var reDisplay = false;
const appearSticksInstructions = () => {
    managesticks.goNextSound.play();

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
            if(reDisplay){
                reDisplay = false;
                allinstructionsticks[1].style.display = "flex";
                return;
            }
                
            // Si l'utilisateur n'a rien mit on met 30 par defaut
            if(allinstructionsticks[1].querySelector("input").value == ""){
                nbSticks = 30;
            // Sinon on regarde si il a mis un nombre entre 10 et 100
            } else {
                nbSticks = parseInt(allinstructionsticks[1].querySelector("input").value);
                if(nbSticks < 10 || nbSticks > 100){
                    alert("Le nombre de batons doit etre compris entre 10 et 100");
                    indexInstruction = 1;
                    allinstructionsticks[1].querySelector("input").value = "";
                    reDisplay = true;
                    nbSticks = 30;
                    return appearSticksInstructions();
                }
            }
            canStart = true;
            break;
        case 2:
            if(allinstructionsticks[2].querySelector("select").value == "bot")
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

addEventListener("keydown", (event) => {
    if(event.key == "Enter"){
        managesticks.goNextSound.play();
        if(!isStarted)
            appearSticksInstructions();
        else
            goNextTurn();
    }
});

document.querySelectorAll("select").forEach((select) => {
    select.addEventListener("change", (event) => {
        managesticks.goNextSound.play();
    });
});

var load = document.querySelectorAll("#bot p");
var intervalLoad = null;
// Fonction qui s'occupe de l'animation des points (bot)
const animateLoadBot = (color) => {
    var index = 3;
    intervalLoad = setInterval(() => {
        load[(index-1)%3].removeAttribute("style");
        load[index%3].style.color = color;
        index++;
    },300);
}
animateLoadBot("white");

// Fonction qui s'occupe de l'animation des points (joueur)
var pointsPlayerLoad = document.querySelectorAll("#player p:not(#player p:first-child)");
const animateLoadPlayer = () => {
    var index = 4;
    intervalLoad = setInterval(() => {
        switch(index%4){
            case 0:
                pointsPlayerLoad[0].removeAttribute("style");
                break;
            case 1:
                pointsPlayerLoad[1].removeAttribute("style");
                break;
            case 2:
                pointsPlayerLoad[2].removeAttribute("style");
                break;
            case 3:
                pointsPlayerLoad.forEach((point) => {
                    point.style.opacity = "0";
                });
                break;
        }
        index++;
    },700);
}
animateLoadPlayer();