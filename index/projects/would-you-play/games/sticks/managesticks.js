class managesticks{

    static goNextSound = useful.openSound("ok", 0.05);

    constructor(nbsticks, starting, gamemode){
        // Initialisation des attributs
        this.tab = [];
        this.starting = starting;
        this.hasRemoved = null;
        this.nbTurns = 0;

        // Attributs HTML
        this.container = document.getElementById('game');
        this.allstickshtml = document.getElementById('allsticks');

        this.sticksRemaininghtml = document.getElementById('sticksremaining').querySelectorAll("p")[1];
        this.sticksRemaininghtml.innerHTML = nbsticks;

        this.htmlstick = document.createElement('div');
        this.#initAttributes();
        
        // Sons
        this.destroySound = useful.openSound("woosh", 0.05);

        // Animations
        this.addSticks(nbsticks);

        // IA
        this.bot = new AI(this, gamemode);
    }

    #initAttributes(){
        this.htmlstick.classList.add('stick');
        this.htmlstick.setAttribute("draggable", "false");
        this.htmlstick.setAttribute("onclick", this.animationForEachStick);
    }

    // Fonction qui ajoute des sticks
    addSticks(number){
        for (let i = 0; i < number; i++){
            this.tab.push(new stick());
        }
    }

    // Fonction qui supprime des sticks
    removeSticks(nbrSticks){
        var random = null;
        var i = 0;
        this.intervalDelete = setInterval(() => {
            i++;
            let stickDeleted = null;
            setTimeout(() => {
                do {
                    random = Math.floor(Math.random() * this.tab.length);
                    stickDeleted = this.tab[random].isDeleted();
                    if(!stickDeleted){
                        this.tab[random].delete();
                        this.allstickshtml.querySelectorAll(".stick")[random].style.transform = "scale(0.5) rotate(3deg)";
                        this.allstickshtml.querySelectorAll(".stick")[random].style.cursor = "default";
                        setTimeout(() => {
                            this.allstickshtml.querySelectorAll(".stick")[random].style.opacity = 0;
                        }, 100);
                        this.destroySound.play();
                        this.updateSticksRemaining();
                    }
                } while(stickDeleted);
            }, 400);
            if(i == nbrSticks){
                clearInterval(this.intervalDelete);
                setTimeout(() => {
                    setTimeout(() => {
                        useful.printLoading("player");
                    }, 300);
                    AI.goNextTurnButton.disabled = true;
                    
                    // Une fois que le bot a joué on fait jouer directement le joueur
                    this.bot.play();
                }, 1000);
            }
        } , 500);
    }

    // Pour chaque baton on lui donne une animation
    #giveAnimation(){
        var allsticks = this.allstickshtml.querySelectorAll(".stick");
        allsticks.forEach((element) => {
            element.style.cursor = "pointer";
            element.addEventListener("mouseover", () => {
                if(!this.tab[element.id].isDeleted() && this.bot.playing)
                    element.style.transform = "scale(1.1) rotate(3deg)";
                    element.style.cursor = "pointer";
                if(!this.bot.playing)
                    element.style.cursor = "default";
            });
            element.addEventListener("mouseout", () => {
                if(!this.tab[element.id].isDeleted() && this.bot.playing)
                    element.style.transform = "scale(1) rotate(0deg)";
            });
            element.addEventListener("click", () => {
                if(!this.tab[element.id].isDeleted() && this.bot.playing && this.hasRemoved != null){
                    this.hasRemoved++;
                    this.bot.toRemove = this.hasRemoved;

                    AI.goNextTurnButton.disabled = false;

                    element.style.opacity = 0;
                    element.style.transform = "scale(0.5) rotate(0deg)";
                    element.style.cursor = "default";

                    this.destroySound.play();
                    this.tab[element.id].delete();
                    this.updateSticksRemaining();

                    if(this.hasRemoved == 3){
                        this.hasRemoved = null;
                        this.bot.play();
                        managesticks.goNextSound.play();
                    }
                    
                    if (this.getNumberOfSticks() == 0){
                        setTimeout(() => { 
                            this.bot.stop();
                            document.getElementById('sticks-game-container').style.display = "none";
                        }, 200);
                    }
                }
            });
        });  
    }

    updateSticksRemaining(){
        let sticksRemaining = 0;
        this.tab.forEach((element) => {
            if(!element.isDeleted())
                sticksRemaining++;
        });
        this.sticksRemaininghtml.innerHTML = sticksRemaining;
    }

    displaySticks(){
        let index = 0;
        let intervalappear = setInterval(() => {
            this.#appearSticks(index, intervalappear);
            index++;
        }, 50);
    }

    #appearSticks(i, interval){
        if(i >= this.tab.length){
            if(i == this.tab.length+2){
                clearInterval(interval);
                this.#giveAnimation();
                // Quand tout est correctement affiché on lance la partie
                this.bot.play();
            }
        } else {
            let newnode = this.htmlstick.cloneNode(true);
            this.allstickshtml.appendChild(newnode);
            newnode.id = i;
            newnode.style.transform = "scale(1.1) rotate(-3deg)";
        }
        if(i > 1)
            this.allstickshtml.querySelectorAll(".stick")[i-2].removeAttribute("style");
    }

    toString(){
        if(this.tab.length == 0)
            console.log("No sticks");
        else {
            this.tab.forEach((element) => {
                console.log("stick no "+element.id);
            });
        }
    }

    play(){
        this.hasRemoved = 0;
        AI.goNextTurnButton.disabled = true;
    }

    getNumberOfSticks(){
        let i = 0;
        this.tab.forEach((element) => {
            if(!element.isDeleted())
                i++;
        });
        return i;
    }
}