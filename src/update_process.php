<?php
include "conexao_db.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];

try{
    $stmt = $pdo->prepare("UPDATE funcionarios SET nome = :nome, email = :email, categoria = :categoria WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->execute();
    header("Location: ../index.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}