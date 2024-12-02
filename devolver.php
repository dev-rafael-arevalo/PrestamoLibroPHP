<?php

// Devolver el libro
$prestamo->devolver();

echo "El libro '1984' ha sido devuelto.\n";
echo "Estado actual del préstamo: " . $prestamo->obtenerEstado() . ".\n";
?>
