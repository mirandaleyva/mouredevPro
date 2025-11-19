# <span style='color:#4A90E2'>Notas lógica de programación (Mouredev)</span>

## Índice

- [Que es una constante?](#que-es-una-constante)
- [OPERADORES](#operadores)
- [Que es un Operador en PHP?](#que-es-un-operador-en-php)
- [1 .Operadores Aritméticos:](#1-operadores-aritmticos)
- [^ XOR](#xor)
- [~ NOT](#not)
- [FUNCIONES](#funciones)
- [Que es una función?](#que-es-una-funcin)
- [Para que sirve una función?](#para-que-sirve-una-funcin)
- [Que son las funciónes internas en PHP?](#que-son-las-funcines-internas-en-php)
- - [EJ1:](#ej1)
- - [EJ2:](#ej2)
- - [EJ3:](#ej3)
- [VARIABLES LOCALES](#variables-locales)
- [VARIABLES GLOBALES](#variables-globales)

Notas logica de programacion mouredevpro

- "a programar se aprende programando"

## <span style='color:#50E3C2'>Que es una constante?</span>

- Es un valor que no cambia durante la ejecución de un Programa
- Una vez definida, no se puede ni modificar ni eliminar.
- Se usan para valore fijos (configuraciones, rutas, claves, números importantes).

Caracteristicas de una constante

- No llevan el simbolo $
- Se definen solo una vez
- Son globales
- El valor no puede cambiar

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

strlen()

- longitud del string

```php
echo strlen("Hola"); // 4
```

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

str_replace()

- reemplaza texto

```php
echo str_replace("mundo", "PHP", "Hola mundo"); // Hola PHP
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

array_slice()

- elimina elementos seleccionados
- añade un reemplazo o un ítem en la posición de tu elección

#### <span style='color:#50E3C2'>EJ1:</span>

```php
<?php

$frutas = ["manzana","pera","uva","platano"];

// elimina desde la posición 1, 2 elementos
$eliminados = array_slice($frutas, 1, 2);

print_r($frutas);
print_r($eliminados)

?>
```

#### <span style='color:#50E3C2'>EJ2:</span>

```php
<?php

$numeros = [1, 2, 3, 4];

// Inserat "99" en posición 2 sin borrar nada
array_slice($numeros, 2, 0, [99]);

print_r($numeros);

?>
```

#### <span style='color:#50E3C2'>EJ3:</span>

```php
<?php

$letras = ["a", "b", "c", "d", "e"];

// Corta dedes posiciona 2 hasta el final
array_slice($letras, 2);

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
