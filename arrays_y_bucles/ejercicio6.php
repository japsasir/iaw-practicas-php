<?php
/* 6. Resuelva el ejercicio utilizando bucles while. */
# Definimos la constante "número de elementos"
define("num_elementos", 10);

$lista = array();
# Num elementos e inicialización del array.
$i=0;
while ($i < num_elementos) { 
    $lista[$i] = rand(1, 30);
    $i++;
}
# Se imprime el resultado.
$i=0;
while ($i < num_elementos) { 
    $suma = $suma + $lista[$i];
    echo $lista[$i];
    $i++;
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
echo "La temperatura minima es: $minima";
echo "<br>";
echo "La temperatura maxima es: $maxima";
?>