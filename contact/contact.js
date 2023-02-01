const validateForm = () => {                                    

    var name = document.forms["myForm"]["name"];               
    var email = document.forms["myForm"]["email"];    
    var message = document.forms["myForm"]["message"];   
   
    if (name.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Veuillez entrez un nom valide";  
        name.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    } 
   
    if (message.value == "")                           
    {
        document.getElementById('errormsg').innerHTML="Veuillez entrez un message valide"; 
        message.focus(); 
        return false; 
    }else{
        document.getElementById('errormsg').innerHTML="";  
    }
   
    return true; 
}

const nbCharsLeftContainer = document.querySelector('.nb-chars-left');
const getNbCharsLeft = (element) => {
    let nbCharsLeft = 300 - element.value.length;
    nbCharsLeftContainer.querySelector('.to-modify').innerHTML = nbCharsLeft;
}

const appearCharsLeft = () => {
    nbCharsLeftContainer.style.opacity = 1;
}

const disappearCharsLeft = () => {
    nbCharsLeftContainer.style.removeProperty('opacity');
}

const initNbCharsLeft = () => {
    // On change le texte quand l'opacity du conteneur est à 0
    setTimeout(() => {
        nbCharsLeftContainer.querySelector('.to-modify').innerHTML = 300;
    }, 400);
}