<?php

# Obtenemos los datos de la variable superglobal
$numero_de_monedas = $_GET["numero_de_monedas"];
$tipo_moneda = $_GET["tipo_moneda"];

if (empty($numero_de_monedas) || empty($tipo_moneda)) {
    header('Location: 4monedas.php');
    exit;
}

echo "<h2>Número de monedas: $numero_de_monedas</h2>";
echo "<h2>Tipo de moneda: $tipo_moneda</h2>";

// Declaramos un array
$lista = array();

// Inicializamos el array. El número de monedas vendrá dado por GET y determinará el número de lanzamientos.
for($i = 0; $i < $numero_de_monedas; $i++) {
    $lista[$i] = rand(0, 1);
}

// Mostramos las monedas según el tipo escogido.
switch ($tipo_moneda) {
    case "Tibudolares":
        for ($i = 0; $i < $numero_de_monedas; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='monedas/CARA.png'>";
            } else {
                echo "<img src='monedas/CRUZ.png'>";
            }
        }
        break;
    case "Euros":
        for ($i = 0; $i < $numero_de_monedas; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='monedas/eurocara.jpg'>";
            } else {
                echo "<img src='monedas/eurocruz.jpg'>";
            }
        }
        break;
}
?>