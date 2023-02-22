const textTab = ["Rayane Merlin", "Full Stack Developper", "Designer"];
var index = 1;

const element = document.querySelector(".subtitle > h2");

const typeWriter = (text, element, speed) => {
    let i = 0;
    index = (index + 1) % textTab.length;
    const type = () => {
      if (i < text.length) {
        element.innerHTML += text.charAt(i);
        i++;
        setTimeout(type, speed);
      } else {
          setTimeout(() => {
            erase(element, 100);
          }, 5500);
      }
    };
    type();
};

const erase = (element, speed) => {
    let i = element.innerHTML.length;
    const erase = () => {
        if (i > 0) {
            element.innerHTML = element.innerHTML.slice(0, i - 1);
            i--;
            setTimeout(erase, speed);
        } else {
            setTimeout(() => {
                typeWriter(textTab[index], element, 100);
            }, 500);
        }
    };
    erase();
};

setTimeout(() => {
    erase(element, 100);
}, 4000);