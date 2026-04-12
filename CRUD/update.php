<?php
    include 'conexao.php';

    $id = $_GET['id']; 

    $stmt = $conect->prepare("SELECT * FROM categorias WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount() == 0) { 
        die('Registro não encontrado');
    } else {
        $categoria = $stmt->fetch(PDO::FETCH_OBJ);
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar</title>
</head>
<body>
    <form action="storyU.php" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="name">Atualizar categotia</label>
        <input type="text" name="atualizar" value="<?php echo $categoria->nome; ?>">

        <button type="submit">Salvar</button>
        <a href="index.php"><button type="button">Cancelar</button></a>
    </form>
    
</body>
</html>

