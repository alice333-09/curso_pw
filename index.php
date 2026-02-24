<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <?php for($i=1;$i<75;$i++){?>
            <div>
                <label for="nome<?php echo $i?>">Aluno<?php echo $i?></label>
                <input type="text" name="nome[]" id="nome1">
            </div>
            <div>
                <label for="nome<?php echo $i?>">idade <?php echo $i?></label>
                <input type="text" name="idade[]" id="idade<?php echo $i ?>">
            </div>
        <?php } ?>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>