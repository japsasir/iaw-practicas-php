<?php
/* 4. Escribe un script PHP que realice las siguientes acciones:

    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena.
    Buscar el valor mínimo de los valores del array.
    Muestre el valor mínimo que ha encontrado.

*/

$lista = array();

for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

// Paso 3 imprimir array
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}
# Ahora usamos min en vez de max
$minimo = min( $lista );

echo "<br>";

echo " El valor mínimo es: $minimo";
#¿¿Va aquí la segunda parte del ejercicio??
?>

