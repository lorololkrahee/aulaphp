<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $guerreiro = [
            "As Nodt",
            5000,
            9000
        ];

        $danoCritico = ($guerreiro[1] + $guerreiro[2]) ** 2;

        echo "Nome: $guerreiro[0] <br>";
        echo "Vida: $guerreiro[1] <br>";
        echo "Força: $guerreiro[2] <br>";
        echo "Dano Crítico: $danoCritico";
    ?>
</body>

</html>