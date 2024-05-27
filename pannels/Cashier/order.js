let openshopping = document.querySelector('.shopping');
let confirmorder = document.querySelector('.confirmorder');
let list = document.querySelector('.listorder');
let body = document .querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
  
openshopping.addEventListenerq('click', ()=>{
    body.classList.add('active');
})