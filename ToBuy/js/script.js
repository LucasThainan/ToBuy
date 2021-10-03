const btnLogin = document.querySelector('#login');
const divErroLogin = document.querySelector('.mensagem-error');

function mostrarErro(){
    divErroLogin.style.display = 'block';
}

btnLogin.addEventListener('click', ()=> {
    setTimeout(mostrarErro, 500);
});