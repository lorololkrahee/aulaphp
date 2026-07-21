<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reais -> Dólar</title>
</head>
<body>
    <form method="post">
    <label for="reais">Digite o Valor para calcular</label>
    <br>
    <input type="text" id="reais" name="reais">Reais
    <button type="submit">Enviar</button>
    </form>
    <?php 
    $reais = $_POST["reais"];

    $dolar = $reais / 5.11;

    echo "O valor digitado em Dólar é de: " . $dolar
    ?>
</body>
</html>