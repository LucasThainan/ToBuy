const inputFile = document.querySelector('#selecao-arquivo');
const inputNome = document.querySelector('#nome-produto');
const inputValor = document.querySelector('#valor');
const inputDesc = document.querySelector('#descricao');
const labelInputFile = document.querySelector('.selecao-arquivo');
const btnCadastrarProduto = document.querySelector('#cadastrar-produto');
const divProdutoCadastrado = document.querySelector('.produto-cadastrado');


function verifica() {
  let valorInput = inputFile.value;

  if (valorInput != "") {
      labelInputFile.textContent = "Arquivo selecionado!";
  }
    
}

function visivel(){
    divProdutoCadastrado.style.visibility = 'visible';
}

btnCadastrarProduto.addEventListener('click', () => {
    if(inputFile.value == "") {
        alert("Selecione uma imagem para prosseguir!");
    }else if(inputNome.value == "" || inputValor.value == "" || inputDesc.value == ""){
    }else{
        setTimeout(visivel, 500);
    }
});

