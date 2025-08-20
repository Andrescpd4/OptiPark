<?php

$tarifas = [
    [
        'tipo_vehiculo' => 'Bicicletas',
        'valor_fraccion' => 1000
    ],
    [
        'tipo_vehiculo' => 'Motocicletas',
        'valor_fraccion' => 2500
    ],
    [
        'tipo_vehiculo' => 'Vehículos livianos y medianos',
        'valor_fraccion' => 2900
    ],
    [
        'tipo_vehiculo' => 'Vehículos Pesados',
        'valor_fraccion' => 7000
    ]
];
?>

<h2>Administrar Tarifas de Parqueo</h2>

<table class="table table-bordered" id="tabla-tarifas">
    <thead>
        <tr>
            <th>Tipo de Vehículo</th>
            <th>Valor Fracción por Hora</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Bicicletas</td>
            <td id="valor-bicicletas">$1.000</td>
        </tr>
        <tr>
            <td>Motocicletas</td>
            <td id="valor-motocicletas">$2.500</td>
        </tr>
        <tr>
            <td>Vehículos livianos y medianos</td>
            <td id="valor-livianos">$2.900</td>
        </tr>
        <tr>
            <td>Vehículos Pesados</td>
            <td id="valor-pesados">$7.000</td>
        </tr>
    </tbody>
</table>

<h3>Agregar/Editar Tarifa</h3>
<form id="form-tarifa" onsubmit="return actualizarTarifa();">
    <div class="mb-3">
        <label for="tipo_vehiculo" class="form-label">Tipo de Vehículo</label>
        <select class="form-control" id="tipo_vehiculo" name="tipo_vehiculo" required>
            <option value="Bicicletas">Bicicletas</option>
            <option value="Motocicletas">Motocicletas</option>
            <option value="Vehículos livianos y medianos">Vehículos livianos y medianos</option>
            <option value="Vehículos Pesados">Vehículos Pesados</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="valor_fraccion" class="form-label">Valor Fracción por Hora</label>
        <input type="number" class="form-control" id="valor_fraccion" name="valor_fraccion" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Tarifa</button>
</form>

<script>
function actualizarTarifa() {
    const tipo = document.getElementById('tipo_vehiculo').value;
    const valor = parseInt(document.getElementById('valor_fraccion').value, 10);

    let id = '';
    if (tipo === 'Bicicletas') id = 'valor-bicicletas';
    else if (tipo === 'Motocicletas') id = 'valor-motocicletas';
    else if (tipo === 'Vehículos livianos y medianos') id = 'valor-livianos';
    else if (tipo === 'Vehículos Pesados') id = 'valor-pesados';

    if (id) {
        document.getElementById(id).textContent = '$' + valor.toLocaleString('es-CO');
    }
    document.getElementById('valor_fraccion').value = '';
    return false;
}
</script>