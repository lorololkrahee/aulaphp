<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade => dias</title>
</head>
<body>
    <form method="post">
    <label for="idade">Quando você nasceu? </label>
    <br>
    <input type="date" id="born" name="born">
    <button type="submit">Enviar</button>
    </form>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
        if (isset($_POST["born"])) {
            $born = $_POST["born"];

            $date1 = new DateTIme($born);
            $date2 = new DateTime();
            
            $diference = $date1->diff($date2);



            echo "Sua idade em dias é: " . $diference->days;
        }
    ?>
</body>
</html>