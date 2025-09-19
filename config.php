<?php
// Inicia la sesión solo si no está ya iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Definir constantes solo si aún no están definidas
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'localhost');   // Nombre del servidor
    define('DB_USER', 'root');          // Usuario (en XAMPP suele ser 'root')
    define('DB_PASS', '');              // Contraseña (vacía en XAMPP por defecto)
    define('DB_NAME', 'ecos-del-aula'); // Nombre de la base de datos

    define('APP_URL', '//localhost/proyectolara/ecos-del-aula'); // URL base
}

// Crear la conexión a la base de datos (usamos $conn para ser consistente)
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
