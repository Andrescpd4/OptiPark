<div class="contenedor-espacios">
    <h2><span class="subtitulo">DISPONIBILIDAD</span><br>Consulta espacios disponibles</h2>

    <div class="info-parqueadero">
        <strong>Parqueadero Principal</strong><br>
        Calle 123 #45-67, Bogotá
    </div>

    <div class="leyenda">
        <span class="leyenda-item disponible"></span> Disponible:
        <span id="conteo-disponible">0</span>
        <span class="leyenda-item ocupado"></span> Ocupado:
        <span id="conteo-ocupado">0</span>
        <span class="leyenda-item reservado"></span> Reservado:
        <span id="conteo-reservado">0</span>
    </div>

    <div id="contenedor-cuadros" class="cuadricula"></div>

    <button class="boton-reserva">Reservar espacio seleccionado</button>
</div>


<!-- Formulario de filtro y reserva -->
<div class="row justify-content-center mt-4">
  <div class="col-md-4">
    <div class="card p-3">
      <h6><strong>Filtrar por tipo de vehículo</strong></h6>
      <div><input type="radio" name="tipo" value="Automóvil" checked> Automóvil</div>
      <div><input type="radio" name="tipo" value="Motocicleta"> Motocicleta</div>
      <div><input type="radio" name="tipo" value="Discapacitados"> Discapacitados</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card p-3">
      <h6><strong>Reserva rápida</strong></h6>
      <label>Fecha</label>
      <input type="date" id="fechaReserva" class="form-control" required>

      <div class="row mt-2">
        <div class="col">
          <label>Hora de entrada</label>
          <input type="time" id="horaEntrada" class="form-control" required>
        </div>
        <div class="col">
          <label>Hora de salida</label>
          <input type="time" id="horaSalida" class="form-control" required>
        </div>
      </div>

      <button onclick="buscarDisponibilidad()" class="btn btn-primary mt-3">Buscar disponibilidad</button>
    </div>
  </div>
</div>

<!-- Modal Bootstrap -->
<div class="modal fade" id="modalReserva" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar reserva</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p id="infoEspacio">Estás a punto de reservar el espacio X en el Parqueadero Principal.</p>

        <label>Fecha</label>
        <input type="date" id="modalFecha" class="form-control" required>

        <div class="row mt-2">
          <div class="col">
            <label>Hora de entrada</label>
            <input type="time" id="modalHoraEntrada" class="form-control" required>
          </div>
          <div class="col">
            <label>Hora de salida</label>
            <input type="time" id="modalHoraSalida" class="form-control" required>
          </div>
        </div>

        <label class="mt-2">Placa del vehículo</label>
        <input type="text" class="form-control" placeholder="ABC123" required>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary">Confirmar reserva</button>
      </div>
    </div>
  </div>
</div>



<link rel="stylesheet" href="css/style.css">
<script src="js/reserv.js"></script>
<script>
  botonReserva.addEventListener("click", function () {
    if (!seleccionado) return;
    // Actualiza el texto del modal con el número seleccionado
    const numero = botonReserva.dataset.numero;
    document.getElementById("infoEspacio").innerText = `Estás a punto de reservar el espacio ${numero} en el Parqueadero Principal.`;
    // Abre el modal de Bootstrap
    const modal = new bootstrap.Modal(document.getElementById("modalReserva"));
    modal.show();
  });
</script>