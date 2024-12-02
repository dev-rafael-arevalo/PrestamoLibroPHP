<?php

class Estudiante extends Entidad {
    private string $carnet;
    private array $prestamos = [];

    public function __construct(int $id, string $nombre, string $carnet) {
        parent::__construct($id, $nombre);
        $this->carnet = $carnet;
    }

    public function agregarPrestamo(Prestamo $prestamo): void {
        $this->prestamos[] = $prestamo;
    }

    public function obtenerPrestamos(): array {
        return $this->prestamos;
    }
}
?>
