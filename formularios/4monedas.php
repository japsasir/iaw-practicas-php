<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamiento de monedas</title>
</head>
<body>
    <p> Elige el número de lanzamientos y el tipo de moneda </p>
    <form action="4recibe.php" method="GET">
        <input type="number" id="numero_de_monedas" name="numero_de_monedas">
        <select name="tipo_moneda">
            <option value="Tibudolares">Tibudolares</option>
            <option value="Euros">Euros</option>
        </select>
        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</htm