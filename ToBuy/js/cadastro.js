const btnCadastro = document.querySelector('#cadastro');
const divErroCadastro = document.querySelector('.error-mensagem');

function erroMostrar(){
    divErroCadastro.style.display = 'block';
}

btnCadastro.addEventListener('click', ()=> {
    setTimeout(erroMostrar, 500);
});