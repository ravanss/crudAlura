<?php
include "conexao_db.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];

try{
    $stmt = $pdo->prepare(("INSERT INTO funcionarios (nome, email, categoria) VALUES (:nome, :email, :categoria)"));
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->execute();
    header("Location: ../index.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

