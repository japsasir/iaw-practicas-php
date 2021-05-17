<?php
/* 5. Resuelva el ejercicio utilizando bucles while. */
# Definimos la constante "número de elementos"
define("num_elementos", 10);
$lista = array();
# Num elementos e inicialización del array.
$i = 0;
do  { 
    $lista[$i] = rand(1, 30);
    $i++;
} while ($i < num_elementos);

# Ponemos el contador de suma a 0
$suma = 0;

# Se imprime el resultado.
$i = 0;
do  {
    $suma = $suma + $lista[$i];
    echo $lista[$i];
    $i++;
    echo "<br>";
} while ($i < num_elementos);

# La cantidad de entradas se mide con COUNT
$numeros = count($lista);
$maxima = max($lista);
$minima = min($lista);

$media = $suma / num_elementos;
echo "La temperatura media resultante es: $media ($suma / $numeros)";
echo "<br>";
echo "La temperatura minima es: $minima";
echo "<br>";
echo "La temperatura maxima es: $maxima";
?>