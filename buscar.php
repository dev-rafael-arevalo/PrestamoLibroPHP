<?php

// Buscar un libro por su nombre
$libroBuscado = $biblioteca->buscarLibroPorNombre("1984");

if ($libroBuscado) {
    echo "Libro encontrado: " . $libroBuscado->getNombre() . "\n";
    echo "Autor: " . $libroBuscado->getId() . "\n";
} else {
    echo "Libro no encontrado.\n";
}
?>
