<?php
require_once(__DIR__ . '/../config.php'); // subir un nivel porque resultado.php está dentro de /views

// Traer la suma de puntajes
$sqlSuma = "SELECT SUM(puntaje_total) AS total_puntos FROM resultados"; 
$resSuma = $conn->query($sqlSuma);

$totalPuntos = 0;
if ($resSuma && $resSuma->num_rows > 0) {
    $row = $resSuma->fetch_assoc();
    $totalPuntos = $row['total_puntos'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultado - Ecos del Aula</title>
  <link rel="stylesheet" href="estilos1.css" />
</head>
<body>
  <header>
  <div class="logo">
    <a href="index.php">
      <img src="img/ex.png" alt="Texto alternativo">
    </a>
  </div>
  <nav>
    <a href="index.php">Inicio</a>
    <a href="sobreNosotros.php">Sobre nosotros</a>
    <a href="contactanos.php">Contacto</a>
  </nav>
</header>

  <main class="principal">
    <section class="descripcion">
      <h1>Resultados acumulados</h1>
      <p>El puntaje total acumulado de todas las encuestas es:</p>
      <h2><?php echo $totalPuntos; ?></h2>
    </section>
  </main>

  <footer class="footer-completo">
    <div class="footer-columna">
      <img src="img/e.png" alt="Logo Ecos del Aula" class="footer-logo" />
      <p>2025 Ecos del Aula. Todos los derechos reservados.</p>
    </div>
    <div class="footer-columna">
      <h4>Enlaces</h4>
      <a href="index.php">Inicio</a><br />
      <a href="sobreNosotros.php">Sobre nosotros</a><br />
      <a href="contactanos.php">Contacto</a>
    </div>
    <div class="footer-columna">
      <h4>Contacto</h4>
      <p>Email: ecosdelaula@gmail.com</p>
    </div>
  </footer>
</body>
</html>
