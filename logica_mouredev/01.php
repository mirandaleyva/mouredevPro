<?php

// Operadores y estructuras de control

/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *  Aritmeticos, logicos, de comparacion, asignacion, identidad, pertenencia, bits... 
 *  (Ten en cuanta que cada lenguaje puede poseer unos diferentes)
 * - Utilizando las operaciones con operadores que tu quieras, crea ejemplos que
 *  representen todos los tipos de estructuras de control que existan en tu lenguaje:
 *  Condicionales, iterativas, excepciones ...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 * 
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los numeros comprendidos entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni multiplos de 3
 */

// Variables
$a = 35;
$b = 47;

// Operadores Aritmeticos
// Suma
echo "El resultado de la Suma es: " . $a + $b . "\n";

// Resta
echo "El resultado de la Substraccion es: " . $a - $b . "\n";

// Multiplicacion
echo "El resultado de la Multiplicacion es: " . $a * $b . "\n";

// Division
echo "El resultado de la Devision es: " . $a / $b . "\n";

// Modulo
echo "El número 35 módulo 2 es igual a: " . $a % 2 . "\n";

// Potencia
echo "El número 35 elevado a la tercera potencia es igual a: " . $a ** 3 . "\n";

echo "\n";

// Operadores de Asignacion
$a = 56 . "\n";
$a += 10 . "\n";
$b = 10 . "\n";
$b -= 5 . "\n";
$c = 5 . "\n";
$c *= 3 . "\n";
$d = 28 . "\n";
$d /= 2 . "\n";
$e = 50 . "\n";
$e %= 2 . "\n";

echo $a . "\n" . $b . "\n" . $c . "\n" . $d . "\n" . $e . "\n";

echo "\n";

// Operadores de comparacion
var_dump(5 == "5"); // true
var_dump(5 === "5"); // false
var_dump(5 != 5); // false
var_dump(5 !== "5"); // true
var_dump(5 > 4); // true
var_dump(5 < 6); // true
var_dump(5 >= 5); // true
var_dump(5 <= 7); // true
var_dump(8 <=> 5); // false

echo "\n";

// Operadores logicos
// && (AND) ! (NOT)
$a = 4;
$b = 7;

if ($a > 5 && $b < 10){
  echo "Genial, cumples las condiciones! \n";
} else {
  echo "Lo siento, pero no cumples las condiciones😢 \n";
}
echo "\n";

// Operadores incremento/decremento
echo ++$a;
echo "\n";
echo $b--;
echo "\n";
echo $b;
echo "\n";

// Operadores de cadenas
echo "\n";
$nombre = "Miranda";

echo "Hola mi nombre es " . $nombre . "\n";

$display = "Hola";
$display .= " me llamo";
$display .= " Miranda";

echo $display;
echo "\n";
echo "\n";

// Operadores de arrays
$suma = ["color" => "rojo", 1, 2];
$suma2 = ["color" => "naranja", 3, 4];

$resultado = $suma + $suma2;

print_r($resultado);

echo "\n";

$a = ["a" => 1, "b" => 2];
$b = ["b" => 2, "a" => 1];

var_dump($a == $b);

echo "\n";

$a = ["a" => 1, "b" => 2];
$b = ["a" => 1, "b" => 2];

var_dump($a === $b);

echo "\n";

$a = ["a" => 1, "b" => 2];
$b = ["a" => 1, "b" => 2];

var_dump($a != $b);

echo "\n";

$a = ["a" => 10];
$b = ["a" => 15];

var_dump($a <> $b);

echo "\n";

$a = ["a" => 10];
$b = ["a" => 10];

var_dump($a !== $b);

echo "\n";
echo "\n";

// Operadores al nivel de bits (bitwise)
echo("AND: 5 & 2 = " . (5 & 2));
echo "\n";
echo("OR: 5 | 2 = " . (5 | 2));
echo "\n";
echo("XOR: 5 ^ 2 = " . (5 ^ 2));
echo "\n";
echo("Desplazamiento a la izquierda: 5 << 2 = " . (5 << 2));
echo "\n";
echo("Desplazamiento a la derecha: 5 >> 2 = " . (5 >> 2));
echo "\n";
echo("Negacion: ~5 = " . (~5));
echo "\n";

// Operadores de pertenencia (no existen en PHP)
// Variante de PHP
echo "\n";
$colores = ["rojo", "verde", "azul"];

if (in_array("amarillo", $colores)) {
    echo "El color está en el array";
} else {
  echo "El color no se encuentra en el array\n";
}

// Operaciones Iterativas

for($i = 5; $i <= 15; $i++){
  echo "\nNumero ";
  echo $i;
}

echo "\n";
echo "\n";

$x = 1;

while ($x <= 5){
  echo "x vale $x\n";
  $x++;
}
echo "\n";

// EJERCICIO EXTRA
/*
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
*/
for ($i = 10; $i <= 55; $i++){
  if ($i % 2 == 0 AND $i != 16 AND $i % 3 != 0){
    echo $i . "\n";
  }
}
?>