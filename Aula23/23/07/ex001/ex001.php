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
        <h1>Instalando quincy cybernetics</h1>
        <?php
            $progresso = 0;

            while($progresso < 100) {
                $progresso += 20;

                echo "<p> Baixando arquivos... $progresso% concluído </p>";

            }

            echo "<strong> Instalação concluída!";
        ?>
    </main>
    
</body>
</html>