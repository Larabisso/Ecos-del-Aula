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
      background: url('img/nenes7.jpg') center/cover no-repeat;
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
      flex-shrink: 0;
    }
    .psico-img2 {
      width: 220px;
      height: 140px;
      border-radius: 12px;
      background: url('img/nenes9.jpg') center/cover no-repeat;
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
      <h1 class="psico-titulo">Segundo año – El miedo a no pertenecer y la construcción de la identidad
</h1>

      <div class="psico-bloque">
        <p>
          En segundo año, los adolescentes ya se encuentran más familiarizados con la dinámica institucional, pero comienzan a enfrentar otro tipo de desafío: el miedo a no pertenecer plenamente.

        </p>
        <div class="psico-img1"></div>
      </div>

      <div class="psico-bloque">
        <p>
          Esta etapa se caracteriza por una fuerte búsqueda de identidad personal y social, donde el grupo de pares adquiere un papel central en la validación y el reconocimiento del yo. Surgen comparaciones, preocupaciones por la apariencia, la aceptación y el lugar que se ocupa dentro del grupo.
 </p>
      </div>

      <div class="psico-bloque">
        <p>
          Desde una perspectiva psicológica, este miedo se relaciona con la necesidad de afirmar la individualidad sin quedar excluido del entorno social. Es una etapa de exploración y ajuste en la que los adolescentes ponen a prueba sus valores, intereses y formas de vincularse. El rol de la escuela y los adultos de referencia resulta fundamental para fomentar la tolerancia, la empatía y la autenticidad, ayudando al estudiante a sostener su identidad en un contexto de constante cambio.

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
