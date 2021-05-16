<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1: Tabla de una fila y 10 columnas.</title>
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas.
Utiliza un bucle for.

https://developer.mozilla.org/en-US/docs/Learn/HTML/Tables/Basics   Tablas básicas

Explicación:
Expresión del valor i, comprobación de que es menor que 10. 
Si procede, se imprime su valor y se suma 1 a i para la siguiente iteración.

Con respecto a 'td', por defecto se ubica todo en la misma fila.
*/
                for ($i = 1; $i <= 10; $i++){
                    echo "<td>$i</td>";
                }
            ?>

  </body>
</html>

