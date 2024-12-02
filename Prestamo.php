<?php

class Prestamo {
    private int $id;
    private Estudiante $estudiante;
    private Libro $libro;
    private DateTime $fechaPrestamo;
    private ?DateTime $fechaDevolucion = null;

    public function __construct(int $id, Estudiante $estudiante, Libro $libro) {
        $this->id = $id;
        $this->estudiante = $estudiante;
        $this->libro = $libro;
        $this->fechaPrestamo = new DateTime();
    }

    public function devolver(): void {
        $this->fechaDevolucion = new DateTime();
        $this->libro->devolver();
    }

    public function obtenerEstado(): string {
        return $this->fechaDevolucion ? "Devuelto" : "En préstamo";
    }
}
?>
