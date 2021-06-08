<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Poptávkový formulář autosalónu</h1>
    <form action="submit.php" method="post">
        <label for="cartype">Vyberte model Volkswagenu</label>
        <select id="cartype" name="modelvozu">
            <option value="passat">Passat B5</option>
            <option value="Caddy">Caddy 4M</option>
            <option value="Tiguan">Tiguan 2016</option>
            <option value="Golf">Golf mk4</option>
            <option value="Touareg">Touareg 2018</option>
            <option value="Polo">Polo 1998</option>
        </select>
        <br>
        <br>Vyberte palivo:
        <br>
        <input type="radio" id="natural" name="palivo" value="natural">
        <label for="fuel">Benzín</label><br>
        <input type="radio" id="diesel" name="palivo" value="diesel">
        <label for="diesel">Nafta</label><br>
        <input type="radio" id="plyn" name="palivo" value="plyn">
        <label for="plyn">Plyn</label><br>
        <input type="radio" id="electro" name="palivo" value="electro">
        <label for="electro">Electro</label><br>
        <input type="radio" id="hybrid" name="palivo" value="hybrid">
        <label for="hybrid">Hybrid</label><br>
        <br>
        <br>Přídavná výbava:
        <br>
        <input type="checkbox" id="vybava1" name="celvýbava[]" value="displej">
        <label for="vybava1">Palubní počítač</label><br>
        <input type="checkbox" id="vybava2" name="celvýbava[]" value="blinkry">
        <label for="vybava2">Blinkry (určitým řidičům by se hodilo)</label><br>
        <input type="checkbox" id="vybava3" name="celvýbava[]" value="elwin">
        <label for="vybava3">Elektrické okna</label><br>
        <input type="checkbox" id="vybava4" name="celvýbava[]" value="turbo">
        <label for="vybava4">Turbomýchadlo</label><br>
        <input type="checkbox" id="vybava5" name="celvýbava[]" value="tempomat">
        <label for="vybava5">Adaptivní tempomat</label><br>
        <input type="checkbox" id="vybava6" name="celvýbava[]" value="klimatizace">
        <label for="vybava6">Klimatizace</label><br>
        <br>
        <label for="color">Vyberte barvu vozidla</label>
        <select id="color" name="colortype">
            <option value="blue">Tmavě modrá</option>
            <option value="red">Červená</option>
            <option value="black">Černá</option>
            <option value="silver">Stříbrná</option>
            <option value="White">Bílá</option>
            <option value="green">Zelená</option>
        </select>
        <br>
        <input type="submit" value="Odeslat formulář" name="submit">
    </form>
    <br>

</body>

</html>