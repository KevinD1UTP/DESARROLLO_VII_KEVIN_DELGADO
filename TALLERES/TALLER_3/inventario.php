<?php
// 1. Función para leer el inventario desde el archivo JSON
function leerInventario($archivo) {
    $contenido = file_get_contents($archivo);  // Leer el archivo JSON
    return json_decode($contenido, true);  // Convertir JSON a array asociativo
}

// 2. Función para ordenar el inventario alfabéticamente por nombre del producto
function ordenarInventario(&$inventario) {
    usort($inventario, function($a, $b) {
        return strcmp($a['nombre'], $b['nombre']);
    });
}

// 3. Función para mostrar un resumen del inventario
function mostrarResumen($inventario) {
    echo "<h3>Resumen del Inventario:</h3>";
    echo "<table border='1'><tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr>";
    foreach ($inventario as $producto) {
        echo "<tr><td>{$producto['nombre']}</td><td>{$producto['precio']}</td><td>{$producto['cantidad']}</td></tr>";
    }
    echo "</table>";
}

// 4. Función para calcular el valor total del inventario
function calcularValorTotal($inventario) {
    $valorTotal = array_sum(array_map(function($producto) {
        return $producto['precio'] * $producto['cantidad'];
    }, $inventario));
    echo "<h3>Valor Total del Inventario: $" . number_format($valorTotal, 2) . "</h3>";
}

// 5. Función para generar un informe de productos con stock bajo (menos de 5 unidades)
function informeStockBajo($inventario) {
    $stockBajo = array_filter($inventario, function($producto) {
        return $producto['cantidad'] < 5;
    });
    
    if (empty($stockBajo)) {
        echo "<h3>No hay productos con stock bajo.</h3>";
    } else {
        echo "<h3>Productos con Stock Bajo:</h3>";
        echo "<table border='1'><tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr>";
        foreach ($stockBajo as $producto) {
            echo "<tr><td>{$producto['nombre']}</td><td>{$producto['precio']}</td><td>{$producto['cantidad']}</td></tr>";
        }
        echo "</table>";
    }
}

// Script principal
$archivo = 'inventario.json';  // Nombre del archivo JSON
$inventario = leerInventario($archivo);  // Leer inventario

// Ordenar el inventario
ordenarInventario($inventario);

// Mostrar resumen del inventario
mostrarResumen($inventario);

// Calcular y mostrar el valor total del inventario
calcularValorTotal($inventario);

// Generar informe de productos con stock bajo
informeStockBajo($inventario);
?>