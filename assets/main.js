// Autor: Saulo Pedro da Silva
// Data: 17/03/2025

// Função para abrir o modal, e receber o nome do funcionario que será excluido
function openModal(recebeNome){
    //exibir modal
    document.getElementById('modal').style.display = 'block';
    document.getElementById('modal').style.opacity = '1';
    //receber nome que aparece no modal
    let nome = recebeNome.innerHTML;
    return(
        div = document.getElementById('mensagem').innerHTML = `${nome}`
    );
}

// Função para fechar o modal
function fecharModal(){
    document.getElementById('modal').style.display = 'none';
    document.getElementById('modal').style.opacity = '0';
}

// Ao clicar no botão de excluir, essa função chama á fecharModal() para ocorrer a exclusao do funcionario
function excluirFuncionario(){
    fecharModal();
}

// Função que recupera o id do funcionario que será excluido, e passar para a url para o arquivo delete.php
function exibirId(valor){
    const link = document.getElementById('funcionarioExcluir');
    let id = valor;
    let url = 'http://localhost/projetos/Lista/src/delete.php?id=' + id;
    link.setAttribute('href', url);
}