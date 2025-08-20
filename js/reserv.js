const totalEspacios = 40;
const estados = ["disponible", "ocupado", "reservado"];
const contenedor = document.getElementById("contenedor-cuadros");
const botonReserva = document.querySelector(".boton-reserva");

let conteo = {
  disponible: 0,
  ocupado: 0,
  reservado: 0
};

let seleccionado = null; // Guardar el cuadro seleccionado

for (let i = 1; i <= totalEspacios; i++) {
  const estado = estados[Math.floor(Math.random() * estados.length)];

  const cuadro = document.createElement("div");
  cuadro.classList.add("cuadro", estado);
  cuadro.innerHTML = `
    <div class="numero">${i}</div>
    <div class="estado">${estado.charAt(0).toUpperCase() + estado.slice(1)}</div>
  `;

  // Solo los disponibles pueden ser seleccionados
  if (estado === "disponible") {  
    cuadro.style.cursor = "pointer";
    cuadro.addEventListener("click", function () {
      // Quitar selección previa
      if (seleccionado) {
        seleccionado.classList.remove("seleccionado");
      }
      // Seleccionar este cuadro
      cuadro.classList.add("seleccionado");
      seleccionado = cuadro;
      // Habilitar botón de reserva
      botonReserva.disabled = false;
    });
  }

  contenedor.appendChild(cuadro);
  conteo[estado]++;
}

// Actualizar conteos
document.getElementById("conteo-disponible").textContent = conteo.disponible;
document.getElementById("conteo-ocupado").textContent = conteo.ocupado;
document.getElementById("conteo-reservado").textContent = conteo.reservado;

// Deshabilitar el botón de reserva al inicio
botonReserva.disabled = true;


