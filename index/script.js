// Fonction qui colorie la barre quand on passe la souris sur le container
const colorBar = (index) =>{
    //Agrandir la barre
    const barre = document.querySelector("#horizontal-bar"+index);
    barre.style.boxShadow = "0 0 15px rgba(212, 153, 101, 0.5)"; 
}

// Fonction inverse qui décolore la barre quand la souris quitte le container
const uncolorBar = (index) => {
    //Réduire la barre
    const barre = document.querySelector("#horizontal-bar"+index);
    barre.removeAttribute("style");
}

// Fonction qui prend en paramètre le numéro du projet et qui agrandit l'image reliée à celle ci
const growImg = (index) => {
    //Agrandir l'image
    const img = document.querySelector("#img"+index);
    img.style.scale = "1.2";
}

// Fonction inverse qui réduit l'image quand la souris quitte le container
const shrinkImg = (index) => {
    //Réduire l'image
    const img = document.querySelector("#img"+index);
    img.removeAttribute("style");
}

// Fonction qui affiche le cv en plein écran quand on clique sur l'img du cv
var isVisible = false;
var container = null;
const openPage = () =>{
    isVisible = true;
    container = document.querySelector("#framecv");
    container.id = "framecv-visible";
    document.body.removeAttribute("style");
    document.body.style.overflowY = "hidden";
}

// Fonction qui refait disparaitre le cv quand on clique sur la croix
const closePage = () => {
    isVisible = false;
/*     container.style.overflowY = "hidden";
    document.body.style.overflowY = "scroll"; */
    container.id = "framecv";
    document.body.removeAttribute("style");
    document.body.style.overflowY = "scroll";
}

// Fonction qui imprime envoie vers la page d'impression quand on clique sur le bouton Print
const printPDF = () =>{
    var pdf = window.open("index/files/CV_Rayane_Merlin.pdf", "_blank");
    pdf.print();
}

// Fonction qui ouvre le fichier dont le chemin est passé en paramètre et le retourne
const openFile = (path) => {
    var file = new File([path], "CV_Rayane_Merlin.pdf", {type: "pdf"});
    return file;
}
/* Fonction qui affiche les informations actuelles du cv ("nom, taille, date de création, etc") quand 
on hover bouton "Informations" */
var informations = document.querySelector("#informations");
var file = openFile("index/files/CV_Rayane_Merlin.pdf");
var displaying = false;
const showInformations = () =>{
    if (displaying) {
        hideInformations();
    } else {
        document.getElementById("buttons").style.zIndex = "1";

        informations.style.display = "flex";
        informations.style.opacity = "1";

        let title = file.name;
        //let length = file.size + " octets";
        let length = "281.15 Ko";
        let date = file.lastModifiedDate;
        date = date.toString().split(" ");

        /* On transforme le mois en chiffre pour que la date soit plus lisible */
        switch(date[1]){
            case "Jan":
                date[1] = "01";
                break;
            case "Feb":
                date[1] = "02";
                break;
            case "Mar":
                date[1] = "03";
                break;
            case "Apr":
                date[1] = "04";
                break;
            case "May":
                date[1] = "05";
                break;
            case "Jun":
                date[1] = "06";
                break;
            case "Jul":
                date[1] = "07";
                break;
            case "Aug":
                date[1] = "08";
                break;
            case "Sep":
                date[1] = "09";
                break;
            case "Oct":
                date[1] = "10";
                break;
            case "Nov":
                date[1] = "11";
                break;
            case "Dec":
                date[1] = "12";
                break;
        }

        date = date[2] + "/" + date[1] + "/" + date[3];
        date = "10/11/2022"
        let type = file.type;

        informations.querySelector("#title").querySelector("p:last-child").textContent = title;
        informations.querySelector("#length").querySelector("p:last-child").textContent = length;
        informations.querySelector("#date").querySelector("p:last-child").textContent = date;
        informations.querySelector("#type").querySelector("p:last-child").textContent = type;
        
        displaying = true;
    }
}

// Fonction qui enleve les informations actuelles du cv quand la souris quitte le bouton "Informations"
const hideInformations = () => {
    informations.removeAttribute("style");
    document.getElementById("buttons").style.zIndex = "3";
    displaying = false;
}

const openCard = (element) => {
}

const closeCard = (element) => {
}

const disappearProject = () => {
    if(indexProject === 8){
        clearInterval(intervalAppearProject);
        // Le bouton sert désormais à afficher les projets
        setTimeout(() => {
            seeMoreButton.removeAttribute("style");
        }, 700);
        seeMoreButton.removeEventListener("click", disappearOthersProjects);
        seeMoreButton.addEventListener("click", appearOthersProjects);
    }
    let project = projects[indexProject-1];
    setTimeout(() => {
        project.classList.add("container-seemore-project");
        setTimeout(function(){
            project.classList.remove("container-seemore-project");
            setTimeout(() => {
                project.style.display = "none";
            }, 70);
        }, 300);
        indexProject--;
    }, 75);
}

// Quand on clique sur le bouton moins ca désaffiche les projets affichées
const disappearOthersProjects = () => {
    seeMoreButton.style.display = "none";
    seeMoreButton.querySelector(".workslogos").src = "index/icons/more.png"
    intervalAppearProject = setInterval(() => {
        // Lancer l'animation au bout de 200ms
        disappearProject();
    }, 150);
}

// Fonction qui display none les projets ayant un index <=8 quand on clique sur le bouton "Voir plus"
var projects = null;
const disappearMoreThat7Projects = () => {
    projects = document.querySelectorAll(".main-container");
    projects.forEach((element, index)=>{
        if(index > 6 && index != projects.length){
            element.style.display = "none";
        }
    });
}
disappearMoreThat7Projects();

// Quand on clique sur le bouton "Voir plus", on affiche les autres projets avec une animation
var intervalAppearProject = null;
var seeMoreButton = document.getElementById("seemore");
const appearOthersProjects = () => {
    seeMoreButton.style.display = "none";
    seeMoreButton.querySelector(".workslogos").src = "index/icons/less.png"
    intervalAppearProject = setInterval(() => {
        // Lancer l'animation au bout de 200ms
        appearProject();
    }, 200);
}


// Fonction qui applique l'animation
var indexProject = 7 ;
const appearProject = () => {
    if(indexProject === projects.length-1){
        clearInterval(intervalAppearProject);
        // Le bouton sert désormais à désafficher les projets
        setTimeout(() => {
            seeMoreButton.removeAttribute("style");
        }, 250);
        seeMoreButton.removeEventListener("click", appearOthersProjects);
        seeMoreButton.addEventListener("click", disappearOthersProjects);
    }
    let project = projects[indexProject];
    project.removeAttribute("style");
    setTimeout(() => {
        setTimeout(function(){
            project.classList.remove("container-seemore-project");
        }, 300);
        project.classList.add("container-seemore-project");
        indexProject++;
    }, 75);
}

// On initialise la fonction 
seeMoreButton.addEventListener("click", appearOthersProjects);