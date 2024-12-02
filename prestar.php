<?php

// Crear un estudiante
$estudiante = new Estudiante(1, "Juan Pérez", "2022-12345");

// Prestar un libro
if ($libro1984->prestar()) {
    $prestamo = new Prestamo(1, $estudiante, $libro1984);
    $estudiante->agregarPrestamo($prestamo);
    echo "El libro '1984' ha sido prestado a " . $estudiante->getNombre() . ".\n";
} else {
    echo "El libro '1984' no está disponible.\n";
}
?>
