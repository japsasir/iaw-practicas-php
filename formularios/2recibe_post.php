<?php

$nombre = $_POST["nombre"];

if (!empty($nombre)) {
    echo "<h1>Hola $nombre</h1>";
}
echo "Como puedes ver más arriba, los datos introducidos no aparecen en la URL.";
?>