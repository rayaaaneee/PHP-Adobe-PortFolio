class managesticks{
    
    constructor(nbsticks, starting){
        // Initialisation des attributs
        this.tab = [];
        this.starting = starting;
        this.container = document.getElementById('game');
        this.allstickshtml = document.getElementById('allsticks');

        this.sticksRemaininghtml = document.getElementById('sticksremaining').querySelectorAll("p")[1];
        this.sticksRemaininghtml.innerHTML = nbsticks;

        this.htmlstick = document.createElement('div');
        this.#initAttributes();

        // IA
        this.bot = new AI(this);
        
        // Sons
        this.destroySound = useful.openSound("woosh", 0.05);

        // Animations
        this.addSticks(nbsticks);
        this.#displaySticks();
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
        for (let i = 0; i < nbrSticks; i++)
            this.tab.pop();
    }

    // Pour chaque baton on lui donne une animation
    #giveAnimation(){
        var allsticks = this.allstickshtml.querySelectorAll(".stick");
        allsticks.forEach((element) => {
            element.style.cursor = "pointer";
            element.addEventListener("mouseover", () => {
                if(!this.tab[element.id].isDeleted())
                    element.style.transform = "scale(1.1) rotate(3deg)";
            });
            element.addEventListener("mouseout", () => {
                if(!this.tab[element.id].isDeleted())
                    element.style.transform = "scale(1) rotate(0deg)";
            });
            element.addEventListener("click", () => {
                if(!this.tab[element.id].isDeleted()){
                    element.style.opacity = 0;
                    element.style.transform = "scale(0.5) rotate(0deg)";
                    element.style.cursor = "default";
                    console.log("stick no "+element.id+" deleted");
                    this.destroySound.play();
                    this.tab[element.id].delete();
                    this.#updateSticksRemaining();
                }
            });
        });  
    }

    #updateSticksRemaining(){
        let sticksRemaining = 0;
        this.tab.forEach((element) => {
            if(!element.isDeleted())
                sticksRemaining++;
        });
        this.sticksRemaininghtml.innerHTML = sticksRemaining;
    }

    #displaySticks(){
        let index = 0;
        let intervalappear = setInterval(() => {
            this.#appearSticks(index, intervalappear);
            index++;
        }, 70);
    }

    #appearSticks(i, interval){
        if(i >= this.tab.length) {
            clearInterval(interval);
            this.#giveAnimation();
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
}