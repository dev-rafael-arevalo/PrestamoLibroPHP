<?php

require_once 'Entidad.php';
require_once 'Categoria.php';
require_once 'Autor.php';
require_once 'Libro.php';
require_once 'Biblioteca.php';
require_once 'Prestamo.php';
require_once 'Estudiante.php';

// Crear instancia de la biblioteca
$biblioteca = new Biblioteca();

// Agregar categorías
$categoriaFiccion = new Categoria(1, "Ficción");
$categoriaCiencia = new Categoria(2, "Ciencia");
$biblioteca->agregarCategoria($categoriaFiccion);
$biblioteca->agregarCategoria($categoriaCiencia);

// Agregar autores
$autorOrwell = new Autor(1, "George Orwell");
$autorAsimov = new Autor(2, "Isaac Asimov");
$biblioteca->agregarAutor($autorOrwell);
$biblioteca->agregarAutor($autorAsimov);

// Agregar libros
$libro1984 = new Libro(1, "1984", $autorOrwell, $categoriaFiccion);
$libroFundacion = new Libro(2, "Fundación", $autorAsimov, $categoriaCiencia);
$biblioteca->agregarLibro($libro1984);
$biblioteca->agregarLibro($libroFundacion);

echo "Sistema inicializado con éxito.\n";
?>
