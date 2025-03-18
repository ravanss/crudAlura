<?php
    require "conexao_db.php";
    // Recebendo ID do funcionario para exclusao
    $id = $_GET['id'];
    // Deletando funcionario
    try {
        $stmt = $pdo->prepare("DELETE FROM funcionarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        header('Location: ../index.php');
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

?>