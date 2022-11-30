/* Recuperer une variable au sein du fichier loader/loader.js */
/* import * as myModule from './loader/loader.js';
var time = myModule.time; */

maxTime = 2200;

//Suppression du loader au bout de MaxTime millisecondes
setTimeout(changeIndex,maxTime+600);

// Suppression du background de base pour cacher la page au tout début
setTimeout(function (){
    document.getElementById("startbackground").remove();
},maxTime/1.6)

// Autoriser le scroll a peine avant le chargement complet de la page
setTimeout(function (){
    document.body.style.overflow = "auto";
},maxTime/1.1)

// Suppression de l'iframe de base pour cacher la page au tout début
function changeIndex(){
    var loader = document.getElementById("loader");
    loader.remove();
}