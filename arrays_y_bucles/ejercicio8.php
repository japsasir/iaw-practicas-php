<?php
/* 8. Escribe un script PHP que sobre un array de temperaturas
realice las siguientes operaciones:

-Mostrar el listado ordenado de mayor a menor.
-Mostrar el listado ordenado de menor a mayor.

El array de temperaturas lo vamos a generar con números aleatorios.
El número de elementos del array será especificado mediante un formulario
y los valores aletorios generados estarán entre 1 y 30. */

# Definimos la constante "número de elementos"
define("num_elementos", 10);
$lista = array();
# Num elementos e inicialización del array.
$i = 0;
do  { 
    $lista[$i] = rand(1, 30);
    $i++;
} while ($i < num_elementos);

# Tras ordenar la lista, imprimes el resultado.
sort ($lista);
echo "Este array está ordenado de menor a mayor:";
echo "<br>";
$i = 0;
do  {
    $suma = $suma + $lista[$i];
    echo $lista[$i];
    $i++;
    echo "<br>";
} while ($i < num_elementos);

# Con reverse-sort podemos ordenar en el orden inverso.
rsort($lista);
echo "Este array está ordenado de mayor a menor":;
echo "<br>";
$i = 0;
do  {
    $suma = $suma + $lista[$i];
    echo $lista[$i];
    $i++;
    echo "<br>";
} while ($i < num_elementos);
?>