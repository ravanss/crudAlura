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
    ?>
    
    <div class="container">
        <div class="col-12 col-sm-12">
            <div class="row">
                <h1>Lista de funcionarios</h1>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Categoria</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    <tr <?php foreach ($funcionarios as $funcionario): ?>>
                        <td><?= $funcionario['nome']; ?></td>
                        <td><?= $funcionario['email']; ?></td>
                        <td><?= $funcionario['categoria']; ?></td>
                        <td><a href="#"><span><i class="fa-solid fa-pencil"></i></span></a></td>
                        <td><a href="#"><span><i class="fa-solid fa-xmark"></i></span></a></td>
                    </tr <?php endforeach; ?>>
                </table>
            </div>
            <div class="row">
                <form id="form-create" class="form-create">
                    <h2>Novo funcionario</h2>
                    <div class="form-group">
                        <input type="hidden" id="id" name="id">
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Categoria">
                        <button class="btn btn-primary" type="submit">Salvar novo funcionario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>