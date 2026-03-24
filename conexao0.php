<?php

//Conexã9o
$conect= new PDO("mysql:host=localhost;dbname=pw","root","");

//Adção de valor na tabela
$query=$conect->prepare("INSERT INTO categorias (nome) VALUES (:nome)");

$query->bindValue(":nome","Alexia");

$query->execute();

//Atualização de valor na tabela
$query=$conect->prepare("UPDATE categorias SET nome = :nome WHERE id = :id");

$query->bindValue(":id",3);
$query->bindValue(":nome","Clarice");

$query->execute();

//Exclusão de valores
$ids = [4 ,5 ,7 ,8 ,9 ,10, 11, 12, 13];

$query=$conect->prepare("DELETE FROM categorias WHERE id = :id");

foreach ($ids as $id) {
    $query->bindValue(":id", $id);
    $query->execute();
}

?>