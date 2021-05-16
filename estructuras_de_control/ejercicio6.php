<?php
/* Escriba un script PHP que realice la simulación de lanzar un dado
y muestre una imagen con un valor aleatorio enre 1 y 6.
Resuelva el ejercicio sin utilizar las estructuras de control if - else y switch.

En este punto me veo forzado a crear una carpeta de imagenes locales para elegir imagen segun el resultado.
Los dados están nombrados del 1 al 6 con extensión png, automatizando su referencia según la tirada */

$variable = rand(1,6);
echo "<h1>Tu tirada: $variable</h1>";
echo "<img src='dados/$variable.png'>";
?>