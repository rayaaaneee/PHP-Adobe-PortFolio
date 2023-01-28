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
    var pdf = window.open("index/files/CV.pdf", "_blank");
    pdf.print();
}

// Fonction qui prend en parametre le titre, la taille, la date et le type et qui retourne tous ceux relatifs au CV 
const getInformations = () => {
    let result = null;

    let path = "index/files/data.txt";

    let fichierBrut = new XMLHttpRequest();
    fichierBrut.open("GET", path, false);
    fichierBrut.onreadystatechange = function (){
        if(fichierBrut.readyState === 4){
        if(fichierBrut.status === 200 || fichierBrut.status == 0){
            result = fichierBrut.responseText;
        }
    }
    }
    fichierBrut.send(null);

    // On récupère les informations du fichier
    let lines = result.split("\n");
    let titlefile = lines[0].split(":")[1];
    let datefile = lines[1].split(":")[1];
    let sizefile = lines[2].split(":")[1];
    let typefile = lines[3].split(":")[1];

    // Retirer tous les espaces
    titlefile = titlefile.replaceAll(" ", '');
    datefile = datefile.replaceAll(" ", '');
    sizefile = sizefile.replace(" ", '');
    sizefile = sizefile.split(" ")[0];
    typefile = typefile.replaceAll(" ", '');

    // On retourne les informations
    return [titlefile, sizefile, datefile, typefile];
}
/* Fonction qui affiche les informations actuelles du cv ("nom, taille, date de création, etc") quand 
on hover bouton "Informations" */
var informations = document.querySelector("#informations");
var buttons = document.querySelector("#buttons");
var displaying = false;
const showInformations = () =>{
    if (displaying) {
        hideInformations();
    } else {
        buttons.style.zIndex = "3";

        informations.style.display = "flex";
        informations.style.opacity = "1";

        let title = null;
        let size = null;
        let date = null;
        let type = null;

        // On récupère les informations du fichier
        let result = getInformations();
        title = result[0];
        size = result[1];
        date = result[2];
        type = result[3];

        informations.querySelector("#title").querySelector("p").textContent = title;
        informations.querySelector("#size").querySelector("p").textContent = "Taille : " + size + " Ko";
        informations.querySelector("#date").querySelector("p").textContent = "Modification : " + date;
        informations.querySelector("#type").querySelector("p").textContent = "Type : " + type;
        
        displaying = true;
    }
}

// Fonction qui enleve les informations actuelles du cv quand la souris quitte le bouton "Informations"
const hideInformations = () => {
    informations.removeAttribute("style");
    buttons.removeAttribute("style");
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
        if(index > 6 && index != projects.length && projects.length > 8){
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
if(seeMoreButton != null) seeMoreButton.addEventListener("click", appearOthersProjects);

// Function qui permet d'ouvrir la page
const projectPage = document.querySelector(".project-page-container");
const projectContainer = document.querySelector(".projects");
var intervalAnimationProjectViewing = null;
var lastElement = null;
const openProjectPage = (element, i) => {

    lastElement = element.cloneNode(true);

    lastElement.removeAttribute("onclick");
    lastElement.classList.add("actual-project-viewing");
    
    projectPage.appendChild(lastElement);
    projectPage.style.display = "block";
    projectPage.querySelector(".index-project").textContent = i;

    document.body.style.overflowY = "hidden";

    animateProjectViewing();
    intervalAnimationProjectViewing = setInterval(animateProjectViewing, 3000);
}

// Fonction qui permet de fermer la page

const closeProjectPage = () => {
    projectPage.removeAttribute("style");
    lastElement.remove();

    document.body.removeAttribute("style");

    clearInterval(intervalAnimationProjectViewing);
}

var growing = false;
const animateProjectViewing = () => {
    switch(growing){
        case true:
            console.log(true);
            lastElement.style.transform = "scale(0.9)";
            break;
        case false:
            console.log(false);
            lastElement.style.removeProperty("transform");
            break;
    }
    growing = !growing;
}