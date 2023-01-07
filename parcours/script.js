window.location.hash = "top";

var points = document.querySelectorAll(".point");
var height = window.innerHeight;
var bordersScreen = (height/20)*1;
var initialX = new Array();
var pointRotation = new Array();

const isInSide = (pointMarginTop) => {
    if(pointMarginTop <= bordersScreen || pointMarginTop >= height-(bordersScreen*2)) {
        return true;
    } else {
        return false;
    }
}

const distanceMiddle = (pointMarginTop) => {
    let distance = pointMarginTop - (height/2);
    return Math.abs(distance);
}

const getNewScale = (distanceMid) => {
    let min = 1;
    let max = 1.5;

    let scale = (distanceMid/(height))*(max-min)-min;
    scale = scale * 1.5;
    return scale;
}

const onscroll = () => {
    let pointMarginTop = null;
    points.forEach((point, index) => {
        let scrollValue = window.scrollY;
        pointMarginTop = point.offsetTop - scrollValue;
        if(isInSide(pointMarginTop)) {
            point.style.opacity = 0;
        } else {
            point.style.opacity = 1;
        }

        let distanceMid = distanceMiddle(pointMarginTop);

        // Plus le point est proche du milieu de l'écran, plus il est grand
        pointRotation[index] = -pointMarginTop/3;
        point.style.transform = "rotate("+pointRotation[index]+"deg) scale("+getNewScale(distanceMid)+")";
    });
    console.log();
} 

// Fonction qui permet de faire défiler les points
const moveProjects = (time = 300) => {
        let i = 0;

        let timeInterval = time;

        let intervalAnimation = setInterval(() => { 

            let project = projects[i];

            project.style.transition = "background-color 0.5s, box-shadow  0.1s, transform 3s, backdrop-filter 1s";

            let proba = Math.floor(Math.random() * 100);
            let lessOrMore = Math.floor(Math.random() * 3);

            let Y = null;
            let X = null;
            let scale = null;
            let rotate = null;

            scale = Math.floor(Math.random() * 2);
            if (proba < 65) {

                X = Math.floor(Math.random() * 3);
                rotate = Math.floor(Math.random() * 5);
                Y = (Math.floor(Math.random() * 2));

                if (lessOrMore == 0) {
                    Y = -Y;
                    scale = 1-(scale/100);
                    rotate = -rotate/4;
                } else {
                    scale = 1+(scale/100);
                    rotate = rotate/4;
                }

            } else {

                X = Math.floor(Math.random() * 2);
                rotate = Math.floor(Math.random() * 7);
                Y = (Math.floor(Math.random() * 4));

                if (lessOrMore == 0) {
                    Y = -Y;
                    scale = 1-(scale/100);
                    rotate = -rotate/7;
                } else {
                    scale = 1+(scale/100);
                    rotate = rotate/7;
                }
            }
            let newX = initialX[i]+X;
            translate = "translateX("+(newX)+"vw) translateY("+Y+"vh) scale("+scale+") rotate("+rotate+"deg)";
            project.style.transform = translate;

            if(i == projects.length-1) {
                clearInterval(intervalAnimation);
                i = 0;
            }
            i++;
    }, timeInterval);  
}

var main = () => {
    for (var i = 0; i < points.length; i++)  
        pointRotation.push(160);

    moveProjects(1);
    setInterval(moveProjects, 2000);
    document.addEventListener("scroll", onscroll);
}


var projects = document.querySelectorAll(".project");
projects.forEach((project, index) => {
    let nbr = Math.floor(Math.random() * 10);
    nbr =  Math.floor(Math.random() * 2) == 0 ? -nbr : nbr;
    nbr += 60;
    let rand = Math.floor(Math.random() * 20);
    initialX[index] = rand;
    project.style.transform = "translateX("+rand+"vw)";
    if(index == projects.length-1) {
        main();
    }
});