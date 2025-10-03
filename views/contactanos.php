<?php
require_once('config.php'); // Aquí va tu conexión a la BD

// Inicializar mensajes
$mensaje_exito = "";
$mensaje_error = "";

// Procesar formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'];
    $email    = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje  = $_POST['mensaje'];
    $fecha    = date("Y-m-d H:i:s");

    // Insertar en la tabla contacto
    $sql = "INSERT INTO contacto (nombre, email, telefono, mensaje, fecha) 
            VALUES ('$nombre', '$email', '$telefono', '$mensaje', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        $mensaje_exito = "¡Gracias por contactarnos, $nombre! Tu mensaje fue enviado correctamente.";
    } else {
        $mensaje_error = "Error al guardar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contactanos - Ecos del Aula</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <header>
    <div class="logo">
      <img src="img/ex.png" alt="Texto alternativo">
    </div>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="sobreNosotros.php">Sobre nosotros</a>
      <a href="contactanos.php">Contacto</a>
    </nav>
  </header>

  <main class="contacto">
    <h1>Contactanos</h1>

    <?php if (!empty($mensaje_exito)) { ?>
        <p style="color:green;"><?= $mensaje_exito ?></p>
    <?php } elseif (!empty($mensaje_error)) { ?>
        <p style="color:red;"><?= $mensaje_error ?></p>
    <?php } ?>

    <form action="" method="POST">
      <label>Nombre y apellido:</label>
      <input type="text" name="nombre" required />

      <label>Email:</label>
      <input type="email" name="email" required />

      <label>Telefono:</label>
      <input type="tel" name="telefono" />

      <label>Mensaje:</label>
      <textarea name="mensaje" rows="4" required></textarea>

      <button type="submit">CONSULTAR</button>
    </form>
  </main>

  <footer class="footer-completo">
    <div class="footer-columna">
      <img src="img/e.png" alt="Logo Ecos del Aula" class="footer-logo" />
      <p>2025 Ecos del Aula. Todos los derechos reservados.</p>
    </div>

    <div class="footer-columna">
      <h4>Enlaces</h4>
      <a href="#">Inicio</a><br />
      <a href="#">Sobre nosotros</a><br />
      <a href="#">Contacto</a>
    </div>

    <div class="footer-columna">
      <h4>Contacto</h4>
      <p>Email: ecosdelaula@gmail.com</p>
    </div>
  </footer>
</body>
</html>
