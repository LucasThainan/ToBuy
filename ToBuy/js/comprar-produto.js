const btnComprar = document.querySelector('#comprar-produto');
const divCompraFeita = document.querySelector('.compra-feita');

btnComprar.addEventListener('click', ()=> {
    divCompraFeita.style.visibility = 'visible';
});