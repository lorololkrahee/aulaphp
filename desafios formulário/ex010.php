<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        const NOME_AGENCIA = "WANDENREICH_MEDIA";

        $marcas = [
            "Simonetti",
            "Samsung",
            "Red Bull"
        ];

        $totalInfluenciadores = 4;
        $receitaTotal = 10000;
        $taxa = 0.20;
        $caixasBrindes = 25;
        
        $valorAgencia = $receitaTotal * $taxa;

        $valorInfluenciador = ($receitaTotal - $valorAgencia) / $totalInfluenciadores;

        $brindesSobrando = $caixasBrindes % $totalInfluenciadores;

        $nota = 5; 
        
        $potencialViral = $nota ** 2;

        echo 'Lembrete: A $receitaTotal bruta não é o seu lucro final!';

        echo "<br><br>";

        echo "Relatório da agência: " . NOME_AGENCIA;

        echo "<br><br>";

        echo "Cada influenciador receberá R$ $valorInfluenciador";

        echo "<br>";

        echo "A agência recebeu R$ $valorAgencia";
        echo "<br>";

        echo "Sobraram $brindesSobrando caixas de brindes na agência.";
        echo "<br>";

        echo "Potencial Viral: $potencialViral";
        echo "<br><br>";

        var_dump($marcas);

    ?>
</body>

</html>