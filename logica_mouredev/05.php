 <?php


/*
 * Valor y referencia
 */

/*
 * Tipos de dato por valor (tipos escalares)
 */
$myIntA = 10;
$myIntB = $myIntA;   // copia del valor
$myIntB = 20;
// $myIntA = 30;

echo $myIntA . PHP_EOL; // 10
echo $myIntB . PHP_EOL; // 20


/*
 * Tipos de dato por referencia (arrays en PHP usan Copy-on-Write)
 * Nota: en PHP los arrays NO se comparten como referencias por defecto (a diferencia de listas en Python).
 * Al modificar, PHP crea una copia (Copy-on-Write). Si quieres comportamiento "por referencia" real,
 * debes usar explícitamente el operador &.
 */

// --- Variante A: comportamiento estándar (Copy-on-Write; al modificar se separan) ---
$myListA = [10, 20];
$myListB = $myListA;     // misma “foto” inicial, pero no referencia fija
$myListB[] = 30;         // al modificar, $myListB se copia y $myListA queda igual

print_r($myListA);       // [10, 20]
print_r($myListB);       // [10, 20, 30]

// --- Variante B: referencia explícita (más parecido al ejemplo de Python) ---
$myListA2 = [10, 20];
$myListB2 =& $myListA2;  // ambos apuntan a la misma variable
$myListB2[] = 30;

print_r($myListA2);      // [10, 20, 30]
print_r($myListB2);      // [10, 20, 30]


/*
 * Funciones con datos por valor (escalares)
 */
function myIntFunc(int $myInt): void
{
    $myInt = 20;                 // solo cambia la copia local
    echo $myInt . PHP_EOL;       // 20
}

$myIntC = 10;
myIntFunc($myIntC);
echo $myIntC . PHP_EOL;          // sigue siendo 10


/*
 * Funciones con datos por referencia (arrays)
 * En PHP, para modificar el array original desde la función, se debe pasar con &.
 */
function myListFunc(array &$myList): void
{
    $myList[] = 30;

    // $myListD será otra referencia al mismo array (análogo al Python)
    $myListD =& $myList;
    $myListD[] = 40;

    print_r($myList);
    print_r($myListD);
}

$myListC = [10, 20];
myListFunc($myListC);
print_r($myListC);                 // [10, 20, 30, 40]


/*
 * Extra
 */

/*
 * Por valor: swap de dos enteros
 * En Python se devuelve una tupla; en PHP devolvemos un array de 2 elementos.
 */
function value(int $valueA, int $valueB): array
{
    $temp = $valueA;
    $valueA = $valueB;
    $valueB = $temp;
    return [$valueA, $valueB];
}

$myIntD = 10;
$myIntE = 20;

[$myIntF, $myIntG] = value($myIntD, $myIntE);

echo $myIntD . ", " . $myIntE . PHP_EOL; // 10, 20 (originales no cambian)
echo $myIntF . ", " . $myIntG . PHP_EOL; // 20, 10


/*
 * “Por referencia” como en tu ejemplo Python:
 * Ahí se intercambian solo las variables locales y se devuelve el resultado;
 * las listas originales quedan intactas.
 *
 * En PHP hacemos lo mismo: NO usamos &, swap local y devolvemos ambos arrays.
 */
function ref(array $valueA, array $valueB): array
{
    $temp = $valueA;
    $valueA = $valueB;
    $valueB = $temp;
    return [$valueA, $valueB];
}

$myListE = [10, 20];
$myListF = [30, 40];

[$myListG, $myListH] = ref($myListE, $myListF);

// mostramos los originales (sin cambios)
echo "[" . implode(", ", $myListE) . "], [" . implode(", ", $myListF) . "]" . PHP_EOL;

// mostramos el resultado devuelto (intercambiado)
echo "[" . implode(", ", $myListG) . "], [" . implode(", ", $myListH) . "]" . PHP_EOL;
