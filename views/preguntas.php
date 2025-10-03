<?php
require_once('config.php');

// Iniciar sesión si no lo está
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Si se reinicia la página sin id, redirigir a la primera pregunta y limpiar todo
if (!isset($_GET['id'])) {
    $conn->query("DELETE FROM resultados");
    $_SESSION['ultima_pregunta'] = 1; // reinicia el control de preguntas
    header("Location: preguntas.php?id=1");
    exit;
}

// id de la pregunta actual
$id = (int)$_GET['id'];

//Si la sesión tiene almacenada la última pregunta y el usuario hizo "Atrás"
if (isset($_SESSION['ultima_pregunta']) && $id < $_SESSION['ultima_pregunta']) {
    // Borrar la última respuesta ingresada
    $conn->query("DELETE FROM resultados ORDER BY id_resultado DESC LIMIT 1");
}

//Guardar la última pregunta visitada en la sesión
$_SESSION['ultima_pregunta'] = $id;

//Limpiar puntajes anteriores solo si es la primera pregunta
if ($id === 1) {
    $conn->query("DELETE FROM resultados");
}

// Traer la pregunta
$sqlPregunta = "SELECT * FROM preguntastest WHERE id_pregunta = $id";
$resPregunta = $conn->query($sqlPregunta);

// Si no hay más preguntas, redirigir a resultado.php
if ($resPregunta->num_rows == 0) {
    header("Location: resultado.php");
    exit;
}

$row = $resPregunta->fetch_assoc();
$pregunta = $row["preguntas"];

// Traer respuestas vinculadas
$sqlRespuestas = "
    SELECT r.id_respuesta, r.respuesta 
    FROM respuestastest r
    INNER JOIN pregunta_respuesta pr ON r.id_respuesta = pr.id_respuesta
    WHERE pr.id_pregunta = $id
";
$resRespuestas = $conn->query($sqlRespuestas);

// Calcular el id máximo para saber cuándo terminar
$sqlMax = "SELECT MAX(id_pregunta) AS max_id FROM preguntastest";
$resMax = $conn->query($sqlMax);
$rowMax = $resMax->fetch_assoc();
$maxId = $rowMax["max_id"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pregunta anónima</title>
  <link rel="stylesheet" href="estilos1.css" />
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

  <main class="encuesta-pregunta">
    <h2>Pregunta anónima</h2>

    <div class="pregunta">
      <p><?php echo $pregunta; ?></p>
    </div>

    <form action="guardar_respuesta.php" method="POST">
      <section class="respuestas">
        <h3>Respuesta</h3>
        <ul>
          <?php if ($resRespuestas->num_rows > 0): ?>
              <?php while ($row = $resRespuestas->fetch_assoc()): ?>
                  <li>
                    <label>
                      <input type="radio" name="respuesta" value="<?php echo $row['id_respuesta']; ?>" required>
                      <?php echo $row['respuesta']; ?>
                    </label>
                  </li>
              <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </section>

      <input type="hidden" name="id_pregunta" value="<?php echo $id; ?>">

      <div class="navegacion">
        <?php if ($id > 1): ?>
          <a href="preguntas.php?id=<?php echo $id - 1; ?>">
            <button type="button" class="atras">Atrás</button>
          </a>
        <?php endif; ?>
        <button type="submit" class="siguiente">Siguiente</button>
      </div>
    </form>
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
