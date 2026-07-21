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
        <h1>MSCODE - Condicional switch</h1>
         <?php
            $opcaoEscolhida = (int) '2';

            echo "<h2>MSCODE GAMES <br> </h2>";

            switch($opcaoEscolhida) {
                case 1 ; echo "Iniciando um novo jogo... <br>";
                break;

            case 2;
                echo "<p>&#9881 Abrindo o painel de configuração...</p>";
                break;

            case 3;
                echo "<p>Carregando a tela de conquistas...</p>";
                break;
            
            default;
                echo "<p>Opção Inválida</p>";
            }
        ?>
    </main>
</body>

</html>