<?php
/* 9. Escribe un script PHP que permita ordenar el siguiente array asociativo:

array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")

    De forma ascendente ordenado por valor.
    De forma ascendente ordenado por clave.
    De forma descendente ordenado por valor.
    De forma descendetne ordenado por clave.
*/
# Indice: Ordena los valores por defecto.
# Clave: La clave especificada para cada valor.(Ant=31, Mar=28, Juan=29, Pepe=27)

$lista = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
echo "<b>Orden de lista</b>";
echo "<br>";
echo "Antonio, María, Juan, Pepe";
echo "<br>";


# Ordenar array de menor a mayor por el valor
echo "<b>Ordenar de menor a mayor por valor</b>";
echo "<br>";

# Asort ordena un array pero mantiene la asociación de índices. https://www.php.net/manual/es/function.asort.php
asort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

# Ordenar el array de mayor a menor por el valor

echo "<b>Ordenar de mayor a menor por valor</b>";
echo "<br>";

# Añadimos la R de reverse esta vez
arsort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

# Ordenar el array de menor a mayor por la clave

echo "<b>Ordenar de menor a mayor por clave</b>";
echo "<br>";
# Usamos keysort https://www.php.net/manual/es/function.ksort.php
ksort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

# Ordenar el array de mayor a menor por la clave

echo "<b>Ordenar de mayor a menor por clave</b>";
echo "<br>";
# Keysort con reverse
krsort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}
?>