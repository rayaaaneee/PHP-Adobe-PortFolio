class AI {

    static goNextTurnButton = document.getElementById("gonextturn");
    static absoluteContent = document.querySelector("#iconplayerandtext");

    constructor(managesticks) {
        this.managesticks = managesticks;
        this.starting = managesticks.starting;

        this.#initGame();

        this.playing = !this.starting;

        this.play();
    }

    #initGame() {
        // On regarde le choix du joueur
        let choice = this.starting == false ? "start" : "sticks";

        // Si il a choisi qui commence on choisit le nombre de batons
        if (choice == "start") {
            this.nbsticks = player == 0 ? 21 : 20;
            this.managesticks.addSticks(this.nbsticks);
        // Si il a choisi le nombre de batons on choisit qui commence
        } else {
            this.nbsticks = this.managesticks.getNumberOfSticks();
            let player = this.nbsticks % 4 == 1 ? 0 : 1;
            this.starting = player == 0 ? true : false;
        }

        // Selon qui commence on affiche le bon texte
        if (!this.managesticks.starting)
            AI.absoluteContent.querySelector("#player").style.display = "flex";
        else
            AI.absoluteContent.querySelector("#bot").style.display = "flex";

        this.managesticks.updateSticksRemaining();
    }

    play() {
        this.playing = !this.playing;
        if (this.playing) {
            AI.absoluteContent.querySelector("#bot").style.display = "flex";
            AI.absoluteContent.querySelector("#player").removeAttribute("style");

            AI.goNextTurnButton.disabled = true;

            let toRemove = null;
            switch ((this.managesticks.getNumberOfSticks()-1) % 4) {
                default:
                case 1:
                    toRemove = 1;
                    break;
                case 2:
                    toRemove = 2;
                    break;
                case 3:
                    toRemove = 3;
                    break;
            }
            this.managesticks.removeSticks(toRemove);
        } else {
            this.managesticks.play();
        }
    }
}        