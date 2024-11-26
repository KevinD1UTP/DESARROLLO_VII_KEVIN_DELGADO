<?php
// 1. Patrón de triángulo rectángulo usando un bucle for
echo "<h3>Triángulo rectángulo:</h3>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

// 2. Mostrar números impares del 1 al 20 usando un bucle while
echo "<h3>Números impares del 1 al 20:</h3>";
$num = 1;
while ($num <= 20) {
    if ($num % 2 != 0) { // Verifica si el número es impar
        echo $num . " ";
    }
    $num++;
}

// 3. Contador regresivo desde 10 hasta 1, saltando el número 5 con un bucle do-while
echo "<h3>Contador regresivo (saltando 5):</h3>";
$contador = 10;
do {
    if ($contador == 5) {
        $contador--;
        continue; // Salta el número 5
    }
    echo $contador . " ";
    $contador--;
} while ($contador >= 1);