class AI {
    constructor(managesticks) {
        this.managesticks = managesticks;
        this.starting = managesticks.starting;

        this.#initGame();

        this.playing = !this.starting;

        this.goNextTurnButton = document.getElementById("gonextturn");

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
        console.log(this.starting);
    }

    play() {
        this.playing = !this.playing;
        if (this.playing) {
            console.log("Bot turn");
            this.goNextTurnButton.disabled = true;

            let toRemove = null;
            switch ((this.managesticks.tab.length - 1) % 4) {
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
                    toRemove = 1;
            }
            this.managesticks.removeSticks(toRemove);
        } else {
            console.log("Player turn");
            this.managesticks.play();
        }
    }
}        