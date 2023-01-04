class useful{
    constructor(){}

    // Fonction qui prend en paramètre le nom du fichier image et qui retourne l'image
    static openImage(url){
        let img = new Image();
        img.src = "images/"+url+".png";
        return img;
    }

    // Fonction qui prend en paramètre le nom du fichier audio et qui retourne l'audio
    static openSound (file, volume){
        let audio = new Audio("sounds/"+file+".mp3");
        audio.volume = volume;
        return audio;
    }

    // Fonction qui prend en paramètre l'url du fichier json et qui retourne sa réponse 
    static openJSON (url) {
        var request = new XMLHttpRequest();
        request.open('GET', url, false);
        request.send(null);
        return JSON.parse(request.responseText);
    }

    // Fonction qui affiche le texte de chargement correct en fonction du paramètre
    static printLoading(string){
        if(string == "bot"){
            AI.absoluteContent.querySelector("#player").removeAttribute("style");
            AI.absoluteContent.querySelector("#bot").style.display = "flex";
            AI.absoluteContent.style.top =  "-1vw";
            AI.absoluteContent.style.left =  "1vw";
            return;
        } else if(string == "player"){
            AI.absoluteContent.querySelector("#bot").removeAttribute("style");
            AI.absoluteContent.querySelector("#player").style.display = "flex";
            AI.absoluteContent.style.top =  "-2vw";
            AI.absoluteContent.style.left =  "1vw";
            return;
        } else {
            console.error("printLoading() : wrong parameter");
            return;
        }
    }
}