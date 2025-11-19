<?php
// Funciones y alcance

/* EJERCICIO
 * Crea ejemplos de funciones basicas que representen las diferentes posibilidades del lenguaje: Sin parametros ni retorno, con uno o varios parametros, con retorno... 
 * Utiliza algun ejemplo de funciones ya creadas en el lenguaje.
 * Pon a prueba el concepto de variable LOCAL y GLOBAL.
 * Debes hacer print por consola del resultado de todos los ejemplos.
 * (y tener en cuenta que cada lenguaje puede poseer mas o menos posibilidades)
 */

// Funcion simple
function saludar(){
  echo "Hola Gente!";
}
// Retorno de la funcion simple
saludar();

// Funcion con parametros
function saludarNombre($nombre){
  echo "\nHola $nombre!";
}

saludarNombre("Miranda");

echo "\n";

// Funciones que devuelven valores
function sumar($a, $b){
  return $a + $b;
}

$resultado = sumar(5, 7);

echo $resultado;

echo "\n";

function multiplicacion($a, $b){
  return $a * $b;
}

$resultado = multiplicacion(5, 2);

echo $resultado;

echo "\n";

// Funciones con tipos
function dividir(int $a, int $b): int{
  return $a / $b;
}

echo dividir(10, 2);
echo "\n";

// Funciones para Strings
//cuenta el largo del string
echo strlen("Hola mundo");
echo "\n";
// escribe mayusculas
echo strtoupper("hola mundo\n");
// escribe minusculas
echo strtolower("HOLA MUNDO\n");

// Funciones para Arrays
$listaCompra = ["papel higienico", "huevos", "frutas", "pan"];
// cuenta cuantos valores hay en el array
echo count($listaCompra);
// añade al final del array
array_push($listaCompra, "leche", "ColaCao");
// borra el ultimo string del array
array_pop($listaCompra);

var_dump($listaCompra);

echo in_array("chorizo", $listaCompra);
echo in_array("leche", $listaCompra);
echo "\n";

// Funciones matematicas
// raiz cuadrada
echo sqrt(56);
echo "\n";

// redondea
echo round(4,7);
echo "\n";

// numero aleatorio
echo rand(5, 50);
echo "\n";

// Funciones Date y Time
echo date("Y-m-d");
echo "\n";

echo time();

// Funciones Ficheros
// lee el archivo
$texto = file_get_contents("archivo.txt");

// escribe en el archivo
file_put_contents("archivo.txt", "Hola Mundo");

// borra el archivo
unlink("archivo.txt");

// Funciones de validacion
$nombre = "Veronica";
$numero = 15;
// valida si la variable esta definida
if(isset($nombre)){
  echo $nombre . " esta en la lista!";
} else {
  echo "Tu nombre no se encuentra en la lista";
}
echo "\n";
// valida si la variable esta vacia
if (empty($nombre)){
  echo "La variable esta vacia";
} else {
  echo "El valor de la variable es: " . $nombre;
}
echo "\n";
//Valida si la variable es un numero
if (is_numeric($numero)){
  echo "la variable es un numero";
} else {
  echo "la variable no es un numero";
}
echo "\n";
// EXTRA 
// evita ataque XSS
echo htmlspecialchars("<b>Hola Mundo<b>");
echo "\n";

/* 
Existen mas funciones, estas son las principales. 
Existe alguna mas principal tambien para URLs y funciones JSON,
pero no voy a estar tres horas escribiendo funciones😅.
*/ 

// LOCAL & GLOBAL
//local
function local(){
  $texto = "Esta variable es local";
  echo $texto;
}

local();

echo $texto;
echo "\n";

// globals
function sum(){
  global $contar;
  $contar++;
}

sum();
sum();
sum();

echo $contar;
echo "\n";

$nombre = "Pedro";

function cambiarNombre(){
  $GLOBALS ['nombre'] = "Paco";
}

cambiarNombre();

echo $nombre;
echo "\n";








