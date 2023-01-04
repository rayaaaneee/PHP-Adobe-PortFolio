class AI {

    static goNextTurnButton = document.getElementById("gonextturn");
    static absoluteContent = document.querySelector("#iconplayerandtext");

    constructor(managesticks) {
        this.managesticks = managesticks;

        this.playing = this.managesticks.starting;

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
    }

    startGame() {
        // Selon qui commence on affiche le bon texte
        if (this.playing) {
            useful.printLoading("bot");
        } else {
            useful.printLoading("player");
        }

        // On lance le jeu
        this.play();
    }

    play() {
        if (this.playing) {
            useful.printLoading("bot");

            AI.goNextTurnButton.disabled = true;

            let toRemove = null;
            switch ((this.managesticks.getNumberOfSticks()-1) % 4) {
                case 1:
                    toRemove = 1;
                    break;
                case 2:
                    toRemove = 2;
                    break;
                case 3:
                    toRemove = 3;
                    break;
                default:
                    toRemove = Math.floor(Math.random() * 3) + 1;
                    break;
            }
            this.managesticks.removeSticks(toRemove);
        } else {
            this.managesticks.play();
        }
        this.playing = !this.playing;
    }

    stop(){
        AI.absoluteContent.querySelector("#bot").removeAttribute("style");
        AI.absoluteContent.querySelector("#player").removeAttribute("style");
        this.#startWinningAnimation();
    }

    #startWinningAnimation(){

    }
}        