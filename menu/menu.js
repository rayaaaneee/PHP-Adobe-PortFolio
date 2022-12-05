function change(index){
    changeColor(index);
    changeDisplay(index);
}

function unchange(index){
    unchangeColor(index);
    unchangeDisplay(index);
}

function changeColor(index){
    var text = document.querySelector('#text'+index);
    text.style.color="rgb(239, 195, 153)";
}

function unchangeColor(index){
    var text = document.querySelector('#text'+index);
    text.style.color="black";
}

function changeDisplay(index){
    var bloc = document.querySelector('.s'+index);
    bloc.style.display="relative";
}

function unchangeDisplay(index){
    var bloc = document.querySelector('.s'+index);
    bloc.style.display="block";
}