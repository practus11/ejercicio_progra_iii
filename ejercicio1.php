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

?>