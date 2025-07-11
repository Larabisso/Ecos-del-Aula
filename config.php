<?php
session_start();
// Definición de las constantes de configuración para la base de datos
define('DB_SERVER', 'localhost');   // Nombre del servidor, generalmente 'localhost' en XAMPP
define('DB_USER', 'root');          // Nombre de usuario de la base de datos (por defecto es 'root' en XAMPP)
define('DB_PASS', '');              // Contraseña de la base de datos (generalmente está vacía en XAMPP)
define('DB_NAME', 'ecos-del-aula');  // Nombre de la base de datos

define('APP_URL', '//localhost/ecos-del-aula');    // URL base de la aplicación

// Conexión a la base de datos / Database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Verifica si la conexión fue exitosa / Checks if the connection was successful
if ($connection) {
    $message = "El acceso a la DB ha sido exitoso"; // Database access was successful
} else {
    $message = "El acceso a la DB ha fallado: " . mysqli_connect_error(); // Database access failed
}
?>