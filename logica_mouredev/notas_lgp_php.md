# <span style='color:#4A90E2'>Notas lógica de programación (Mouredev)</span>

## Índice

- [CONTANTES](#constantes)
- - [Que es una constante?](#que-es-una-constante)
- - [Para que sirven?](#para-que-sirven)
- - [Como se crean las constantes en PHP?](#como-se-crean-las-constantes-en-php)
- - - [1. Con define()](#1-con-define)
- - - [2. Con const](#2-con-const)
- - [Como se usan?](#como-se-usan)
- - [Contantes dentro de clases](#contantes-dentro-de-clases)
- - [Ejemplos practicos](#ejemplos-practicos)
- [OPERADORES](#operadores)
- - [Que es un Operador en PHP?](#que-es-un-operador-en-php)
- - - [1. Operadores Aritméticos](#1-operadores-aritmeticos)
- - - [2. Operadores de asignación](#2-operadores-de-asignacion)
- - - [3. Operadores de comparación](#3-operadores-de-comparacion)
- - - [4. Operadores lógicos](#4-operadores-logicos)
- - - [5. Operadores de incremento/decremento](#5-operadores-de-incremento-decremento)
- - - [6. Operadores de cadenas](#6-operadores-de-cadenas)
- - - [7. Operadores de Arrays](#7-operadores-de-arrays)
- - - [8. Operadores a nivel de bits (bitwise)](#8-operadores-a-nivel-de-bits)
- - - [9. Operadores de control de errores](#9-operadores-de-control-de-errores)
- - - [10. Operadores del tipo (instanceof)](#10-operadores-del-tipo)
- - - [11. Operador de función null (??)](#11-operador-de-funcion-null)
- - - [12. Operador ternario (?:)](#12-operador-ternario)
- [FUNCIONES](#funciones)
- - [Que es una función?](#que-es-una-funcin)
- - [Para que sirve una función?](#para-que-sirve-una-funcin)
- - [Que son las funciónes internas en PHP?](#que-son-las-funcines-internas-en-php)
- - - [1. Funciones para Strings](#1-funciones-para-strings)
- - - [2. Funciones para Arrays](#2-funciones-para-arrays)
- - - [3. Funciones Matemáticas](#3-funciones-matematicas)
- - - [4. Funciones para Manejar Fechas](#4-funciones-para-manejar-fechas)
- - - [5. Funciones del Sistema de Ficheros](#5-funciones-del-sistema-de-ficheros)
- - - [6. Funciones de Validación](#6-funciones-de-validacion)
- - - [7. Funciones para URL y Web](#7-funciones-para-url-y-web)
- - - [8. Funciones para JSON](#8-funciones-para-json)
- - - [9. Funciones para Strings Avanzadas](#9-funciones-para-strings-avanzadas)
- [VARIABLES LOCALES](#variables-locales)
- [VARIABLES GLOBALES](#variables-globales)
- [ESTRUCTURAS DE DATOS](#estructuras-de-datos)
- - [Estructuras principales en PHP](#estructuras-principales-en-php)
- - [EXTRA: Funciones para organizar arrays](#extra-funciones-para-organizar-arrays)
- [CADENAS DE CARACTERES](#cadenas-de-caracteres)
- - [Subcadenas](#subcadenas)

Notas logica de programacion mouredevpro

- "a programar se aprende programando"

## <span style='color:#50E3C2'>CONSTANTES</span>

### <span style='color:#50E3C2'>Que es una constante?</span>

- Es un valor que no cambia durante la ejecución de un Programa
- Una vez definida, no se puede ni modificar ni eliminar.
- Se usan para valore fijos (configuraciones, rutas, claves, números importantes).

Caracteristicas de una constante

- No llevan el simbolo $
- Se definen solo una vez
- Son globales
- El valor no puede cambiar

### <span style='color:#50E3C2'>Para que sirven?</span>

Se usan para valores que no deben modificarse, como:

- el nombre de la aplicacion
- la version
- una clave fija
- rutas del sistema
- limites (ej: valor maximo permitido)
- datos que deben ser siempre iguales

Ejemplos tipicos:

- PI = 3.1416
- IVA = 0.21
- APP_NAME = "MiWeb"

### <span style='color:#50E3C2'>Como se crean las constantes en PHP?</span>

1. Con define()

- Esta es la forma clasica

```php
define("PI", 3.1416);
define("APP_NAME", "Mi Aplicación");
```

- Se usan cuando estas fuera de una clase.

2. Con const

- Esta forma se una mayormente dentro de clases, aunque tambien funcionan fuera.

```php
const VERSION = "1.0";
const SALT = "abc123";
```

### <span style='color:#50E3C2'>Como se usan?</span>

Muy facil: simplemente llamas sus nombres sin simbolo $.

```php
echo PI;
echo APP_NAME;
```

### <span style='color:#50E3C2'>Contantes dentro de clases</span>

Cuando defines una constante dentro de una clase, se accede asi:

```php
class Config {
  const VERSION = "2.0";
  const AUTHOR = "Miranda";
}

echo Config::VERSION: // 2.0
echo Config::AUTHOR: // Miranda
```

### <span style='color:#50E3C2'>Ejemplos practicos</span>

Ruta fija del proyecto

```php

define("BASE_PATH", "/var/www/html/");

```

Clave secreta

```php

const SECRET_KEY = "xyz456";

```

Valores matematicos

```php

define("GRAVEDAD", 9.81);

```

Configuracion de clase

```php
class Database {
  const HOST = "localhost";
  const PORT = "3306";
}

echo Database::HOST;
```

## <span style='color:#50E3C2'>OPERADORES</span>

## <span style='color:#50E3C2'>Que es un Operador en PHP?</span>

Es un símbolo que permite realizar acciones entre valores o variables.

### <span style='color:#50E3C2'>1 .Operadores Aritméticos</span>

Se usan para hacer operaciones matemáticas

```php
+ Suma			       $a + $b
```

```php
- Resta			       $a - $b
```

```php
* Multiplicación	   $a * $b
```

```php
/ Division             $a / $b
```

```php
% Modulo (resto)       $a % 2
```

```php
** Potencia            $a ** 3(a^3)
```

### <span style='color:#50E3C2'>2. Operadores de asignación</span>

Sirven para asignar valores a variables.

```php
=		Asignacion simple	$a = 5;
```

```php
+=		Suma y asigna		$a += 3;
```

```php
-=		Resta y asigna		$a -= 2;
```

```php
*=		Multiplica y asigna	$a *= 2;
```

```php
/=		Divida y asigna		$a /= 4;
```

```php
%=		Modulo y asigna		$a %= 3;
```

### <span style='color:#50E3C2'>3. Operadores de comparación</span>

Comparan valores y devuelven true o false

```php
== Igual (solo valor)       5 == "5" -> true
```

```php
=== Identico (valor + tipo) 5 === "5" -> false
```

```php
!= Diferente                5 != 4
```

```php
!== No identico             5 !== "5"
```

```php
> Mayor			            7 > 3
```

```php
< Menor                     2 < 5
```

```php
>= Mayor o igual            5 >= 5
```

```php
<= Menor o igual            3 <= 3
```

```php
<=> Nave espacial           7 <=> 5 // (devuelve -1, 0, 1)
```

### <span style='color:#50E3C2'>4. Operadores lógicos</span>

Sirven para combinar condiciones

```php
&& AND  ($a > 5 && $b < 10)
```

```php
! NOT    !($a == 5)
```

### <span style='color:#50E3C2'>5. Operadores de incremento/decremento</span>

```php
++$a  Pre-incremento    Primero suma, luego usa
```

```php
$a++  Post-incremento   Usa y luego suma
```

```php
--$a  Pre-decremento    Resta antes
```

```php
$a--  Post-decremento   Resta después
```

### <span style='color:#50E3C2'>6. Operadores de cadenas</span>

Usados para concatenar strings

- . Concatenar

```php
"Hola" . " Mundo"
```

- .= Concatenar y asignar

```php
$a .= " texto"
```

### <span style='color:#50E3C2'>7. Operadores de Arrays</span>

- Unión de arrays $a + $b

```php
== Igualdad   (mismos pares clave-valor)
```

```php
=== Identidad (igual estructura y orden)
```

```php
!= Diferentes
```

```php
<> Diferentes
```

```php
!== No identicos
```

### <span style='color:#50E3C2'>8. Operadores a nivel de bits (bitwise)</span>

Operan directamente sobre bits.

```php
& AND bit a bit
```

```php
^ XOR
```

```php
~ NOT
```

```php
<< Desplazar bits izquierda
```

```php
>> Desplazar bits derecha
```

(No se suelen usar, a excepción de la programación baja o sistemas.)

### <span style='color:#50E3C2'>9. Operadores de control de errores</span>

```php
@ // Silencia errores
```

### <span style='color:#50E3C2'>10. Operadores del tipo (instanceof)</span>

Sirven para comprobar si un objeto pertenece a una clase

```php
<?php


    class Persona {


$p = new Persona();


    	var_dump($p instanceof Persona); // true
    }

?>
```

### <span style='color:#50E3C2'>11. Operador de función null (??)</span>

Devuelve el primer valor que no sea null

```php
<?php

$nombre = $_GET["nombre"] ?? "Invitado";

?>
```

### <span style='color:#50E3C2'>12. Operador ternario (?:)</span>

Version corta de un if

```php
<?php

$mensaje = ($edad >= 18) ? "Adulto" : "Menor";

// Version corta
$mensaje = $usuario ?: "Anonimo";

?>
```

## <span style='color:#50E3C2'>FUNCIONES</span>

## <span style='color:#50E3C2'>Que es una función?</span>

- Una función es un conjunto de instrucciones agrupadas bajo un nombre.
- Ese nombre te permite ejecutar esa lógica cuando quieras, sin tener que volver a escribirla.

## <span style='color:#50E3C2'>Para que sirve una función?</span>

- Evitar repetir el código (algo que sabes que vas a escribir muchas veces igua, lo metes en una función)
- Organizar código (código mas limpio y fácil de leer)
- Hacer el código mas fácil de mantener (si necesitas cambiar algo, solo tienes que cambiar lo que esta dentro de la función)
- Dividir un programa grande en partes pequeñas (cada función tiene una tarea)
- Reutilizar logica (La misma función puede ser utilizada en distintas partes del proyecto)

## <span style='color:#50E3C2'>Que son las funciónes internas en PHP?</span>

- Son funciónes que ya vienen incluidas en PHP.
- Estan listas para ser utilizadas, sin crearlas previamente.
- Estan optimizadas y son rápidas.
- Resuelven tareas comunes y te evitan escribir mucho código.

## <span style='color:#50E3C2'>Principales categorías de funciónes nativas de PHP:</span>

### <span style='color:#50E3C2'>1. Funciones para Strings</span>

#### <span style='color:#50E3C2'>Longitud y comparacion</span>

strlen()

- longitud del string

```php
echo strlen("Hola"); // 4
```

strcmp()

- comparar dos cadenas (sensible a mayusculas) <br>
  devuelve:

```php
0 si son iguales
< 0 si $a < $b
> 0 si $a > $b
```

```php
echo strcmp("hola", "hola"); // 0
echo strcmp("a", "b"); // -1
```

strcasecmp()

- comprar sin importar mayusculas
- util para comparar nombres, email, etc.

```php
echo strcasecmp("hola", "HOLA"); // 0
```

#### <span style='color:#50E3C2'>Busca dentro de una cadena</span>

strpos($cadena, $buscado)

- Posicion de la primera aparicion

- Devuelve la posicion o false si no lo encuentra.

```php
echo strpo("Hola mundo", "m"); // 5
```

str_contains($cadena, $buscado) (PHP 8+)

- Devuelve true o false

```php
str_contains("Hola mundo", "mundo"); // true
```

str_start_with($cadena, $inicio)

```php
str_start_with("archivo.txt", "arch") // true
```

str_ends_with($cadena, $final)

```php
str_ends_with("foto.jpg", "jpg"); // true
```

#### <span style='color:#50E3C2'>Subcadenas (extraer porciones)</span>

substr($cadena, $inicio, $longitud)

- Extrae una porcion de texto
- Equivale un slicing de Python

```php
echo substr("Programar", 0, 4); // Prog
echo substr("Programar", -4); // amar
```

mb_substr()

- igual pero para acentos/emojis
- Muy importante cunado manejas textos UTF-8

```php
echo mb_substr("Mésica", 0, 4); // Més
```

substr_replace($cadena, $reemplazo, $inicio, $longitud)

- Reemplaza solo una parte

```php
echo substr_replace("Hola mundo", "PHP", 5);
```

#### <span style='color:#50E3C2'>Reemplazar texto</span>

str_replace()

- reemplaza texto

```php
echo str_replace("mundo", "PHP", "Hola mundo"); // Hola PHP
```

str_ireplace()

- reemplazo sin distingir mayusculas

```php
echo str_ireplace("MUNDO", "PHP", "Hola mundo");
```

#### <span style='color:#50E3C2'>Modificar texto</span>

strtoupper()

- convierte a mayusculas

```php
echo strtoupper("hola"); // HOLA
```

strtolower()

- convierte en minúsculas

```php
echo strtolower("HOLA"); // hola
```

ucfirst()

- pone la primera letra en mayusculas

```php
ucfirst("hola mundo") // Hola mundo
```

ucwords()

- capitaliza cada palabra

```php
ucfirst("hola mundo php") // Hola Mundo Php
```

strrev()

- invierte cadena

```php
strrev("PHP"); // PHP -> PHP (es simetrico)
strrev("Hola"); // aloH
```

str_repeat()

- repetir texto

```php
echo str_repeat("mundo", 3); // mundomundomundo
```

str_pad($cadena, $largo, $rellleno)

- rellenar
- Util para crear formatos:

```php
echo str_pad("7", 3, "0", STR_PAD_LEFT); // 007
```

#### <span style='color:#50E3C2'>Dividir y unir</span>

explode($separador, $cadena)

- cadena -> array

```php
explode(",", "a,b,c"); // ["a", "b", "c"]
```

implode($glue, $array)

- array → cadena

```php
implode(" - ", ["a", "b", "c"]); // a - b - c
```

#### <span style='color:#50E3C2'>Limpieza de espacios</span>

trim()

- Quita espacios o caracteres al principio y final.

```php
trim("  hola  "); // "hola"
```

ltrim() / rtrim()

- Izquierda o derecha

#### <span style='color:#50E3C2'>Conversión básica</span>

ord($char)

- obtiene el valor ASCII

```php
ord("A"); // 65
```

chr($num)

- convierte ASCII en carácter

```php
chr(65); // "A"
```

#### <span style='color:#50E3C2'>BONUS: Funciones super comunes para textos dinamicos</span>

sprintf()

- formatear cadenas
- Perfecto para textos complejos

```php
echo sprintf("Mi nombre es %s y tengo %d años", "Sara", 22);
// Mi nombre es Sara y tengo 22 años
```

### <span style='color:#50E3C2'>2. Funciones para Arrays</span>

count()

- cantidad de elementos

```php
$frutas = ["manzanas", "pera", "uva"];

echo count($frutas); // 3
```

array_push()

- agrega el final

```php
array_push($frutas, "banana");
```

array_pop()

- quita el ultimo elemento

```php
array_pop($frutas);
```

array_splice()

- elimina elementos seleccionados
- añade un reemplazo o un ítem en la posición de tu elección

#### <span style='color:#50E3C2'>EJ1:</span>

```php
<?php

$frutas = ["manzana","pera","uva","platano"];

// elimina desde la posición 1, 2 elementos
$eliminados = array_splice($frutas, 1, 2);

print_r($frutas);
print_r($eliminados)

?>
```

#### <span style='color:#50E3C2'>EJ2:</span>

```php
<?php

$numeros = [1, 2, 3, 4];

// Inserat "99" en posición 2 sin borrar nada
array_splice($numeros, 2, 0, [99]);

print_r($numeros);

?>
```

#### <span style='color:#50E3C2'>EJ3:</span>

```php
<?php

$letras = ["a", "b", "c", "d", "e"];

// Corta dedes posiciona 2 hasta el final
array_splice($letras, 2);

print_r($letras);

?>
```

in_array()

- busca un valor dentro de un array

```php
echo in_array("pera", $frutas); // 1 (true)
```

### <span style='color:#50E3C2'>3. Funciones Matemáticas</span>

sqrt()

- raiz cuadrada

```php
echo sqrt(16); // 4
```

round()

- redondea

```php
echo round(3.6); // 4
```

rand()

- numero aleatorio

```php
echo rand(1, 10);
```

### <span style='color:#50E3C2'>4. Funciones para Manejar Fechas</span>

date()

- obtener fecha o formatearla

```php
echo date("Y-m-d"); // 2025-11-17
```

time()

- timestamp actual

```php
echo time();
```

### <span style='color:#50E3C2'>5. Funciones del Sistema de Ficheros</span>

file_get_contents()

- leer un archivo

```php
$texto = file_get_contents("archivo.txt");
```

file_put_contents()

- escribir en archivo

```php
file_put_contents("archivo.txt", "Hola mundo");
```

unlink()

- borrar archivo

```php
unlink("archivo.txt");
```

### <span style='color:#50E3C2'>6. Funciones de Validación</span>

isset()

- si una variable esta definida

```php
if(isset($nombre)) {...}
```

empty()

- si esta vacía

```php
if(empty($nombre)) {...}
```

is_numeric()

- si es numero

```php
echo is_numeric("123") // true
```

### <span style='color:#50E3C2'>7. Funciones para URL y Web</span>

urlencode()

- codifica texto para URL

```php
echo urlencode("hola mundo"); // hola+mundo
```

htmlspecialchars()

- evitar ataques XSS

```php
echo htmlspecialchars("<b>hola</b>"); // &lt;b&gt;hola&lt;/b&gt;
```

### <span style='color:#50E3C2'>8. Funciones para JSON</span>

json_encode()

- convierte array a JSON

```php
echo json_encode(["nombre" => "Ana"]);
```

json_decode()

- Convierte JSON a array

```php
<?php

$json = '{"nombre":"Ana"}';

$array = json_decode($json, true);

?>
```

### <span style='color:#50E3C2'>9. Funciones para Strings Avanzadas</span>

substr()

- cortar string

```php
echo substr("Hola mundo", 0, 4); // Hola
```

explode()

- separar un string en partes

```php
$partes = explode(" ", "Hola mundo");
```

implode()

- unir array a string

```php
echo implode("-", ["2025","11","17"]); // 2025-11-17
```

## <span style='color:#50E3C2'>VARIABLES LOCALES</span>

- se definen dentro de una Función
- solo existen mientras la función se ejecuta
- No puedes acceder a ellas desde fuera

```php
<?php

function ejemploLocal() {

  $mensaje = "Hola desde dentro";

  echo $mensaje; // OK: imprime "Hola desde dentro"

}

ejemploLocal();

echo $mensaje; // ERROR: Undefined variable $mensaje
// Solo funciona dentro de la función, fuera no esta definida.

?>
```

## <span style='color:#50E3C2'>VARIABLES GLOBALES</span>

- Se definen fuera de funciones (en el scope global/script).
- Para usarlas dentro de una función hay dos formas: declarar global dentro de la función, o usar el array especial $GLOBALS.

a. Usando global

```php
<?php

$contador = 0; // variable global

function sumar() {
  global $contador; // ahora la función usa la variable global
  $contador++;

}

sumar();
sumar();

echo $contador; // Salida: 2
// global $contador; hace que $contador dentro de la función apunte a la misma variable global.

?>
```

b. Usando $GLOBALS

```php
<?php

$mensaje = "Hola";

function cambiarMensaje() {

  $GLOBALS['mensaje'] = "Adiós"; // modifica la global desde aquí

}

cambiarMensaje();

echo $mensaje; // Salida: Adiós

?>
```

Difenrencia practica: $GLOBALS es util cuando quieres acceder dinámicamente por nombre (ej. $GLOBALS[$nombreVar]).

## <span style='color:#50E3C2'>ESTRUCTURAS DE DATOS</span>

### <span style='color:#50E3C2'>Estructuras principales en PHP</span>

Variables basicas

```php
$nombre = "Miranda";
$edad = 24;
$peso = 77.8;

```

Strings

```php
echo "Hola Mundo";
```

Integer y floats

```php
$int = 20;
$float = 22.5;
```

Booleanos

```php
$bool = true;
$boolNegative = false;
```

Arrays (indexados, asociativos, y multidimensionales)

```php
$fruits = ["Mazanas", "Peras", "Platanos", "Cerezas", "Uvas"];
echo $fruits;
```

Objetos (creados a partir de clases)

```php
class Cars { // clase
  public $brand:
}

$myCar = new Car();
$myCar->$brand = "Ford"; // Objeto
```

Constantes

```php
define("PI", 3.1416);
const VERSION = "1.0";
```

Recursos (resource)

```php
$archivo = fopen("datos.txt", "r"); // esto es un recurso
```

Enums (si usas PHP 8.1+)

```php
enum Estado {
  case Activo;
  case Inactivo;
}
```

Closures / Funciones como variable

```php
$saludar = function($nombre) {
  return "Hola $nombre";
};

echo $saludar("Miranda");

```

### <span style='color:#50E3C2'>EXTRA: Funciones para organizar arrays</span>

sort()

- Ordena un array indexado por valores( y reinicia los indices)

```php
<?php

$nums = [3, 1, 2];
sort($nums);
print_r($nums); // [1, 2, 3]

$nom = ["Pepe", "Veronica", "Maria"];
sort($nom);
print_r($nom); // Maria, Pepe, Veronica

?>
```

rsort()

- Orden descendente

```php
$nums = [3, 1, 2];
rsort($nums);// [3, 2, 1]
```

asort()

- Ordena por valores pero manteniendo los indices

```php
$edades = ["Ana" => 20, "Luis" => 18, "Eva" => 30];
asort($edades);
// ["Luis" => 18, "Ana" => 20, "Eva" => 30]
```

ksort()

- Ordena por clave (key) manteniendo la relacion clave-valor

```php
$persona = ["nombre" => "Ana", "edad" => 25, "pais" => "Perú"];
ksort($persona);
// ["edad" => 25, "nombre" => "Ana", "pais" => "Perú"]
```

asort() y ksort()

- Versiones descendentes (por valores o por claves)

usort

- Orden personalizada usando una funcion comparadora

```php
$personas = [
  ["nombre" => "Ana", "edad" => 25],
    ["nombre" => "Luis", "edad" => 20]
];

usort($personas, function($a, $b) {
  return $a["edad"] <=> $b["edad"];
});
```

## <span style='color:#50E3C2'>AGREGAR DATOS DEL USUARIO</span>

### <span style='color:#50E3C2'>Existe algo como input en PHP?</span>

Si, pero no con una funcion llamada input()<br>
PHP obtiene datos del usuario mediante:

- Formularios HTML(metodo mas comun)

```php
$_POST["nombre"];
$_GET["id"];
```

EJ:

```php
$nombre = $_POST["nombre"]; // input del usuario
```

Desde la terminal(CLI)
