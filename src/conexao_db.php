<?php
$host = 'localhost';
$dbname = 'lista';
$username = 'root';
$password = '';

// Conexão do banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>