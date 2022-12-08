var points = document.querySelectorAll(".point");

const onscroll = () => {
    var scroll = window.scrollY;
    var height = window.innerHeight;
    var offset = 0.5;
    
    points.forEach((point) => {
        if (scroll > point.offsetTop - height * offset) {
        point.display = "none";
        } else {
        point.removeAttribute("style");
        }
    });
}

document.addEventListener("scroll", onscroll);