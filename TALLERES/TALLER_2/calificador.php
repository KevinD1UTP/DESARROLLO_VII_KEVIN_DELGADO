<?php

$calificacion = 85;

// Determinar la letra de la calificación con if-elseif-else
if ($calificacion >= 90) {
    $letra = 'A';
} elseif ($calificacion >= 80) {
    $letra = 'B';
} elseif ($calificacion >= 70) {
    $letra = 'C';
} elseif ($calificacion >= 60) {
    $letra = 'D';
} else {
    $letra = 'F';
}

echo "Tu calificación es $letra. ";

// Determinar si es aprobado o reprobado con el operador ternario
echo ($letra != 'F') ? "Aprobado. " : "Reprobado. ";

// Mensaje adicional basado en la letra de la calificación usando switch
switch ($letra) {
    case 'A':
        echo "Excelente trabajo.";
        break;
    case 'B':
        echo "Buen trabajo.";
        break;
    case 'C':
        echo "Trabajo aceptable.";
        break;
    case 'D':
        echo "Necesitas mejorar.";
        break;
    case 'F':
        echo "Debes esforzarte más.";
        break;
}
?>
