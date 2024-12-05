<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema STEM</title>
    <link rel="stylesheet" href="css/problemaStem.css">
    <script>function calcular() {
    // Datos iniciales
    const altura = 300; // metros
    const velocidadInicial = 10; // m/s
    const gravedad = 9.8; // m/s^2

    // Resolviendo para el tiempo usando la ecuación cuadrática
    // h = v0 * t + (1/2) * g * t^2
    // 0.5 * g * t^2 + v0 * t - h = 0
    const a = 0.5 * gravedad;
    const b = velocidadInicial;
    const c = -altura;

    const discriminante = Math.sqrt(b * b - 4 * a * c);
    const t1 = (-b + discriminante) / (2 * a);
    const t2 = (-b - discriminante) / (2 * a);

    const tiempo = Math.max(t1, t2); // Tomamos el tiempo positivo

    // Velocidad final
    const velocidadFinal = velocidadInicial + gravedad * tiempo;

    // Mostrar resultados
    const resultadoDiv = document.getElementById("resultadoA");
    resultadoDiv.innerHTML = `
        <p>a) Velocidad al llegar al suelo: <strong>${velocidadFinal.toFixed(2)} m/s</strong></p>
        <p>b) Tiempo de caída: <strong>${tiempo.toFixed(2)} segundos</strong></p>
    `;
}</script>
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
