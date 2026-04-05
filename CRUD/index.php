<?php
include 'conexao.php';

if (isset($_GET['delete_id'])) {
    $id_delete = $_GET['delete_id'];
    
    $stmt = $conect->prepare("DELETE FROM categorias WHERE id = :id ");
    $stmt->bindValue(':id', $id_delete);
    
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    }
}

$query = $conect->prepare("SELECT * FROM categorias");
$query->execute();
$lista = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <a href="create.php"><button> adicionar categoria </button></a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>botões</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $item['id']; ?>"><button>Editar</button></a>
                    <a href="index.php?delete_id=<?php echo $item['id']; ?> "onclick="return confirm('Deseja mesmo excluir?')">
                    <button>Excluir</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>