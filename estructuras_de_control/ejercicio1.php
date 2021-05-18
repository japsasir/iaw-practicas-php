<?php
/* 1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda. */
$tirada = rand (0,1);
if ($tirada == 1) {
    echo "<img src='monedas/CARA.png'>";
} else {
    echo "<img src='monedas/CRUZ.png'>";
}
?>