<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Loops - FOR</h1>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "O número $i é <strong>PAR</strong><br>";
            }

            if ($i % 2 != 0) {
                echo  "O numero $i é <strong>IMPAR</strong><br>";
            }
        }

        echo "Análise concluída!";
        ?>
    </main>
</body>

</html>