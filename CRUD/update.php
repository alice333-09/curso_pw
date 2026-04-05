<?php
$id = $_GET['id']; 
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
        <input type="text" name="atualizar">

        <button type="submit">Salvar</button>
        <a href="index.php"><button type="button">Cancelar</button></a>
    </form>
    
</body>
</html>

