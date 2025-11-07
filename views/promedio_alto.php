<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecos del Aula</title>
  <link rel="stylesheet" href="estilos1.css" />
  <link rel="icon" href="img/e.png" type="image/x-icon">
  <style>
    /* CSS inline para evitar problemas de ruta */
    .psico-main {
      padding: 40px 8%;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      box-sizing: border-box;
    }

    .psico-contenido {
      background: rgba(255,255,255,0.92);
      border-radius: 18px;
      padding: 36px;
      max-width: 1000px;
      margin: 0 auto;
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    }

    .psico-titulo {
      font-size: 2rem;
      color: #1b4332;
      font-style: italic;
      text-align: center;
      margin-bottom: 30px;
    }

    .psico-bloque {
      display: flex;
      gap: 32px;
      align-items: flex-start;
      margin-bottom: 28px;
    }

    .psico-bloque p {
      flex: 1;
      text-indent: 2em;
      text-align: justify;
      line-height: 1.7;
      color: #08311a;
      margin: 0;
    }

    .psico-img1 {
      width: 220px;
      height: 140px;
      border-radius: 12px;
      background: url('img/estresado1.jpg') center/cover no-repeat;
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
      flex-shrink: 0;
    }
    .psico-img2 {
      width: 220px;
      height: 140px;
      border-radius: 12px;
      background: url('img/estresado2.jpg') center/cover no-repeat;
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
      flex-shrink: 0;
    }

    .psico-subtitulo {
      color: #2d6a4f;
      font-size: 1.4rem;
      margin-top: 20px;
      margin-bottom: 12px;
    }

    @media (max-width: 820px) {
      .psico-bloque { flex-direction: column; }
      .psico-img { width: 100%; height: 200px; }
    }
  </style>
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

  <main class="psico-main">
    <section class="psico-contenido">
      <h1 class="psico-titulo">Estrés alto</h1>

      <div class="psico-bloque">
        <p>
          Un nivel alto de estrés indica que estás pasando por un momento de mucha presión o sobrecarga emocional, y eso puede afectar tu salud física y mental. Podés sentirte muy cansado/a, con dificultad para concentrarte, cambios de humor, problemas para dormir o incluso molestias físicas como dolores de cabeza o tensión muscular.

        </p>
        <div class="psico-img1"></div>
      </div>

      <div class="psico-bloque">
        <p>
          En este caso, no es recomendable que enfrentes el estrés solo/a. Buscar apoyo en un docente, un familiar o un psicólogo escolar puede ayudarte a encontrar formas más efectivas de sobrellevar lo que estás sintiendo. No se trata de debilidad, sino de cuidar tu bienestar y pedir la ayuda que necesitás.
 </p>
      </div>

      <div class="psico-bloque">
        <p>
          También es importante que revises tu rutina diaria: descansá lo suficiente, mantené horarios regulares, alimentate bien y limitá el tiempo frente a las pantallas. Realizar actividad física, escuchar música, dibujar, hacer pausas activas o practicar ejercicios de respiración puede ayudarte a liberar tensiones y sentirte mejor.

        </p>
        <div class="psico-img2"></div>
      </div>

      <h2 class="psico-subtitulo">Cada etapa es un desafío</h2>
      <p style="text-indent:2em; text-align:justify; line-height:1.7; color:#08311a;">
        Recordá que cuidar tu salud emocional es tan importante como cuidar tu rendimiento académico. Pedir ayuda y tomarte tiempo para vos mismo/a es una forma de fortalecerte y mejorar tu bienestar general.
      </p>
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
