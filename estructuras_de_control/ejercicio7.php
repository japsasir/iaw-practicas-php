<?php
/* 7. Escribe un script PHP que realice la simulación de lanzar dos dados
y muestre una imagen con los valores obtenidos en cada uno de los dados. */

$tirada1 = rand(1,6);
$tirada2 = rand(1,6);
echo "<h1>Tu tirada: $tirada1 y $tirada2</h1>";
echo "<img src='dados/$tirada1.png'>";
echo "<img src='dados/$tirada2.png'>";
?>