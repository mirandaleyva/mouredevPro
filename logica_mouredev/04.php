<?php

// CADENAS DE CARACTERES

// https://www.php.net/manual/es/index.php

/*
 * EJERCICIO:
 * Muestra ejemplos de todas la operaciones que puedes realizar con cadenas de caracteres
 * en tu lenguaje. Algunas de esas operaciones podrian ser (busca todas las que puedas):
 * - Acceso a caracteres especificos, subcadenas, longitud, concatenacion, repeticion, recorrido,
 * conversion a mayusculas y minusculas, reemplazo, division, union, interpolacion, verificacion...
 * 
 * 
 * DIFICULTAD EXTRA:
 * Crea un programa que analice dos palabras diferentes y realice comprobaciones para 
 * descubrir si son:
 * - Palindromos
 * - Anagramas
 * - Isogramas
 */


$str1 = "Hola";
$str2 = "Mundo";
$str3 = "Gente";

// Subcadenas
//substr(); // Esto equivale al slicing de PY
echo substr("Anmeldung", 0, 3);
echo "\n";
echo substr("Anmeldung", -3);
echo "\n";

// Longitud
echo strlen($str1);
echo "\n";
echo strlen($str2);
echo "\n";
echo strlen($str3);
echo "\n";
echo strlen($str1 . $str2 . $str3);
echo "\n";

// Concatenacion
// Unir cadenas usando un punto
echo "Esto es una concatenacion:\n" . $str1 . " Aprendiz de PHP\n";

// Recorrido


// Conversion Mayusculas
echo strtoupper($str1 . " " . $str2 . "\n");

// Conversion Minusculas
echo strtolower($str1 . " " . $str3 . "\n");

// Reemplazo
echo str_replace("la compra", "deporte", "Hoy hice la compra\n");

// Repeticion
echo str_repeat($str1 . " ", 5);
echo "\n";

// Division
// Divide y Une
explode(".", "1,2,3,4,5,6"); // Pasa de cadena a un array
echo "\n";

// Union
implode(" , ", ["a", "b", "c"]); // Pasa de array a una cadena
echo "\n";

// Interpolacion
// PHP reemplaza variables dentro de una cadena, sin usar el punto
echo "Hola $str2, como va esa logica?\n";

// Es mas usado si exiten riesgos de confucion.
echo "Bueno mi {$str3}, esto es otra forma de interpolar cadenas.\n\n";

// Verificacion
if ($str1 == strlen(4)){
  echo $str1 . $str2;
} else {
  echo "❌, la varible tiene que tener 4 silabas exactas" . PHP_EOL;
}

// EJ Extra
class PalindromeChecker{
  public function check (string $word1, string $word2): void{//El void es para no devolver nada (solo se imprime el echo(sin return))
    // Palindromos (Palabras que cambiando la direccion se leen igual ej: radar)
    // Guarda la funcion en una variable
    $reversed1 = strrev($word1);
    $reversed2 = strrev($word2);

    // Imprime la palabra original y la version invertida
    echo $word1 . " -> $reversed1" . PHP_EOL;
    echo $word2 . " -> $reversed2" . PHP_EOL;

    // Comprueba si la palabra es un polindromo
    echo ($word1 === $reversed1 ? "palindromo" : "no palindromo") . PHP_EOL;
    echo ($word2 === $reversed2 ? "palindromo" : "no palindromo") . PHP_EOL;
  }
}
// Crea el objeto y llama al metodo
$checker = new PalindromeChecker();
$checker->check("radar", "java");

//Anagramas
function isAnagram(string $a , string $b): bool {
  $a = str_split(strtolower($a));
  $b = str_split(strtolower($b));

  sort($a);
  sort($b);

  return $a === $b;
}

var_dump(isAnagram("roma", "amor"));
var_dump(isAnagram("java", "jose"));


// Isogramas
function isIsogram(string $word): bool {

  // Normaliza las mayusculas (mb se usa para idiomas con acentos etc. es mas preciso)
  $w = mb_strtolower($word, 'UTF-8');

  // Separa entre caracteres
  $chars = mb_str_split($w); 

  // Isograma = no hay palabras repetidas
  return count($chars) === count(array_unique($chars));
}

// Ejemplos
var_dump(isIsogram("roma"));
var_dump(isIsogram("pepe"));
var_dump(isIsogram("paris"));
var_dump(isIsogram("julia"));
