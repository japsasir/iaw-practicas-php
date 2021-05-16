<?php
/* 4. Escribe un script PHP que realice la simulación de lanzar un dado
y muestre una imagen con un valor aleatorio enre 1 y 6.
Resuelva el ejercicio utilizando la estructura de control if - else.

Nota: Usadas imagenes más pequeñas.*/
$variable = rand(1,6);
echo "Tu tirada: $variable";
echo "<br>";
if ($variable == 1) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/D6_1.svg/103px-D6_1.svg.png'>";
} elseif ($variable == 2) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/D6_2.svg/103px-D6_2.svg.png'>";
} elseif ($variable == 3) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/D6_3.svg/103px-D6_3.svg.png'>";
} elseif ($variable == 4) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/D6_4.svg/103px-D6_4.svg.png'>";
} elseif ($variable == 5) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/D6_5.svg/103px-D6_5.svg.png'>";
} else {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/D6_6.svg/103px-D6_6.svg.png'>";
}
?>