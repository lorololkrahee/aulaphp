<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>MSCODE - Aula 2</h1>
        <?php
            const SUPER_GLOBAIS = 'Super Globais';

            echo "<h2> SUPER_GLOBAIS <h2>";

            $nome = $_GET('nome');
            $email = $_GET('email');
            $gosto = $_GET('gosto');

            echo "Olá $nome cujo email é  $email e q gosta de $gosto";
        ?>

    </main>
</body>
</body>
</html>