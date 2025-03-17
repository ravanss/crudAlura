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
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Excluir</th>                            
                        </tr>
                    </thead>
                    <tr <?php foreach ($funcionarios as $funcionario): ?>>
                        <td><?= $funcionario['nome']; ?></td>
                        <td><?= $funcionario['email']; ?></td>
                        <td><?= $funcionario['categoria']; ?></td>
                        <td><a href="#"><span><i class="fa-solid fa-pencil"></i></span></a></td>
                        <td><a href="#"><span><i class="fa-solid fa-xmark"></i></span></a></td>
                    </tr <?php endforeach; ?>>
                </table>
            </div>
        </div>
    </div>
    <?php
        // Incluindo o footer
        include "src/footer.php";
    ?>
</body>
</html>