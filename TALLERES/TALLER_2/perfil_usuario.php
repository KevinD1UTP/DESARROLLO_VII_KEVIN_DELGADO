<?php
$nombre_completo = "Kevin Delgado";
$edad = 25;  
$correo = "delgadokev13@gmail.com";
$telefono = "68128315";  

define("OCUPACION", "Estudiante"); 

echo "<p>Nombre completo: " . $nombre_completo . "</p>";
print "<p>Edad: " . $edad . "</p>";
printf("<p>Correo electrónico: %s</p>", $correo);
echo "<p>Teléfono: {$telefono}</p>";
echo "<p>Ocupación: " . OCUPACION . "</p>";

echo "<hr>";
echo "<pre>";
var_dump($nombre_completo);
var_dump($edad);
var_dump($correo);
var_dump($telefono);
var_dump(OCUPACION);
echo "</pre>";
?>
