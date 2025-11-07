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

    .psico-img {
      width: 220px;
      height: 140px;
      border-radius: 12px;
      background: url('https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=') center/cover no-repeat;
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
      <h1 class="psico-titulo">Estrés moderado</h1>

      <div class="psico-bloque">
        <p>
          Tu nivel de estrés está en un punto medio, lo que significa que probablemente empezás a sentir que las responsabilidades o preocupaciones te están afectando un poco más de lo normal. Podés notar que te cuesta concentrarte, que te cansás con facilidad o que te cuesta relajarte después de estudiar.

        </p>
        <div class="psico-img"></div>
      </div>

      <div class="psico-bloque">
        <p>
          En esta etapa es importante organizar mejor tu tiempo y tus actividades. Una buena estrategia es priorizar las tareas más importantes, dividir los trabajos grandes en partes más pequeñas y dejar momentos para descansar o desconectarte. Además, podés incorporar técnicas simples de relajación, como respirar profundo unos minutos, estirarte o dar una breve caminata cuando estés saturado/a.
</p>
      </div>

      <div class="psico-bloque">
        <p>
          También puede ayudarte revisar tus hábitos diarios: dormir lo suficiente, evitar el uso excesivo del celular o las pantallas y mantener una alimentación saludable. Hablar con alguien de confianza —un amigo, familiar o docente— también puede darte alivio y nuevas ideas para manejar las situaciones que te generan tensión. Si este nivel de estrés se repite seguido, es recomendable buscar estrategias más específicas o incluso conversar con un profesional para aprender nuevas formas de afrontarlo.

        </p>
        <div class="psico-img"></div>
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
