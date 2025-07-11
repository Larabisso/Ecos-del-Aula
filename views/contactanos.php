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
      <a href="#">Sobre nosotros</a>
      <a href="#">Contacto</a>
    </nav>
  </header>

  <main class="contacto">
    <h1>Contactanos</h1>
    <form>
      <label>Nombre y apellido:</label>
      <input type="text" required />

      <label>Email:</label>
      <input type="email" required />

      <label>Telefono:</label>
      <input type="tel" />

      <label>Mensaje:</label>
      <textarea rows="4" required></textarea>

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
