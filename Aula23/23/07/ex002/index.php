<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - DO WHILE</title>
</head>
<body>
    <?php
        $tentativa = 1;
        
        do {
            echo "<p> Tentando conectar... (Tentativa $tentativa)</p>";
            
            $tentativa++;
        } while ($tentativa <= 3);

        echo "<strong> Conectado com Sucesso! </strong>"
    
    ?>
    
</body>
</html>