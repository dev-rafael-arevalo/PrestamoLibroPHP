<?php

class Categoria extends Entidad {
    private array $libros = [];

    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }

    public function obtenerLibros(): array {
        return $this->libros;
    }
}
?>
