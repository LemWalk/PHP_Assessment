
const navbar = document.querySelector('.nav-container');
let prevScroll = window.scrollY;
const navbarHeight = navbar.offsetHeight;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll > prevScroll && currentScroll > navbarHeight) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
    prevScroll = currentScroll;
});

navbar.addEventListener('mouseover', () => {
    navbar.classList.remove('sticky');
});

