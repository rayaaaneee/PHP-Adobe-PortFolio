const semesterPage = document.querySelector("#semesterPage");
const backgroundSemesterPage = semesterPage.querySelector(".background-semester-page");
const crossSemesterPage = semesterPage.querySelector(".cross-semester-page-container");

const timeAnimationSemesterPage = 400;

const openSemesterPage = (semester, event) => {
    event.stopPropagation();
    semesterPage.classList.add("visible");

    setTimeout(() => {
        document.body.style.overflowY = "hidden";
        backgroundSemesterPage.style.opacity = 1;
        crossSemesterPage.style.transform = "none";
    }, timeAnimationSemesterPage/2);
};

const closeSemesterPage = () => {
    crossSemesterPage.style.removeProperty("transform");
    backgroundSemesterPage.style.opacity = 0;
    setTimeout(() => {
        document.body.style.overflowY = "auto";
        semesterPage.classList.remove("visible");
    }, timeAnimationSemesterPage);
};
