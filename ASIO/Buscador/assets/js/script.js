window.alert("Bienvenido a nuestro sitio web");


const openl = document.getElementsByClassName('register🖊');
const openr = document.getElementsByClassName('Log-in')
const login = document.getElementById('login');
const register = document.getElementById('register');


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


