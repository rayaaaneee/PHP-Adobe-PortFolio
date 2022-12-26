class managesticks{
    
    constructor(nbsticks, starting){
        this.tab = [];
        this.starting = starting;
        this.container = document.getElementById('game');
        this.htmlstick = document.createElement('div');
        this.htmlstick.classList.add('stick');
        this.sticksRemaininghtml = document.getElementById('sticksremaining').querySelectorAll("p")[1];
        this.allstickshtml = document.getElementById('allsticks');

        this.sticksRemaininghtml.innerHTML = nbsticks;
        this.htmlstick = document.createElement('div');
        this.htmlstick.classList.add('stick');
        this.htmlstick.setAttribute("draggable", "false");
        this.htmlstick.setAttribute("onclick", this.animationForEachStick);

        this.bot = new AI(this);
        
        // Element tmp ne sert que dans un cas
        this.tmp = null;

        this.addSticks(nbsticks);
        this.#displaySticks();
    }

    // Fonction qui ajoute des sticks
    addSticks(number){
        for (let i = 0; i < number; i++){
            this.tab.push(new stick());
        }
        console.log(this.tab);
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
            element.addEventListener("mouseover", () => {
                element.style.transform = "scale(1.1) rotate(3deg)";
            });
            element.addEventListener("mouseout", () => {
                element.style.transform = "scale(1) rotate(0deg)";
            });
        });  
    }
    
    animationForEachStick(event){
        let tmp = event.target;
        tmp.style.transform = "scale(0.4) rotate(-3deg)";
        this.#updateSticksRemaining(1); 
        setTimeout(() => {
            this.tmp.style.opacity = "0";
        }, 150);
        tmp.removeEventListener("click", this.animationForEachStick);
    }

    #updateSticksRemaining(nbr){
        let newNbr = parseInt(this.sticksRemaininghtml.innerHTML) - nbr;
        this.sticksRemaininghtml.innerHTML = newNbr;
    }

    removeAllSticks(){
        this.tab = [];
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
            if(i >= this.tab.length+1){
                clearInterval(interval);
                this.#giveAnimation();
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
}