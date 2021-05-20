<!--# 1. Escribe un script que muestre un formulario con un campo de texto
 y que permita enviarlo usando el método GET.
 El mismo script será capaz de recibir el dato enviado por el formulario y lo mostrará.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulario con GET</title>
</head>
<body>
    <p> Introduce aquí tu nombre </p>
    <form action="1recibe_get.php" method="GET">
        <input type="text" id="nombre" name="nombre">
        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>
