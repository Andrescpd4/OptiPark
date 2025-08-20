<div class="container mt-4">
    <h2 class="mb-1">Panel de Administración</h2>
    <p class="text-muted">Bienvenido al sistema de gestión de OptiPark</p>

    <!-- Tarjetas resumen -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-money-bill-wave fa-2x text-primary me-3"></i>
                    <div>
                        <small class="text-muted">Ingresos totales</small>
                        <h5>-- <span class="text-success">%</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-calendar-days fa-2x text-primary me-3"></i>
                    <div>
                        <small class="text-muted">Reservas activas</small>
                        <h5>-- <span class="text-success">%</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-square-parking fa-2x text-primary me-3"></i>
                    <div>
                        <small class="text-muted">Espacios disponibles</small>
                        <h5>-- <span class="text-danger">%</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-plus fa-2x text-primary me-3"></i>
                    <div>
                        <small class="text-muted">Nuevos clientes</small>
                        <h5>-- <span class="text-success">%</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Ocupación por hora</h5>
                    <select class="form-select w-auto">
                        <option>Hoy</option>
                        <option>Ayer</option>
                        <option>Semana</option>
                    </select>
                </div>
                <canvas id="graficoOcupacion" height="150"></canvas>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="mb-3">Actividad reciente</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <!-- <i class="fa-solid fa-square-parking text-primary me-2"></i>
                        <strong>Nueva reserva</strong><br>
                        <small>Juan Pérez reservó el espacio A12 para hoy a las 15:00</small><br>
                        <small class="text-muted">Hace 5 minutos</small>
                    </li>
                    <li class="mb-3">
                        <i class="fa-solid fa-check-circle text-success me-2"></i>
                        <strong>Pago completado</strong><br>
                        <small>María González pagó $25,000 por su reserva</small><br>
                        <small class="text-muted">Hace 1 hora</small>
                    </li>
                    <li class="mb-3">
                        <i class="fa-solid fa-circle-exclamation text-warning me-2"></i>
                        <strong>Reserva cancelada</strong><br>
                        <small>Carlos Martínez canceló su reserva para el espacio B7</small><br>
                        <small class="text-muted">Hace 3 horas</small>
                    </li>
                    <li>
                        <i class="fa-solid fa-user-plus text-info me-2"></i>
                        <strong>Nuevo cliente</strong><br>
                        <small>Andrés Ramírez se registró como nuevo cliente</small><br>
                        <small class="text-muted">Hace 4 horas</small> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('graficoOcupacion').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['6:00', '8:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'],
        datasets: [{
            label: 'Ocupación %',
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0],
            borderColor: '#4f46e5',
            backgroundColor: 'rgba(79, 70, 229, 0.2)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            tooltip: { enabled: true }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100
            }
        }
    }
});
</script>
