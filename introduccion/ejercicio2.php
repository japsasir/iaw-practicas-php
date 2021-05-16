<?php
/* 2. Revise la documentación oficial de PHP para ver qué información podemos obtener 
de la variable superglobal $_SERVER.
 Escribe un script haciendo uso de la variable superglobal $_SERVER que muestre lo siguiente:

    La dirección IP del servidor donde se está ejecutando el script.
    El nombre del host del servidor donde se está ejecutando el script.
    El software que está utilizando el servidor para servir el script.
    Información sobre el agente de usuario (User Agent) desde el que se está solicitando el script.
    La dirección IP del cliente que está solicitando el script.
*/
// https://www.php.net/reserved.variables.server    El señor de los arrays.
   echo "<br>";
   echo "Dirección IP del servidor: </b>" . $_SERVER['SERVER_ADDR'];
   echo "<br>";
   echo "Nombre del servidor: </b>" . $_SERVER['SERVER_NAME'];
   echo "<br>";
   echo "Software del servidor: </b>" . $_SERVER['SERVER_SOFTWARE'];
   echo "<br>";
   echo "User Agent: </b>" . $_SERVER['HTTP_USER_AGENT'];
   echo "<br>";
   echo "IP del cliente: </b>" . $_SERVER['REMOTE_ADDR'];

?>