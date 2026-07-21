<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prática</title>
</head>
<body>
    <h1>Conversão de Tipos</h1>
    <?php
        $idadeDigitada = '20';
        $moeda = '100.00';

        $idade = (int) $idadeDigitada;
        $valor = (int) $moeda;
        $idadeString = (string) $idade;
        $texto = 'só um texto';

        var_dump($idadeDigitada);
        echo "<br><br>";
        var_dump($idade);
        echo "<br><br>";
        var_dump($moeda);
        echo "<br><br>";
        var_dump($valor);
        echo "<br><br>";
        var_dump($idadeString);
        echo "<br><br>";
        var_dump($texto);

    ?>

</body>
</html>