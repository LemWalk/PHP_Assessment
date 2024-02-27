
const cookieMenu = document.querySelector('.cookie-overlay');
const acceptButton = document.querySelector('.btn-acc');
const manageButton = document.querySelector('.btn-manage');


if (localStorage.getItem('cookieAccept') === 'true') {
  cookieMenu.classList.add('hidden');
  document.querySelector('body').style.overflow = "auto";
};


manageButton.addEventListener('click', manageOpen);
acceptButton.addEventListener('click', cookieAccepted);


function cookieAccepted () {
  cookieMenu.classList.toggle('hidden');
  localStorage.setItem("cookieAccept", "true");
  document.querySelector('body').style.overflow = "auto";
  console.log('Button clicked');
}

function manageOpen() {
  cookieMenu.classList.toggle('hidden');
  document.querySelector('body').style.overflow = "hidden";
}


//=============================================================


// const cookieMenu = document.querySelectorAll('.cookie-overlay');
// const acceptButtons = document.querySelectorAll('.btn-acc');
// const manageButtons = document.querySelectorAll('.btn-manage');

// if (localStorage.getItem('cookieAccept') === '1') {
//   cookieMenu.forEach(element => {
//     element.classList.add('hidden');
//   });
//   document.querySelector('body').style.overflow = "auto";
// };

// manageButtons.forEach(button => {
//   button.addEventListener('click', manageOpen);
// });

// acceptButtons.forEach(button => {
//   button.addEventListener('click', cookieAccepted);
// });

// function cookieAccepted () {
//   cookieMenu.forEach(element => {
//     element.classList.toggle('hidden');
//   });
//   localStorage.setItem("cookieAccept", "1");
//   document.querySelector('body').style.overflow = "auto";
// }

// function manageOpen() {
//   cookieMenu.forEach(element => {
//     element.classList.toggle('hidden');
//   });
//   document.querySelector('body').style.overflow = "hidden";
// }


//===========================================================


// const cookieMenu = document.querySelectorAll('.cookie-overlay');
// const acceptButtons = document.querySelectorAll('.btn-acc');
// const manageButtons = document.querySelectorAll('.btn-manage');

// if (localStorage.getItem('cookieAccept') === '1') {
//   cookieMenu.forEach(element => {
//     element.classList.add('hidden');
//   });
//   document.querySelector('body').style.overflow = "auto";
// };

// manageButtons.forEach(button => {
//   button.addEventListener('click', manageOpen);
// });

// acceptButtons.forEach(button => {
//   button.addEventListener('click', cookieAccepted);
// });

// function cookieAccepted () {
//   cookieMenu.forEach(element => {
//     element.classList.toggle('hidden');
//   });
//   localStorage.setItem("cookieAccept", "1");
//   document.querySelector('body').style.overflow = "auto";
// }

// function manageOpen() {
//   cookieMenu.forEach(element => {
//     element.classList.toggle('hidden');
//   });
//   document.querySelector('body').style.overflow = "hidden";
// }
