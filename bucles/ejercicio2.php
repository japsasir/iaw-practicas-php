<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2: Tabla de una columna y 10 filas.</title>
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 2. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una columna y 10 filas.
Utiliza un bucle for.

https://developer.mozilla.org/en-US/docs/Learn/HTML/Tables/Basics   Tablas básicas

td= Table data
tr= Table row

Para cada iteración de nuestro bucle se crea una fila (tr) con un único valor (i)
*/
    for ($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo "<td>$i</td>";
            echo "</tr>";
         }
     ?>

  </body>
</html>