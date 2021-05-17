<?php
/* 1. Escribe un script PHP que realice las siguientes acciones:

    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprimir todos los valores que almacena. */


$lista = array();
# Bucle for del 1 al 10. [i] indica la posición dentro del array, siendo el contenido rand (1,30) 
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

# Se muestra dicho resultado antes de empezar la siguiente iteración.
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}
?>