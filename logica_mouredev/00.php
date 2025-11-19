<?php

// Sintaxis, variables, tipos de datos y Hola Mundo!

// https://www.php.net/manual/es/index.php

/*
 * EJERCICIO:
 * Crea un comentario en el codigo y coloca la URL del sitio web oficial del lenguaje de programacion que has seleccionado.
 * Representa las diferentes sintaxis que existen de crear comentarios en el lenguaje (en una linea, varias...).
 * Crea una variable (y una constante si el lenguaje lo soporta).
 * Crea variables representando todos los tipos de datos primitivos del lenguaje (cadenas de texto, enteros, booleanos...).
 * Imprime por terminal el texto: "Hola, [y el nombre de tu lenguaje]!"
 */

// Variantes de como definir una constante en PHP
define ("PHP", "esto es php!");
const php = "Me encanta programar!";

// Variables
$a = "mouredevPro";
$b = 16;
$c = true;
$d = 15.5;
$e = null;

// Variantes de imprimir texto en pantalla/terminal
echo "Hola, " . PHP . "\n";
print php . "\n";

echo $a . "\n" . $b  . "\n" . $c . "\n" . $d . "\n" . $e . "\n";
?>