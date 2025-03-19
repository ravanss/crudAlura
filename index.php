<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>

    <?php
        require "src/conexao_db.php";
        $sql1 = "SELECT * FROM funcionarios";
        $statement = $pdo->query($sql1);
        $funcionarios = $statement->fetchAll(mode: PDO::FETCH_ASSOC);
        $title = "Lista de Funcionarios";
        $btn_title = "Adicionar Funcionario";
        $link_arquivo = "create.php"; 
        // Incluindo o header
        include "src/header.php";
    ?>
    <div class="container">
        <div class="col-12 col-sm-12">
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Excluir</th>                            
                        </tr>
                    </thead>
                    <tr <?php foreach ($funcionarios as $funcionario): ?>>
                        <td id="<?= $funcionario['id']; ?>"><?= $funcionario['id']; ?></td>
                        <td id="<?= $funcionario['nome']; ?>"><?= $funcionario['nome']; ?></td>
                        <td><?= $funcionario['email']; ?></td>
                        <td><?= $funcionario['categoria']; ?></td>
                        <td><a href="src/update.php?id=<?= $funcionario['id'];?>"><span><i class="fa-solid fa-pencil"></i></span></a></td>
                        <td><a href="#" onclick="exibirId(<?= $funcionario['id']; ?>), openModal(<?= $funcionario['nome']; ?>)"><span id="funcionarioId"><i class="fa-solid fa-trash"></i></span></a></td>
                    </tr <?php endforeach; ?>>
                </table>
            </div>
        </div>
    </div>
    <!---- Modal ---->
    <div class="Modalzao" id="modal">
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <h2>Excluir Funcionario</h2>
            <p>Tem certeza que deseja excluir o funcionario <span id="mensagem"></span>?</p>
            <a id="funcionarioExcluir" href="#" class="btn btn-danger" onclick="excluirFuncionario()">Excluir</a>
        </div>
    </div>
    <?php
        // Incluindo o footer
        include "src/footer.php";
    ?>
</body>
</html>