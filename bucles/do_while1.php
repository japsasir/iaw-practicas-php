<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio do_while: 1-10 con una fila y 10 columnas.</title>
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Tabla do_while</h1><table border="1">

<?php
/* DO_WHILE 1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. 
Utiliza un bucle while 

https://www.php.net/manual/es/control-structures.do.while.php
Parece idéntico a while salvo la sintaxis, pero do-while garantiza que la primera iteración siempre se cumple
aunque la condición sea falsa, a diferencia de while. Se puede ver en detalle en el enlace adjunto.

*/
$i = 1;
do {
    echo "<tr>
            <td>$i</td>
          </tr>";
    $i++;
} while ($i <= 10)
?>
  </body>
</html>