<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema STEM</title>
    <link rel="stylesheet" href="css/problemaStem.css">
    <script src="js/calcularStem.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1>Problemas STEM: Ciencia, Tecnología, Ingeniería y Matemáticas</h1>
        </header>
        <main>
            <!-- Problema -->
            <section class="card problema">
                <h2>Problema:</h2>
                <p>
                    Desde lo alto de un rascacielos de 300 m de altura se lanza verticalmente hacia abajo 
                    una piedra con una velocidad inicial de 10 m/s.
                    <ol>
                        <li>a) ¿Con qué velocidad llega al suelo?</li>
                        <li>b) ¿Cuánto tiempo tarda en caer?</li>
                    </ol>
                </p>
            </section>

            <!-- Esquema -->
            <section class="card esquema">
                <h2>Esquema</h2>
                <img class="img-problema" src="images/problema.png" alt="Esquema del problema">
            </section>

            <!-- Datos -->
            <section class="card datos">
                <h2>Datos proporcionados</h2>
                <ul>
                    <li>Altura (h): 300 m</li>
                    <li>Velocidad inicial (\(v_0\)): 10 m/s</li>
                    <li>Gravedad (g): 9.8 m/s²</li>
                </ul>
            </section>

            <!-- Fórmulas -->
            <section class="card formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li>Tiempo de caída: \( h = v_0 \cdot t + \frac{1}{2} \cdot g \cdot t^2 \)</li>
                    <li>Velocidad al llegar al suelo: \( v = v_0 + g \cdot t \)</li>
                </ul>
            </section>

            <!-- Botón de cálculos -->
            <section class="card calculos">
                <h2>Solución</h2>
                <button class="btn" onclick="calcular();">Calcular</button>
            </section>

            <!-- Resultados -->
            <section class="card resultado">
                <h2>Resultado</h2>
                <div id="resultadoA"></div>
            </section>
        </main>
        <footer>
            <p>Creative Commons versión 3.0 SciSoft 2024</p>
        </footer>
    </div>
</body>
</html>
