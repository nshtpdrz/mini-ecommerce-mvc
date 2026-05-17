<?php
// Requerimos el modelo
require_once __DIR__ . '/../models/Producto.php'; 

class ProductoController { 
    public function mostrarCatalogo() { 
        // Se solicitan los productos al modelo
        $productos = Producto::obtenerTodos(); 
        // Manda los datos a la vista para ser mostrados 
        require __DIR__ . '/../views/catalogo.php'; 
    } 
} 
?> 