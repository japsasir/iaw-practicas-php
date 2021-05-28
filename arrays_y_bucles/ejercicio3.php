<?php
/* 3. Escribe un script PHP que realice las siguientes acciones:

-Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
-Una vez que ha inicializado el array, imprima todos los valores que almacena.
-Buscar el valor máximo de los valores del array.
-Muestre el valor máximo que ha encontrado.
*/

$lista = array();

# Num elementos.
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}
# Se imprime
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

# Elegimos el mayor de nuestro array.
$mayor = max($array);

echo "El numero mas grande es: $mayor";

?>
