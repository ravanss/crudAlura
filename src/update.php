<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="../assets/style.css" rel="stylesheet">
</head>
<body>
    <?php
        require "conexao_db.php";
        $title = "Editar Funcionario";
        $btn_title = "Voltar para home"; 
        $link_arquivo = "../index.php"; 
        // Incluindo o header
        include "../header.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM funcionarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $funcionario = $stmt->fetch();

    ?>
    <div class="container">
        <div class="col-12 col-sm-12">
            <div class="row">
                <form id="form-update" class="form-update" method="POST" action="update_process.php">
                    <h2>Alterar um novo funcionario</h2>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $funcionario['nome']; ?>" required>
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $funcionario['email']; ?>" require>
                        <input type="text" id="categoria" name="categoria" class="form-control" value="<?php echo $funcionario['categoria']; ?>" require>
                        <button class="btn btn-primary" type="submit">Atualizar funcionario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        // Incluindo o footer
        include "../footer.php";
    ?>
</body>
</html>