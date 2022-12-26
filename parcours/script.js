var points = document.querySelectorAll(".point");
var scrollValue = window.scrollY;
var height = window.innerHeight;

const onscroll = () => {
    points.forEach((point) => {
        // Si le point est au centre de l'écran
        if (point.offsetTop >= height/10 || point.offsetTop <= 9*height/10) {
            point.style.opacity = 1;      
        } else {
            point.style.opacity = 0;
        }
    });
    console.log(points[1].offsetTop);
}

document.addEventListener("scroll", onscroll);