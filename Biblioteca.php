<?php

class Biblioteca {
    private array $categorias = [];
    private array $autores = [];
    private array $libros = [];

    public function agregarCategoria(Categoria $categoria): void {
        $this->categorias[$categoria->getId()] = $categoria;
    }

    public function agregarAutor(Autor $autor): void {
        $this->autores[$autor->getId()] = $autor;
    }

    public function agregarLibro(Libro $libro): void {
        $this->libros[$libro->getId()] = $libro;
    }

    public function buscarLibroPorNombre(string $nombre): ?Libro {
        foreach ($this->libros as $libro) {
            if ($libro->getNombre() === $nombre) {
                return $libro;
            }
        }
        return null;
    }

    public function obtenerLibros(): array {
        return $this->libros;
    }
}
?>
