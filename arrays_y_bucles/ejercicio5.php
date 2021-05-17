<?php
/* 5. Resuelva el ejercicio utilizando bucles for. */
# Nota: El ejercicio 5 ya englobaba al cuatro, es el mismo código.
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