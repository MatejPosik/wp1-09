<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulář byl odeslán</h1>
    <?php
    $cartype = filter_input(INPUT_POST, 'cartype');
    $fuel = filter_input(INPUT_POST, 'fuel');
    $vybava = filter_input(INPUT_POST, 'vybava');
    $color = filter_input(INPUT_POST, 'color');

    echo "Model: $cartype";
    echo "</br>";
    echo "Palivo: $fuel";
    echo "</br>";
    echo "Výbava: $vybava";
    echo "</br>";
    echo "Color: $color";
    ?>
</body>
</html>