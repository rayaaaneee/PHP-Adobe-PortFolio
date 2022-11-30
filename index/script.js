// Fonction qui colorie la barre quand on passe la souris sur le container
const colorBar = (index) =>{
    //Agrandir la barre
    const barre = document.querySelector("#horizontal-bar"+index);
    barre.style.border = "2px solid rgba(212, 153, 101, 0.8)"; 
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
    const img = document.querySelector(".img"+index);
    img.style.scale = "1.2";
    img.style.transition = "all 0.2s";
}

// Fonction inverse qui réduit l'image quand la souris quitte le container
const shrinkImg = (index) => {
    //Réduire l'image
    const img = document.querySelector(".img"+index);
    img.style.scale = "1";
    img.style.transition = "all 0.2s";
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

/* Fonction qui affiche les informatios actuelles du cv ("nom, taille, date de création, etc") quand 
on hover bouton "Informations" */
const showInformations = () =>{
}

// Fonction qui enleve les informations actuelles du cv quand la souris quitte le bouton "Informations"
const hideInformations = () => {
}

const openCard = (element) => {
}

const closeCard = (element) => {
}

const printOthersProjects = () => {
}



// Fonction qui reinitialise le # de l'url apres rechargement (celui ci change quand on clique sur le cv)
window.location.hash = "";