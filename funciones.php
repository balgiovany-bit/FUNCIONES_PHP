<?php
isset($variable); //Verifica si una variable está definida y no es null.

empty($variable); //Comprueba si una variable está vacía.

gettype($variable); //Devuelve que tipo de dato de la variable

is_array($variable); //Verifica si el contenido es un arreglo.

var_dump($variable); //Muestra información detallada de una variable se sutiliza para la depuracion de datos

strlen($cadena); //Devuelve la longitud de una cadena

strpos($cadena, $busqueda); //Encuentra la posición de la primera aparición de un texto

str_replace($busqueda, $reemplazo, $cadena); //Reemplaza todas las apariciones de un string buscado

substr( $cadena, $inicio, $longitud ); //Devuelve una parte de una cadena.

strtolower() / strtoupper(); //Convierte a minúsculas o mayúsculas.

trim($cadena); //Elimina espacios en blanco al inicio y al final.

explode(); //Divide un string en un arreglo mediante un delimitador.

implode(); //Une elementos de un arreglo en un string

count(); // Cuenta los elementos de un arreglo.

array_merge(); //Combina dos o más arreglos

array_push(); //Inserta uno o más elementos al final del arreglo.

array_pop(); // Extrae el último elemento de un arreglo

in_array(); //Comprueba si un valor existe en un arreglo.

array_keys(); //Devuelve todas las llaves de un arreglo.

array_values(); //Devuelve todos los valores de un arreglo.

round(); // Redondea un número flot

rand() / mt_rand(); //Genera un número entero aleatorio

number_format(); // Formatea un número con separadores de miles y decimales.

date(); //Formatea una fecha y hora loca

time(); //Devuelve la fecha actual en formato Unix timestamp (la cantidad de segundos desde el 1 de enero de 1970).
        //es el timpo que interno de todos los sistemas operativos y lenguajes de programacion para manejar fechas y horas.

strtotime();  //Convierte una descripción de fecha en texto a un timestamp

file_exists(); //Verifica si un archivo o directorio existe

header();  // Envía un encabezado HTTP sin procesar (ej. para redirecciones)

json_encode() / json_decode(); // Convierte datos a formato JSON y viceversa
                // JSON (JavaScript Object Notation) es un formato de texto ligero para el intercambio de datos, fácil de leer y escribir para humanos, y fácil de parsear y generar para máquinas. Es comúnmente utilizado en aplicaciones web para enviar datos entre el cliente y el servidor.

die() / exit(); //Finaliza la ejecución del script actual con un mensaje





