class sprite{
    constructor(){
        // Attribut de useful qui permet de charger les images
        this.openFiles = new useful();
        // Tableau qui contiendra tous les sprites
        this.array = new Array();

        // On définit tous les sprites et on les ajoute à l'array
        this.pixelSprite = this.#initAndPush(this.pixelSprite);
        this.pacmanSprite = this.#initAndPush(this.pacmanSprite);
        this.redPacmanSprite = this.#initAndPush(this.redPacmanSprite);
        this.classicSprite = this.#initAndPush(this.classicSprite);
        this.googleSprite = this.#initAndPush(this.googleSprite);
        this.purpleGoogleSprite = this.#initAndPush(this.purpleGoogleSprite); 
        this.chromeSprite = this.#initAndPush(this.chromeSprite);
        this.cartoonSprite = this.#initAndPush(this.cartoonSprite);

        console.log(this.cartoonSprite);
        
        // On initialise les URLs, les types et on affecte toutes les images à chaque objet
        this.#initTypes();
        this.#initURLs();
        this.#initSprite();
    }

    #initSprite () {
        this.array.forEach((element) => {
            if (element.url != undefined) {
                if (element.corners) {
                    element.cornerUpLeft = this.openFiles.openImage("theme/"+element.url+"_sprite/corner_up_left");
                    element.cornerUpRight = this.openFiles.openImage("theme/"+element.url+"_sprite/corner_up_right");
                    element.cornerDownLeft = this.openFiles.openImage("theme/"+element.url+"_sprite/corner_down_left");
                    element.cornerDownRight = this.openFiles.openImage("theme/"+element.url+"_sprite/corner_down_right");
                }

                if(element.rotations) {
                    element.tailUp = this.openFiles.openImage("theme/"+ element.url + "_sprite/tail_up");
                    element.tailDown = this.openFiles.openImage("theme/"+ element.url + "_sprite/tail_down");
                    element.tailLeft = this.openFiles.openImage("theme/"+ element.url + "_sprite/tail_left");
                    element.tailRight = this.openFiles.openImage("theme/"+ element.url + "_sprite/tail_right");
                    element.verticalBody = this.openFiles.openImage("theme/"+ element.url + "_sprite/vertical_body");
                    element.horizontalBody = this.openFiles.openImage("theme/"+ element.url + "_sprite/horizontal_body");
                } else {
                    element.tail = this.openFiles.openImage("theme/"+ element.url + "_sprite/tail");
                    element.body = this.openFiles.openImage("theme/"+ element.url + "_sprite/body");
                }

                element.appleImage = this.openFiles.openImage("theme/"+element.url+"_sprite/apple");
                element.poisonedAppleImage = this.openFiles.openImage("theme/"+element.url+"_sprite/poisoned_apple");
                element.headUp = this.openFiles.openImage("theme/"+element.url+"_sprite/head_up");
                element.headDown = this.openFiles.openImage("theme/"+element.url+"_sprite/head_down");
                element.headLeft = this.openFiles.openImage("theme/"+element.url+"_sprite/head_left");
                element.headRight = this.openFiles.openImage("theme/"+element.url+"_sprite/head_right");
            } 
            element.wallImage = this.openFiles.openImage("wall");
        });
    }

    #initURLs () {
        this.pacmanSprite.url = "pacman";
        this.redPacmanSprite.url = "red_pacman";
        this.classicSprite.url = "classic";
        this.googleSprite.url = "google";
        this.purpleGoogleSprite.url = "purple_google";
        this.chromeSprite.url = "chrome";
        this.cartoonSprite.url = "cartoon";
    }

    #initTypes () {
        // true : with corners // false : without corners
        this.pixelSprite.corners = false;
        this.pacmanSprite.corners = false;
        this.redPacmanSprite.corners = false;
        this.classicSprite.corners = true;
        this.googleSprite.corners = true;
        this.purpleGoogleSprite.corners = true;
        this.chromeSprite.corners = true;
        this.cartoonSprite.corners = true;

        // true : with rotation of tail // false : without rotation of tail
        this.pixelSprite.rotations = false;
        this.pacmanSprite.rotations = false;
        this.redPacmanSprite.rotations = false;
        this.classicSprite.rotations = true;
        this.googleSprite.rotations = true;
        this.purpleGoogleSprite.rotations = true;
        this.chromeSprite.rotations = true;
        this.cartoonSprite.rotations = true;
    }

    #initAndPush (sprite) {
        sprite = new Object();
        this.array.push(sprite);
        return sprite;
    }
}