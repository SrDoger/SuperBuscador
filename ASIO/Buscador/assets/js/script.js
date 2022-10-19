const openl = document.querySelector('.register🖊');
const openr =document.querySelector('.Log-in')
const login =document.querySelector('#login');
const register = document.querySelector('#register');


openl.addEventListener('click',(e)=>{
  e.preventDefault();
  login.classList.add('show');
  register.classList.remove('show');
});

openr.addEventListener('click',(e)=>{
  e.preventDefault();
  login.classList.remove('show');
  register.classList.add('show');
});


