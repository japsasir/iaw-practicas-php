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

# Ponemos el contador de suma a 0
$suma = 0;
# Recorremos el array
foreach ($lista as $clave) {
    $suma += $clave;
}

# La cantidad de entradas se mide con COUNT
$numeros = count($lista);
# Alternativamente, podríamos definirlo como una constante. 
# define("numeros", 10);

# Hacemos una media.
$media = $suma / $numeros;

echo "En nuestro array tenemos $numeros entradas";
echo "<br>";
echo "Realizamos la operación $suma / $numeros";
echo "<br>";
echo "La media resultante es: $media";
?>
