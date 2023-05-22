
class scrollProjects {

    gap;

    #projectChevronsContainer = document.querySelector('.projects-chevrons-container');

    #chevrons = {
        left : this.#projectChevronsContainer.querySelector('.chevron.left'),
        right : this.#projectChevronsContainer.querySelector('.chevron.right')
    };

    #projectsContainer = this.#projectChevronsContainer.querySelector('.projects');

    constructor() {
        this.#chevrons.left.addEventListener('click', this.#scrollLeft);
        this.#chevrons.right.addEventListener('click', this.#scrollRight);
        this.gap = this.initGap();
        window.addEventListener('resize', () => {
            this.gap = this.initGap();
        });
    }

    initGap = () => {
        let gap = this.#projectsContainer.querySelector('.main-container').offsetWidth;
        let rowGap = window.getComputedStyle(this.#projectsContainer).getPropertyValue('row-gap');
        // On divise par 2 car la marge est appliquée à la fois à gauche et à droite
        rowGap = parseInt(rowGap) / 2;
        return gap + rowGap;
    }

    #scrollLeft = () => {
        this.#projectsContainer.scrollLeft -= this.gap;
        if (this.#projectsContainer.scrollLeft === 0) {
            console.log('alert');
            this.#chevrons.left.classList.add('alert');
            setTimeout(() => {
                this.#chevrons.left.classList.remove('alert');
            }, 400);
        }
    }

    #scrollRight = () => {
        this.#projectsContainer.scrollLeft += this.gap;
        if (this.#projectsContainer.scrollLeft === this.#projectsContainer.scrollWidth - this.#projectsContainer.offsetWidth) {
            console.log('alert');
            this.#chevrons.right.classList.add('alert');
            setTimeout(() => {
                this.#chevrons.right.classList.remove('alert');
            }, 400);
        }
    }
}

new scrollProjects();