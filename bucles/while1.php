<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio while: 1-10 con una fila y 10 columnas.</title>
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Tabla while</h1><table border="1">
<?php
/* WHILE_1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas.
 Utiliza un bucle while
https://josejuansanchez.org/iaw/practica-php/index.html#ejercicios  Sección 1.17.2

Usamos una versión modificada del ejemplo de while ofrecido en la guía con el estilo de tabla
utilizado en el ejercicio 1.

'Mientras que i sea menor que 10 muestra su valor en la tabla. Añade 1 a i en la siguiente iteración.'
Al no especificar cambio de tabla (tr) los datos se verán en una sol
*/
$i = 1;
while ($i <= 10){
    echo "<tr>
            <td>$i</td>
          </tr>";
    $i++;
}
?>
  </body>
</html>