<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $submit = filter_input(INPUT_POST, 'submit');    
    if(isset($submit)) {
        echo "Formulář byl odeslán";
    
    
    $cartype = $_POST['modelvozu'];
    $fuel = $_POST['palivo'];
    $celvybava = $_POST['celvýbava']; 
    $color = $_POST['colortype'];  
       echo "Vybraný model: $cartype";?>
       <br>
       <?php echo "Vybraná barva: $color";?>
       <br>
       <?php foreach ($celvybava as $vybava){?>
        <?php echo "Přidaná výbava: $vybava";?> 
        <br>
        <?php    
       }
       }
     ?>
</body>
</html>