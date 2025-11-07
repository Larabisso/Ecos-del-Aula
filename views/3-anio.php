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
      background: url('img/nenes9.jpg') center/cover no-repeat;
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
      flex-shrink: 0;
    }
    .psico-img2 {
      width: 220px;
      height: 140px;
      border-radius: 12px;
      background: url('img/nenes4.jpg') center/cover no-repeat;
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
      <h1 class="psico-titulo">Tercer año – El miedo al fracaso y la exigencia del rendimiento
</h1>

      <div class="psico-bloque">
        <p>
        El tercer año marca un momento en el que los estudiantes comienzan a experimentar una mayor presión académica y personal. Los contenidos escolares se vuelven más complejos y las expectativas de rendimiento aumentan, tanto por parte de los docentes como de las familias y del propio estudiante.

        </p>
        <div class="psico-img1"></div>
      </div>

      <div class="psico-bloque">
        <p>
          El miedo predominante en esta etapa suele ser el temor al fracaso o a no estar a la altura de las exigencias. Este sentimiento puede generar ansiedad, frustración y una autocrítica excesiva que afecta la motivación.
 </p>
      </div>

      <div class="psico-bloque">
        <p>
    Desde lo psicológico, es una etapa clave para fortalecer la autopercepción de competencia y promover estrategias de afrontamiento ante los desafíos. Aprender a reconocer los errores como parte del proceso de aprendizaje, y no como fracasos personales, constituye un avance esencial hacia la madurez emocional. Asimismo, el acompañamiento institucional y familiar debe orientarse a equilibrar la exigencia con el apoyo emocional, promoviendo la confianza y el desarrollo de la autonomía.

        </p>
        <div class="psico-img2"></div>
      </div>

    
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
