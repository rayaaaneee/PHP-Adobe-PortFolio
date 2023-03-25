const semesterPage = document.querySelector("#semesterPage");
const backgroundSemesterPage = semesterPage.querySelector(".background-semester-page");
const crossSemesterPage = semesterPage.querySelector(".cross-semester-page-container");
const semesterPageMainContainer = semesterPage.querySelector(".semester-page-main-container");
const semesterPageTitle = semesterPage.querySelector(".title-semester");
const semesterPageTitleImg = semesterPage.querySelector("#semesterPage .semester-page-title-img-container img");

const timeAnimationSemesterPage = 400;

const openSemesterPage = (arrows, event) => {
    semester = arrows.closest(".project");
    event.stopPropagation();

    let semesterHiddenInformations = semester.querySelector(".hidden-informations");
    let semesterTitle = semesterHiddenInformations.querySelector(".title-semester");
    let semesterTitleImg = semesterHiddenInformations.querySelector(".icon-white");

    semesterPageTitle.textContent = semesterTitle.textContent;

    semesterPageTitleImg.src = semesterTitleImg.textContent;

    semesterPage.classList.add("visible");

    setTimeout(() => {
        document.body.style.overflowY = "hidden";
        backgroundSemesterPage.style.opacity = 1;
        semesterPageMainContainer.classList.add("visible");
        crossSemesterPage.style.transform = "none";
    }, timeAnimationSemesterPage/2);
};

const closeSemesterPage = () => {
    crossSemesterPage.style.removeProperty("transform");
    backgroundSemesterPage.style.opacity = 0;
    semesterPageMainContainer.classList.remove("visible");
    setTimeout(() => {
        semesterPageTitleImg.src = "";
        semesterPageTitle.textContent = "";
        document.body.style.overflowY = "auto";
        semesterPage.classList.remove("visible");
    }, timeAnimationSemesterPage);
};
