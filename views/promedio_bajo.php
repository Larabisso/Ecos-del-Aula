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
      background: url('img/relajado1.jpg') center/cover no-repeat;
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
      flex-shrink: 0;
    }
    .psico-img2 {
      width: 220px;
      height: 140px;
      border-radius: 12px;
      background: url('img/relajado2.jpg') center/cover no-repeat;
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
      <h1 class="psico-titulo">Estrés bajo</h1>

      <div class="psico-bloque">
        <p>
         Tu nivel de estrés es bajo, lo que indica que sabés manejar bien las presiones académicas y tus tiempos personales. Esto muestra que podés equilibrar tus responsabilidades con momentos de descanso, diversión y autocuidado. Tener este tipo de equilibrio es muy positivo, porque te permite mantener un buen rendimiento sin descuidar tu bienestar emocional.

        </p>
        <div class="psico-img1"></div>
      </div>

      <div class="psico-bloque">
        <p>
          Seguí fortaleciendo esos hábitos saludables: dormir bien, alimentarte de forma equilibrada y dedicarte a actividades que disfrutes. También es importante que mantengas una buena organización y planificación de tus tareas. Esto te va a ayudar mucho cuando lleguen momentos de más exigencia, como exámenes o entregas importantes, y así podrás evitar que el estrés aumente.
 </p>
      </div>

      <div class="psico-bloque">
        <p>
          Aunque tu nivel de estrés sea bajo, es normal sentir cierta tensión ante nuevos desafíos. Lo importante es que esas pequeñas preocupaciones no se acumulen. Si seguís cuidando tu salud mental y emocional, vas a poder mantener este equilibrio y responder de manera positiva ante cualquier dificultad.

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
