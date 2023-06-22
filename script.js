const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const forgetpassword = document.querySelector('.forget-link');
const createaccount = document.querySelector('.create-link');
const loginwith = document.querySelector('.media-options');


registerLink.onclick = () =>{
    wrapper.classList.add('deactive');
    wrapper.classList.add('active');
};

loginLink.onclick = () =>{
    wrapper.classList.remove('active');
    wrapper.classList.remove('deactive');
};

btnPopup.onclick = () =>{
    wrapper.classList.add('active-popup');
};

iconClose.onclick = () =>{
    wrapper.classList.remove('active-popup');
    wrapper.classList.remove('active');
    wrapper.classList.remove('active-google-facebook-remove');
    wrapper.classList.remove('deactive')
};

forgetpassword.onclick = () =>{
    wrapper.classList.add('active-forgetpassword');
    wrapper.classList.add('active');
    wrapper.classList.remove('deactive');
    wrapper.classList.add('active-google-facebook-remove')
   
};
createaccount.onclick = () =>{
    wrapper.classList.remove('active-forgetpassword');
    wrapper.classList.add('active');
    wrapper.classList.add('deactive');
    wrapper.classList.remove('active-google-facebook-remove');
   
};
