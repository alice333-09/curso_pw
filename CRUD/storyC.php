<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria = $_POST['categoria'];

    $stmt = $conect->prepare("INSERT INTO categorias (nome) VALUES (:nome)");

    $stmt->bindValue(":nome", $categoria);
    
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        $erro = $stmt->errorInfo();
        echo "Erro ao salvar: " . $erro[2];
    }
}
?>