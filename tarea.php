<?php
//a. Declaración de Variables:
// Variable de tipo integer (entero)
$edad = 25;

// Variable de tipo float (decimal)
$altura = 1.75;

// Variable de tipo string (cadena de texto)
$nombre = "Juan";

// Variable de tipo booleano (boolean)
$esEstudiante = true;

// Variable de tipo array (arreglo)
$coloresFavoritos = array("Rojo", "Verde", "Azul");

// Imprimir las variables para verificar los valores
echo "Edad: $edad<br>";
echo "Altura: $altura<br>";
echo "Nombre: $nombre<br>";
echo "Es estudiante: " . ($esEstudiante ? "Sí" : "No") . "<br>";
echo "Colores favoritos: " . implode(", ", $coloresFavoritos) . "<br>";

//b. Operaciones Aritméticas:

// Declaración de variables
$edad = 25;
$altura = 1.75;

// Realizar operaciones aritméticas

// Sumar la edad a un número
$sumaEdad = $edad + 5;

// Multiplicar la altura por un factor
$multiplicacionAltura = $altura * 2;

// Mostrar los resultados usando echo
echo "La edad actual es: $edad<br>";
echo "Si le sumamos 5, obtenemos: $sumaEdad<br>";

echo "La altura actual es: $altura<br>";
echo "Si multiplicamos la altura por 2, obtenemos: $multiplicacionAltura<br>";


//c. Manipulación de Cadenas:

// Crear variables de tipo cadena
$cadena1 = "Hola, ";
$cadena2 = "mundo!";

// Concatenar las dos cadenas
$cadenaConcatenada = $cadena1 . $cadena2;

// Obtener la longitud de la cadena concatenada
$longitudCadena = strlen($cadenaConcatenada);

// Mostrar los resultados usando echo
echo "Cadena 1: $cadena1<br>";
echo "Cadena 2: $cadena2<br>";
echo "Cadena concatenada: $cadenaConcatenada<br>";
echo "Longitud de la cadena concatenada: $longitudCadena caracteres<br>";

// d. Uso de Condicionales:
// Crear una variable booleana
$esEstudiante = true;

// Estructura de control condicional
if ($esEstudiante) {
    // Si la variable es verdadera
    echo "La persona es estudiante.<br>";
} else {
    // Si la variable es falsa
    echo "La persona no es estudiante.<br>";
}
// e. Creación de un Array:
// Definir un arreglo con al menos cinco elementos
$frutas = array("Manzana", "Banana", "Cereza", "Durazno", "Mango");

// Mostrar un elemento específico del arreglo utilizando su índice
// Por ejemplo, mostrar el tercer elemento (índice 2)
$indice = 2;
echo "El elemento en el índice $indice es: " . $frutas[$indice] . "<br>";
?>
