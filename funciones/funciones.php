<?php
// 1. Tabla de multiplicar.
# Entre paréntesis el parámetro de entrada.
function imprimir_tabla_multiplicar($numero){
    echo "<table border=1>";
    # Incremento de 1 a 10 usado en otras prácticas.
    for ($i = 0; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo"<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// 4. Ejercicio de calcular media.
function calcular_media() {
# Definimos la constante del número de elementos del array, 10.
define("num_elementos", 10);

# Paso 1. Declaramos el array
$lista = array();

# Paso 2. Inicialimos el array
for ($i = 0; $i < num_elementos; $i++ ){
    $lista[$i] = rand(1, 30);
}
$suma = 0;

# Paso 3. Imprimimos los datos  
for ($i = 0; $i < num_elementos; $i++ ) {
    $suma = $suma + $lista[$i];
}
echo "Lista de valores";
echo "<br>";
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}
echo "<br>";
$media = $suma / num_elementos;

echo "<b>La media es</b>: ".$media;
}
// 5. Ejercicio calcular máximo
function calcular_maximo() {

# Definir constante del array
define("num_elementos", 10);

# Paso 1. Declarar array
$lista = array();

# Paso 2. Inicializar array
for ($i = 0; $i < num_elementos; $i++){
    $lista[$i] = rand(1, 30);
}

# Paso 3. Imprimir array
echo "Lista de valores";
echo "<br>";
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}
$maximo = max($lista);

echo "<b>El valor maximo es es</b>: ".$maximo;
}

// 6. Calcular minimo
function calcular_minimo() {

# Definimos constante del array
define("num_elementos", 10);

# Paso 1. Declarar array
$lista = array();

# Paso 2. Inicializar array
for ($i = 0; $i < num_elementos; $i++){
    $lista[$i] = rand(1, 30);
}
echo "Lista de valores";
echo "<br>";
# Paso 3. Imprimir array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

$minimo = min($lista);

echo "<b>El valor minimo es</b>: ".$minimo;
}


# Funcion "saludo"
function saludo() {
    echo "Hola mundo!";
}

# Entrada: $nombre
# Salida: -
function saludo_usuario ($nombre){
    echo "Hola $nombre!";
}

# Entrada: $nombre
# Salida: Cadena de texto
function saludo_usuario_con_salida($nombre){
    return "Hola $nombre!"; 
}

?>