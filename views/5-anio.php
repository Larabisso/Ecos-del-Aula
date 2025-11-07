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
      <h1 class="psico-titulo"> Quinto año – El miedo a decidir y la proyección del futuro

</h1>

      <div class="psico-bloque">
        <p>
         En quinto año se evidencia con claridad el miedo a tomar decisiones trascendentes relacionadas con el futuro académico, laboral y personal. Aparece la preocupación por la elección de una carrera o por la inserción en el mundo del trabajo, acompañada por la sensación de que cada decisión puede determinar el rumbo de la vida.

        </p>
        <div class="psico-img"></div>
      </div>

      <div class="psico-bloque">
        <p>
  Este miedo refleja la ansiedad propia del proceso de individuación, donde el adolescente comienza a reconocerse como sujeto autónomo, responsable de sus elecciones. Desde la perspectiva psicológica, se trata de un miedo evolutivo que, bien acompañado, puede transformarse en un motor de crecimiento.
 </p>
      </div>

      <div class="psico-bloque">
        <p>
El desafío radica en equilibrar la libertad con la responsabilidad, aprendiendo a tomar decisiones informadas y a tolerar la incertidumbre. En esta etapa, el acompañamiento docente y la orientación vocacional adquieren una relevancia especial para brindar herramientas que permitan al estudiante planificar su futuro desde un lugar de seguridad y autoconfianza.

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
