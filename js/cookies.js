
const cookieMenu = document.querySelector('.cookie-overlay');
const acceptButton = document.querySelector('.btn-acc');
const manageButton = document.querySelector('.btn-manage');
const body =  document.querySelector('body');


if (localStorage.getItem('cookieAccept') != 'true') {
  cookieMenu.classList.add('display');
  body.style.overflow = "hidden";
};


function cookieAccepted () {
  cookieMenu.classList.toggle('display');
  localStorage.setItem("cookieAccept", 'true');
  body.style.overflow = "auto";
  console.log('Button clicked');
}

function manageOpen() {
  cookieMenu.classList.toggle('display');
  body.style.overflow = "hidden";
}

manageButton.addEventListener('click', manageOpen);
acceptButton.addEventListener('click', cookieAccepted);


