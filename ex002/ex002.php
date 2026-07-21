<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>MSCODE - Condicional</h1>
            <?php
            $idadeDigitada = '20';

            $idade = (int) $idadeDigitada;

            $temIngresso = true;
            $amigoDoDono = false;
            $camarote = true;
            echo "<h2>Sistema de catraca</h2> <br>";

            if ($idade >= 18 && ($temIngresso || $amigoDoDono)) {
                $status = 'Acesso Vip LIberado';
                $corPulseira = 'Dourada';
                $catracaLiberada = true;
            } else if ($idade >= 18 && $temIngresso === false) {
                $status = 'Barrado na porta';
                $corPulseira = 'Nenhuma';
                $catracaLiberada = false;
            } else {
                $status = 'Acesso Negado';
                $corPulseira = 'Nenhuma';
                $catracaLIberada = false;
            }

            echo "<p>Status:  $status</p> <br>";
            if($status === 'Acesso Negado') {
                echo '<p>Volte para casa e vá jogar videogame</p> <br>';
            }
            

        ?>
    </main>
</body>

</html>