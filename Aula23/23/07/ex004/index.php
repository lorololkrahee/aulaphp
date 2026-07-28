<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horu eacho da </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>PARA CADA STERNRITTER FAÇA TAL AÇÃO</h1>
        <?php
        $carrinho = [
            "NotebookGamer" => 4500.00,
            "MouseSemFio" => 120.00,
            "TecladoMEcanico" => 350.00,
            "Monitor" => 900.00,
        ];

        $totalcompra = 0;

        echo "<h3>Itens adicionados </h3>";

        echo "<ul>";

        foreach ($carrinho as $produto => $preco) {
            echo "<li> $produto R$ $preco </li> ";

            $totalCompra = $totalCompra + $preco;
        }

        echo "<strong> Total a Pagar: $totalCompra</strong>";
        ?>
    </main>
</body>

</html>