const inputNome = document.querySelector('#nome-produto');
const inputValor = document.querySelector('#valor');
const inputDesc = document.querySelector('#descricao');
const btnEditar = document.querySelector('#edicao');
const divEditado = document.querySelector('.editado');

function editou(){
    divEditado.style.visibility = 'visible';
}

btnEditar.addEventListener('click', ()=> {
    if(inputNome.value == "" || inputValor.value == "" || inputDesc.value == ""){
    }else{
        setTimeout(editou, 500);
    }
});