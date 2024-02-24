<?php

// 1. Generar las tablas de multiplicar del 4 y del 6
echo "Tabla del 4:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "4 x $i = " . (4 * $i) . "<br>";
}

echo "<br>Tabla del 6:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "6 x $i = " . (6 * $i) . "<br>";
}

// 2. Calcular el factorial de un número
$variable1 = 5;
$factorial = 1;
for ($i = 1; $i <= $variable1; $i++) {
    $factorial *= $i;
}
echo "<br>El factorial de $variable1 es: $factorial";

// 3. Determinar si un número es primo o no
$variable2 = 17;
$es_primo = true;
if ($variable2 <= 1) {
    $es_primo = false;
} else {
    for ($i = 2; $i <= sqrt($variable2); $i++) {
        if ($variable2 % $i == 0) {
            $es_primo = false;
            break;
        }
    }
}
if ($es_primo) {
    echo "<br>$variable2 es un número primo";
} else {
    echo "<br>$variable2 no es un número primo";
}

// 4. Determinar si un número es par
$variable3 = 8;
if ($variable3 % 2 == 0) {
    echo "<br>$variable3 es un número par";
} else {
    echo "<br>$variable3 no es un número par";
}

// 5. Mostrar la tabla de multiplicar de un número
$variable4 = 7;
echo "<br><br>Tabla de multiplicar de $variable4:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$variable4 x $i = " . ($variable4 * $i) . "<br>";
}
//ejercicio 2

// Calcular la edad
$fecha_nacimiento = "1990-05-15";
$fecha_actual = date("Y-m-d");
$edad = date_diff(date_create($fecha_nacimiento), date_create($fecha_actual))->y;
echo "La edad de la persona es: $edad años<br>";

// Encontrar el número mayor entre dos números
$primerNumero = 10;
$segundoNumero = 20;
if ($primerNumero > $segundoNumero) {
    echo "El mayor es: $primerNumero<br>";
} elseif ($segundoNumero > $primerNumero) {
    echo "El mayor es: $segundoNumero<br>";
} else {
    echo "Ambos números son iguales<br>";
}

// Determinar si un número es par o impar
$numeroSeleccionado = 15;
if ($numeroSeleccionado % 2 == 0) {
    echo "El número es par<br>";
} else {
    echo "El número es impar<br>";
}

// Calcular el factorial de un número
$numeroBase = 5;
$factorial = 1;
while ($numeroBase > 1) {
    $factorial *= $numeroBase;
    $numeroBase--;
}
echo "El factorial es: $factorial<br>";

// Generar un array de 20 números aleatorios y ordenarlos de mayor a menor
$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100);
}
rsort($numeros);
echo "Números ordenados de mayor a menor: ";
foreach ($numeros as $numero) {
    echo "$numero ";
}
echo "<br>";

// Mostrar información de los alumnos
$alumnos = array(
    array('alumno' => 'Juan', 'curso' => 'Matemáticas', 'nota' => '85'),
    array('alumno' => 'María', 'curso' => 'Historia', 'nota' => '92'),
    array('alumno' => 'Jose', 'curso' => 'Ingles', 'nota' => '34'),
    array('alumno' => 'Eduardo', 'curso' => 'Sociales', 'nota' => '67'),
    array('alumno' => 'Angela', 'curso' => 'Programacion', 'nota' => '82'),
    array('alumno' => 'Andrea', 'curso' => 'Ciencias Naturales', 'nota' => '99'),
    array('alumno' => 'Luis', 'curso' => 'Industriales', 'nota' => '72'),
    array('alumno' => 'Chris', 'curso' => 'Emprendimiento', 'nota' => '52'),
    array('alumno' => 'Janeth', 'curso' => 'Quimica', 'nota' => '27'),
    array('alumno' => 'Estevan', 'curso' => 'Fisica', 'nota' => '66'),
);

foreach ($alumnos as $alumno) {
    echo "Alumno: " . $alumno['alumno'] . ", Curso: " . $alumno['curso'] . ", Nota: " . $alumno['nota'] . "<br>";
}

?>
