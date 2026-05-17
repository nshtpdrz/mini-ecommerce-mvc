<?php
// Configuración de las credenciales de la base de datos
$host = "127.0.0.1"; 
$port = "3306"; 
$dbname = "ecommerce"; 
$user = "root"; 
$password = "nueva_contraseña"; // Cambia esto por tu contraseña real

try {
    // Creación de la instancia PDO para conectar a MySQL
    $conexion = new PDO( 
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", 
        $user, 
        $password
    );
    // Configuración para el manejo de errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // echo "Conexión exitosa"; // Comentado para no afectar el diseño de la vista 
} catch (PDOException $e) { 
    die("Error de conexión: " . $e->getMessage());
}
?> 