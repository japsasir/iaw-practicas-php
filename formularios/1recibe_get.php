<?php

$nombre = $_GET["nombre"];

if (!empty($nombre)) {
    echo "<h1>Hola $nombre</h1>";
    echo "Como puedes ver más arriba, los datos introducidos aparecen en la URL.";
}

else {
    echo "No seas tímido, vuelve atrás e introduce un nombre.";
}
?>