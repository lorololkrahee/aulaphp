<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php
            const NOME_EMPRESA = "SIMONETTI";

            $nome = "Lorenzo";

            $cafe = 150.67;
            $leite = 67.49;
            $gorjeta = 1.67;

            $subTotal = $cafe + $leite;
            $desconto = 0.15;

            $total = $subTotal - $desconto + $gorjeta;
            echo "<h2> Resumo da compra</h2>";
            echo "O subtotal da compra é: R$ $subTotal 
            <br>";
            echo "O valor do frete é: R$ $gorjeta <br>!";
            echo "O valo do desconto é: R$ $desconto <br>";
            echo "O valor total da compra é: R$ $total <br>";
    ?>
    </main>
</body>
</html>