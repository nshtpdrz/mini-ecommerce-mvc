<?php
// Se requiere el archivo de conexión a la BD
require_once __DIR__ . '/../config/db.php';

class Producto { 
    // Método para obtener todos los productos activos
    public static function obtenerTodos() { 
        global $conexion; 
        $sql = "SELECT * FROM productos WHERE estado = 'activo'"; 
        $stmt = $conexion->prepare($sql); 
        $stmt->execute(); 
        // Retorna un arreglo asociativo con los datos
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } 
} 
?> 