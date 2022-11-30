// Fonction qui colorie la barre quand on passe la souris sur le container
function colorBar(index){
    //Agrandir la barre
    const barre = document.querySelector("#horizontal-bar"+index);
    barre.style.transition = "all 0.3s";
    barre.style.border = "2px solid rgb(239, 222, 144)"; 
}

// Fonction inverse qui décolore la barre quand la souris quitte le container
function uncolorBar(index){
    //Réduire la barre
    const barre = document.querySelector("#horizontal-bar"+index);
    barre.style.transition = "all 0.3s";
    barre.style.border="2px solid rgb(0,0,0)";
}

// Fonction qui prend en paramètre le numéro du projet et qui agrandit l'image reliée à celle ci
function growImg(index){
    //Agrandir l'image
    const img = document.querySelector(".img"+index);
    img.style.scale = "1.2";
    img.style.transition = "all 0.2s";
}

// Fonction inverse qui réduit l'image quand la souris quitte le container
function shrinkImg(index){
    //Réduire l'image
    const img = document.querySelector(".img"+index);
    img.style.scale = "1";
    img.style.transition = "all 0.2s";
}

// Fonction qui affiche le cv en plein écran quand on clique sur l'img du cv
var isVisible = false;
var container = null;
function openPage(){
    isVisible = true;
    container = document.querySelector("#framecv");
    container.id = "framecv-visible";
    document.body.removeAttribute("style");
    document.body.style.overflowY = "hidden";
}

// Fonction qui refait disparaitre le cv quand on clique sur la croix
function closePage(){
    isVisible = false;
/*     container.style.overflowY = "hidden";
    document.body.style.overflowY = "scroll"; */
    container.id = "framecv";
    document.body.removeAttribute("style");
    document.body.style.overflowY = "scroll";
}

// Fonction qui imprime envoie vers la page d'impression quand on clique sur le bouton Print
function printPDF(){
    var pdf = window.open("files/CV_Rayane_Merlin.pdf", "_blank");
    pdf.print();
}

/* Fonction qui affiche les informatios actuelles du cv ("nom, taille, date de création, etc") quand 
on hover bouton "Informations" */
function showInformations(){
}

// Fonction qui enleve les informations actuelles du cv quand la souris quitte le bouton "Informations"
function hideInformations(){
}

// Fonction qui reinitialise le # de l'url apres rechargement (celui ci change quand on clique sur le cv)
window.location.hash = "";