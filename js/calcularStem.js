function calcular() {
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
}