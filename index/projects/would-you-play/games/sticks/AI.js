class AI {

    static goNextTurnButton = document.getElementById("gonextturn");
    static absoluteContent = document.querySelector("#iconplayerandtext");

    constructor(managesticks) {

        // Déclaration des attributs
        this.managesticks = managesticks;
        this.playing = this.managesticks.starting;
        this.toRemove = null;

        // On initialise le jeu
        this.#initGame();
    }

    #initGame() {
        // On regarde le choix du joueur
        let choice = this.playing == null ? "sticks" : "start";

        // Si il a choisi qui commence on choisit le nombre de batons
        if (choice == "start") {
            let player = this.playing == true ? "bot" : "player";
            let newNbr = null;
            do {
                newNbr = parseInt(Math.floor(Math.random() * 100));
            } while (newNbr % 4 == 0 || newNbr <= 10 || newNbr >= 50);
            
            // Si c'est le bot qui commence on ajoute 1, 2 ou 3 batons
            if(player == "bot"){
                // Nombre random entre 1 et 3
                let toAdd = null;
                do {
                    toAdd = Math.floor(Math.random() * 3) + 1;
                } while (toAdd == 0);
                newNbr +=  toAdd;
            }
            this.nbsticks = newNbr;

            this.managesticks.addSticks(this.nbsticks);

        // Si il a choisi le nombre de batons on choisit qui commence
        } else if (choice == "sticks") {
            this.nbsticks = this.managesticks.getNumberOfSticks();
            let tmp = null;
            if ((this.nbsticks-1)%4 != 0 ){
                this.playing = true;
            } else {
                this.playing = false;
            }
        }

        this.managesticks.updateSticksRemaining();
        this.startGame();
    }

    startGame() {
        // Selon qui commence on affiche le bon texte
        if (this.playing) {
            useful.printLoading("bot");
        } else {
            useful.printLoading("player");
        }

        // On lance le jeu
        this.#initPresentationText();
    }

    #initPresentationText(){
        let content = document.querySelector("#presentation");
        let startingPlayerContainerText = content.querySelector("#startingplayer");
        let nbSticksContainerText = content.querySelector("#nbsticks");

        let startingPlayerText = startingPlayerContainerText.querySelectorAll(".modify");
        let nbSticksText = nbSticksContainerText.querySelectorAll(".modify");

        startingPlayerText[0].innerHTML = this.playing ? "Bot" : "Player";
        nbSticksText[0].innerHTML = this.nbsticks;
        
        this.#giveAnimationToPresentationText(content);
    }

    #giveAnimationToPresentationText(content){
        document.getElementById("sticks-game-container").style.display = "none";
        document.getElementById("sticks-game-container").style.opacity = 0;
        document.getElementById("sticks-game-container").style.display = "flex";
        content.style.display = "flex";
        content.style.opacity = 1;
        setTimeout(() => {
            content.style.opacity = 0;
            setTimeout(() => {
                content.style.display = "none";

                this.managesticks.displaySticks()
                document.getElementById("sticks-game-container").style.opacity = 1;
            }, 300);
        }, 1000);
    }

    play() {
        this.managesticks.nbTurns++;
        if(this.managesticks.nbTurns > 1){
            let gamestate = document.getElementById("gamestate");

            // On cache le texte
            document.getElementById("sticks-game-container").style.opacity = 0;
            gamestate.style.display = "flex";

            // On affiche le texte
            setTimeout(() => {
                // Initialiser le texte
                gamestate.querySelector("#turn").querySelectorAll(".modify")[0].innerHTML = this.playing ? "Bot" : "Your";
                gamestate.querySelector("#nbsticks").querySelectorAll(".modify")[0].innerHTML = !this.playing ? "Bot" : "You";
                gamestate.querySelector("#nbsticks").querySelectorAll(".modify")[1].innerHTML = this.toRemove;
                gamestate.querySelector("#nbsticks").querySelectorAll(".modify")[2].innerHTML = this.toRemove == 1 ? "stick" : "sticks";

                // Afficher le texte
                gamestate.style.opacity = 1;
                setTimeout(() => {
                    gamestate.style.opacity = 0;
                    setTimeout(() => {
                        gamestate.style.display = "none";
                        document.getElementById("sticks-game-container").style.opacity = 1;

                        // On relance le jeu
                        this.#autoRemoveSticks();
                    }, 300);
                }, 1700);

            }, 150);
        } else {
            this.#autoRemoveSticks();
        }
    }

    #autoRemoveSticks(){
        if (this.playing) {
            useful.printLoading("bot");

            AI.goNextTurnButton.disabled = true;

            switch ((this.managesticks.getNumberOfSticks()-1) % 4) {
                case 1:
                    this.toRemove = 1;
                    break;
                case 2:
                    this.toRemove = 2;
                    break;
                case 3:
                    this.toRemove = 3;
                    break;
                default:
                    this.toRemove = Math.floor(Math.random() * 3) + 1;
                    break;
            }
            this.managesticks.removeSticks(this.toRemove);
        } else {
            this.managesticks.play();
        }
        this.playing = !this.playing;
    }

    stop(){
        AI.absoluteContent.querySelector("#bot").removeAttribute("style");
        AI.absoluteContent.querySelector("#player").removeAttribute("style");
        this.#startWinningAnimation();
        
        document.getElementById("presentation").style.display = "flex";
    }

    #startWinningAnimation(){

    }
}        