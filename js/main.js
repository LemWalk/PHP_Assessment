
//========= Burger menu & Side menu functions =========

const burgerMenu = document.querySelector('.burger-menu');
const sideMenu = document.querySelector('.side-menu');
const overlay = document.querySelector('.overlay');
const containerOuter = document.querySelector('.container-outer');
const sideMenuActive = document.querySelector('.side-menu.active');
const containerOuterActive = document.querySelector('.container-outer.active');

burgerMenu.addEventListener('click', () => {
burgerMenu.classList.toggle('active');
sideMenu.classList.toggle('active');
containerOuter.classList.toggle('active');
overlay.classList.toggle('active');
document.querySelector('html').style.overflowY = 'hidden';
containerOuter.style.overflowY = 'auto';
containerOuter.style.height = '100vh';
});

overlay.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    sideMenu.classList.toggle('active');
    containerOuter.classList.toggle('active');
    overlay.classList.toggle('active');
    document.querySelector('html').style.overflowY = 'auto';
    containerOuter.style.height = 'auto';
});


//======== Tick Box =======================

const checkbox = document.querySelector('.checkbox');
const tickbox = document.querySelector('.custom-tickbox');
const formText = document.querySelector('.form-text')


function check_box() {
    tickbox.classList.toggle('active');
}

checkbox.addEventListener('click', check_box);

// formText.addEventListener('click', check_box);

//=========== Tick box - 2 ======================

const checkbox2 = document.querySelector('.checkbox-2');
const tickbox2 = document.querySelector('.custom-tickbox-2');
const formText2 = document.querySelector('.form-text-2')


function check_box2() {
    tickbox2.classList.toggle('active');
}

checkbox2.addEventListener('click', check_box2);

formText2.addEventListener('click', check_box2);
