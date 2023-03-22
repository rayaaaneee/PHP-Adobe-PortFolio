const semesterPage = document.querySelector("#semesterPage");
const backgroundSemesterPage = semesterPage.querySelector(".background-semester-page");
const crossSemesterPage = semesterPage.querySelector(".cross-semester-page");

const timeAnimationSemesterPage = 200;

const openSemesterPage = (semester, event) => {
    event.stopPropagation();
    semesterPage.classList.add("visible");
    document.body.style.overflowY = "hidden";

    setTimeout(() => {
        backgroundSemesterPage.style.opacity = 1;
    }, timeAnimationSemesterPage/2);
};

const closeSemesterPage = () => {
    backgroundSemesterPage.style.opacity = 0;
    setTimeout(() => {
        document.body.style.overflowY = "auto";
        semesterPage.classList.remove("visible");
    }, timeAnimationSemesterPage);
};
