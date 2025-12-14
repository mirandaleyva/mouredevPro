<?php

// ESTRUCTURAS DE DATOS

/**
 * EJERCICIO
 * - Muestra ejemplos de creacion de todas las estructuras soportadas por defecto en tu lenguaje.
 * - Utiliza operaciones de insercion, borrado, actualizacion y ordenacion
 * 
 * DIFICULTAD EXTRA
 * Crea una agenda de contactos por terminal
 * - Debes implementar funcionalidades de busqueda, insercion, actualizacion y eliminacion de contactos
 * - Cada contacto debe tener un nombre y un numbero de telefono
 * - El programa solicita en primer lugar cual es la operacion que se quiere realizar, y a continuacion los datos necesarios para llevarla a cabo
 * El programa no puede dejar introducir numeros de telefono no numericos y con mas de 11 digitos (o el numero de digitos que quieras).
 * Tambien se debe proponer una operacion de finalizacion del programa.
 */

$myCars = ["Toyota", "Smart", "Mercedes", "Audi", "BMW"];
print_r($myCars);

// añadir ultimo elemento del array
array_push($myCars, "Seat", "BYD");
print_r($myCars);

// Eliminar el ultimo elemento del array
array_pop($myCars);
print_r($myCars);

// Actualiza el array (Elimina apartir de la posicion 2, 1 elemento y añade "Ford")
array_splice($myCars, 2, 1, "Ford");
print_r($myCars);

// Ordena el array alfabeticamente
sort($myCars);
print_r($myCars);

// Ordena de forma descendente
rsort($myCars);
print_r($myCars);

var_dump($myCars);

// Estructuras principales PHP

// Variables simples
$string = "Pedro";
$int = 35;
$float = 80.30;
$bool = true;

echo $string . "\n";
echo $int . "\n";
echo $float . "\n";
echo $bool . "\n";

// Arrays
$fruits = ["Apple", "Mango", "Banana", "Cherry"];
print_r($fruits);

// Constantes
define("IVA", 0.21);

echo IVA . "\n";

const KEY = "WerD1859@";

echo KEY . "\n";

// Objetos
class Perro {
  public $raza;
  public $edad;
}

$miPerro = new Perro();
$miPerro->raza = "Doberman";
$miPerro->edad = 1;

// Actualizart el objeto
$miPerro->edad = 2; // Cambia la propiedad
$miPerro->raza = "Atreus"; // se cambia otra propiedad

echo "\n";

/* Recursos
$archivo = fopen("datos.txt", "r");

// No se puede actualizar solo cambiar
$archivo = fopen("datos.txt", "r");
fwrite($archivo, "nuevo contenido");
fclose($archivo);
*/

// reabres el archivo en otro modo
$archivo = fopen("datos.txt", "w"); // nuevo recurso

// Enum (apartir de PHP 8.1+)
enum Estado {
  case Active;
  case Inactive;
}


// EJECICIO DIFICULTAD EXTRA

// while & match
// Version simple
$agenda = true;

// Diccionario (array asociativo) de contactos
$contactos = [
  "Pepe" => "0041574563787",
  "Maria" => "0034567548392",
  "Julian" => "00417656743234",
  "Yannick" => "00414856904935",
  "Sara" => "0041764025784"
];

while ($agenda) {

  echo "1. Buscar contacto\n";
  echo "2. Agregar contacto\n";
  echo "3. Actualizar contacto\n";
  echo "4. Eliminar contacto\n";
  echo "5. Listar contactos\n";
  echo "6. Salir\n";

  $opcion = (int) readline("Elige una opcion: ");

  switch ($opcion) {

    case 1:
      // BUSCAR CONTACTO
      $name = readline("Nombre a buscar: ");

      if (isset($contactos[$name])) {
        echo "Contacto encontrado:\n";
        echo "Nombre: $name\n";
        echo "Teléfono: " . $contactos[$name] . "\n";
      } else {
        echo "El contacto no existe.\n";
      }
      break;

    case 2:
      // AGREGAR CONTACTO
      $name = readline("Nombre nuevo: ");
      $phone = readline("Telefono: ");

      if (is_numeric($phone) && strlen($phone) > 0 && strlen($phone) <= 15) {
        $contactos[$name] = $phone;
        echo "Contacto agregado correctamente.\n";
      } else {
        echo "El número no es válido.\n";
      }
      break;

    case 3:
      // ACTUALIZAR CONTACTO
      $name = readline("Nombre del contacto a actualizar: ");

      if (isset($contactos[$name])) {
        $phone = readline("Nuevo teléfono: ");

        if (is_numeric($phone) && strlen($phone) > 0 && strlen($phone) <= 15) {
          $contactos[$name] = $phone;
          echo "Contacto actualizado correctamente.\n";
        } else {
          echo "Número no válido.\n";
        }
      } else {
        echo "El contacto no existe.\n";
      }
      break;

    case 4:
      // ELIMINAR CONTACTO
      $name = readline("Nombre del contacto a eliminar: ");

      if (isset($contactos[$name])) {
        unset($contactos[$name]);
        echo "Contacto eliminado.\n";
      } else {
        echo "Este contacto no existe.\n";
      }
      break;

    case 5:
      // LISTAR CONTACTOS
      print_r($contactos);
      break;

    case 6:
      // SALIR
      echo "Saliendo...\n";
      $agenda = false;
      break;

    default:
      echo "La opción no es válida.\n";
      break;
  }

  echo "\n";
}