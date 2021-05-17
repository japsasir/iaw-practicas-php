<?php
/* 4. Escribe un script PHP que realice las siguientes acciones:

    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena.
    Buscar el valor mínimo de los valores del array.
    Muestre el valor mínimo que ha encontrado.

    4. (Segunda parte) Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

    Calcular la media.
    Calcular el valor máximo.
    Calcular el valor mínimo.
    Mostrar todos los valores calculados.

*/

$lista = array();

# Num elementos.
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}
# Se imprime.
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

# Ponemos el contador de suma a 0
$suma = 0;
# Recorremos el array
foreach ($lista as $clave) {
    $suma += $clave;
    $maxima = max($lista);
    $minima = min($lista);
}

# La cantidad de entradas se mide con COUNT
$numeros = count($lista);
# Alternativamente, podríamos definirlo como una constante. 
# define("numeros", 10);

# Hacemos una media.
$media = $suma / $numeros;
echo "La temperatura media resultante es: $media ($suma / $numeros)";
echo "<br>";
echo "La temperatura minima fue: $minima";
echo "<br>";
echo "La temperatura maxima es: $maxima";
?>

