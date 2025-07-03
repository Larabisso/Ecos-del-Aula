<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Página con Header y Footer</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #2e7d32; /* verde oscuro */
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #388e3c; /* otro tono de verde */
            color: white;
            padding: 15px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        main {
            padding: 20px;
            margin-bottom: 60px; /* espacio para el footer fijo */
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenido a mi sitio</h1>
</header>

<main>
    <p>Este es el contenido principal de la página.</p>
</main>

<footer>
    <p>© 2025 Mi Sitio Web - Todos los derechos reservados</p>
</footer>

</body>
</html>
