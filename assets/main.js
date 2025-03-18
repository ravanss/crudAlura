function openModal(recebeNome){
    //exibir modal
    document.getElementById('modal').style.display = 'block';
    document.getElementById('modal').style.opacity = '1';
    //receber nome
    let nome = recebeNome.innerHTML;
    return(
        div = document.getElementById('mensagem').innerHTML = `${nome}`
    );
}

function fecharModal(){
    document.getElementById('modal').style.display = 'none';
    document.getElementById('modal').style.opacity = '0';
}

function excluirFuncionario(){
    fecharModal();
}

function exibirId(valor){
    const link = document.getElementById('funcionarioExcluir');
    let id = valor;
    let url = 'http://localhost/projetos/Lista/src/delete.php?id=' + id;

    link.setAttribute('href', url);
    
    console.log(url);
    console.log(link);
}