<?php

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $atualizar = $_POST['atualizar'];

    $stmt=$conect->prepare("UPDATE categorias SET nome = :nome WHERE id = :id");

    $stmt->bindValue(':nome', $atualizar);
    $stmt->bindValue(':id', $id);

    if($stmt->execute()){
        header("location: index.php");
    }else{
        $erro = $stmt->errorInfo();
        echo "Erro ao salvar: " . $erro[2];
    }
}

