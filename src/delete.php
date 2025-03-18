<?php
    require "conexao_db.php";
    // Recebendo ID do funcionario para exclusao
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM funcionarios WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
?>
<div class="container">
    <div class="col-12 col-sm-12">
        <div class="row">
            <pre>
                <?php
                    $funcionario = $stmt->fetch();
                    print_r($funcionario);
                ?>
            </pre>
        </div>
    </div>
</div>