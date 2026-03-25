<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria = $_POST['categoria'];

    if ($categoria) {

        $query = $conect->prepare("INSERT INTO categorias (nome) VALUES (:nome)");
        $query->bindValue(":nome", $categoria);

        if ($query->execute()) {
            header("Location: index.php");
            exit();
        } else {
            $erro = $query->errorInfo();
            echo "Erro ao salvar: " . $erro[2];
        }
    }
}
?>