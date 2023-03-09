
export default class GeneralPage{
    constructor() {
        console.log('hello world')
        // this.TEST()
    }

    TEST() {
        const nav = document.querySelector('.navbar');
        const header = document.querySelector('#pippo');
        const navHeight = nav.getBoundingClientRect().height;
        console.log(nav, header, navHeight)
        const stickyNav = function ([entry]) {
            console.log(entry)
            entry.isIntersecting === true && nav.classList.remove('sticky');
            entry.isIntersecting === false && nav.classList.add('sticky');
        };
        const observe = new IntersectionObserver(stickyNav, {
            root: null,
            threshold: 0,
            rootMargin: `-${navHeight}px`,
        });
        observe.observe(header);
    }
}