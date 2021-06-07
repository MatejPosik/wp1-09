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
    <select id="cartype" name="model vozu">
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
    <input type="checkbox" id="displej" name="výbava[]" value="displej">
    <label for="displej">Palubní počítač</label><br>
    <input type="checkbox" id="blinkry" name="výbava[]" value="blinkry">
    <label for="blinkry">Blinkry (určitým řidičům by se hodilo)</label><br>
    <input type="checkbox" id="elwin" name="výbava[]" value="elwin">
    <label for="elwin">Elektrické okna</label><br>
    <input type="checkbox" id="turbo" name="výbava[]" value="turbo">
    <label for="turbo">Turbomýchadlo</label><br>
    <input type="checkbox" id="tempomat" name="výbava[]" value="tempomat">
    <label for="tempomat">Adaptivní tempomat</label><br>
    <input type="checkbox" id="klimatizace" name="výbava[]" value="klimatizace">
    <label for="klimatizace">Klimatizace</label><br>
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
    </form> 
    <br>
    <input type="submit" value="Odeslat formulář">
</body>
</html>