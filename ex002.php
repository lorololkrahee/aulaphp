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
        <h1>MSCODE • Aula 02</h1>

        <?php
        // Constante
        const NOME_EMPRESA = 'PIZZARIA';

        // Variáveis
        $valorPizza = 90.00;
        $valorRefrigerante = 15.00;
        $totalAmigos = 4;
        $totalFatias = 10;

        // Cálculo da conta com 10% de gorjeta
        $contaTotal = ($valorPizza + $valorRefrigerante) * 1.10;

        // Valor por amigo
        $valorPorAmigo = $contaTotal / $totalAmigos;

        // Fatias por amigo
        $fatiasPorAmigo = intdiv($totalFatias, $totalAmigos);

        // Fatias que sobraram
        $fatiasQueSobraram = $totalFatias % $totalAmigos;

        // Exibição dos resultados
        echo "<h2>" . NOME_EMPRESA . "</h2>";

        echo "O valor total da conta é: R$ " . number_format($contaTotal, 2, ',', '.') . "<br>";

        echo "O valor que cada amigo deve pagar é: R$ " . number_format($valorPorAmigo, 2, ',', '.') . "<br>";

        echo "Cada amigo vai comer $fatiasPorAmigo fatias de pizza.<br>";

        echo "Sobraram $fatiasQueSobraram fatias de pizza.";
        ?>
    </main>
</body>
</html>