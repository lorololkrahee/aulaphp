<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        const EMPRESA = "MSCODE";

        $equipamentos = [
            "Notebook",
            "Mouse",
            "Mochila"
        ];
        echo "A " . EMPRESA . " fornece: " . $equipamentos[0];
    ?>
</body>
</html>