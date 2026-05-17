<?php // Cargamos el controlador principal
require_once 'controllers/ProductoController.php'; 

// Instanciamos el controlador
$controller = new ProductoController(); 
// Ejecutamos el método para mostrar el catálogo
$controller->mostrarCatalogo();
?> 