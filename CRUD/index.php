<?php
include 'conexao.php';

$query = $conect->prepare("SELECT * FROM categorias");
$query->execute();
$lista = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <a href="create.php"><button> criar </button></a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $linha): ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td>
                    <a><button>Editar</button></a>
                    <a><button>Excluir</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>