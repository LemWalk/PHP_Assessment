
// ====== accordion =========

const accordion = document.querySelector('.out-of-hours-title-box');
const accordion_content = document.querySelector('.out-of-hours-details');
const accordion_padding = document.querySelector('.business-contact-inner');

function display_details() {
    accordion_content.classList.toggle('active');
    accordion_padding.classList.toggle('active');
};

accordion.addEventListener('click', (display_details));

// ===== Success and Error Message Close =====


const btn_success_close = document.querySelector('.submit_message_close');
const btn_error_close = document.querySelector('.submit_message_close_error');
const successMessage = document.querySelector('.submit_message_box');
const errorMessage = document.querySelector('.submit-failed');


if(btn_success_close){
    btn_success_close.addEventListener('click', (closeSuccessMessage));
}

if( btn_error_close){
    btn_error_close.addEventListener('click', (closeSuccessMessage));  
}

function closeSuccessMessage() {
    successMessage.style.display = 'none';
}

function closeErrorMessage() {
    errorMessage.style.display = 'none';
}



