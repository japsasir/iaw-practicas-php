<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4: Tabla de multiplicar aleatoria del 1 al 10.</title>
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 4. Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio.
Utiliza un bucle for 

$numero hace uso de rand (random) para generar una integral aleatoria entre 1 y 10
$i aumenta en 1 cada iteración, creando una tabla de multiplicar.
$resultado será el número escogido al azar $numero multiplicado por i (1-10)

*/
        $numero = rand(1, 10);
        for ($i=0; $i <= 10 ; $i++) { 
            $resultado = $numero*$i;
             echo "<tr>";
            echo "<td>$numero*$i = $resultado</td>";
            echo "</tr>";
}
?>

  </body>
</html>