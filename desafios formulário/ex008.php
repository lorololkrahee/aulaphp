<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <?php
    $produto = 200;
    
    $desconto = 200 * 0.10;

    $valor = $produto - $desconto;

    echo "O valor final do produto ficou de: $valor <br>";  
    
    var_dump($valor);
    ?>
</body>
</html>