<?php

class Libro extends Entidad {
    private Autor $autor;
    private Categoria $categoria;
    private bool $disponible;

    public function __construct(int $id, string $nombre, Autor $autor, Categoria $categoria) {
        parent::__construct($id, $nombre);
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->disponible = true;
    }

    public function prestar(): bool {
        if ($this->disponible) {
            $this->disponible = false;
            return true;
        }
        return false;
    }

    public function devolver(): void {
        $this->disponible = true;
    }

    public function estaDisponible(): bool {
        return $this->disponible;
    }
}
?>
