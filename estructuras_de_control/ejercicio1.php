<?php
/* 1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda. */
$tirada = rand (0,1);
if ($tirada == 1) {
    echo "<img src='https://www.random.org/coins/faces/60-eur/ireland-1euro/reverse.jpg'>";
} else {
    echo "<img src='https://www.random.org/coins/faces/60-eur/ireland-1euro/obverse.jpg'>";
}
?>