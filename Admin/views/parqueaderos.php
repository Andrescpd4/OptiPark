<h2>Parqueaderos</h2>
<?php
$parqueaderos = [
    [
        'nombre' => 'Parqueadero Central',
        'capacidad' => 50,
        'direccion' => 'Cra 10 #20-30, Bogotá'
    ],
    [
        'nombre' => 'Parqueadero Norte',
        'capacidad' => 30,
        'direccion' => 'Av. 68 #45-12, Bogotá'
    ],
    [
        'nombre' => 'Parqueadero Sur',
        'capacidad' => 40,
        'direccion' => 'Calle 80 #100-25, Bogotá'
    ]
];
?>

<table class="table table-striped" id="tabla-parqueaderos">
    <thead>
        <tr>
            <th>Nombre del Parqueadero</th>
            <th>Capacidad</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($parqueaderos as $i => $p): ?>
            <tr id="fila-<?php echo $i; ?>">
                <td class="nombre"><?php echo htmlspecialchars($p['nombre']); ?></td>
                <td class="capacidad"><?php echo $p['capacidad']; ?></td>
                <td class="direccion"><?php echo htmlspecialchars($p['direccion']); ?></td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editarFila(<?php echo $i; ?>)" title="Editar">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="eliminarFila(<?php echo $i; ?>)" title="Eliminar">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
function eliminarFila(idx) {
    if (confirm('¿Estás seguro de eliminar este parqueadero?')) {
        document.getElementById('fila-' + idx).remove();
    }
}

function editarFila(idx) {
    const fila = document.getElementById('fila-' + idx);
    const nombre = fila.querySelector('.nombre').textContent;
    const capacidad = fila.querySelector('.capacidad').textContent;
    const direccion = fila.querySelector('.direccion').textContent;

    fila.innerHTML = `
        <td><input type="text" class="form-control" id="edit-nombre-${idx}" value="${nombre}"></td>
        <td><input type="number" class="form-control" id="edit-capacidad-${idx}" value="${capacidad}"></td>
        <td><input type="text" class="form-control" id="edit-direccion-${idx}" value="${direccion}"></td>
        <td>
            <button class="btn btn-success btn-sm" onclick="guardarEdicion(${idx})" title="Guardar"><i class="fa fa-check"></i></button>
            <button class="btn btn-secondary btn-sm" onclick="cancelarEdicion(${idx}, '${nombre}', '${capacidad}', '${direccion}')" title="Cancelar"><i class="fa fa-times"></i></button>
        </td>
    `;
}

function guardarEdicion(idx) {
    const nombre = document.getElementById('edit-nombre-' + idx).value;
    const capacidad = document.getElementById('edit-capacidad-' + idx).value;
    const direccion = document.getElementById('edit-direccion-' + idx).value;

    const fila = document.getElementById('fila-' + idx);
    fila.innerHTML = `
        <td class="nombre">${nombre}</td>
        <td class="capacidad">${capacidad}</td>
        <td class="direccion">${direccion}</td>
        <td>
            <button class="btn btn-warning btn-sm" onclick="editarFila(${idx})" title="Editar">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-danger btn-sm" onclick="eliminarFila(${idx})" title="Eliminar">
                <i class="fa fa-trash"></i>
            </button>
        </td>
    `;
}

function cancelarEdicion(idx, nombre, capacidad, direccion) {
    const fila = document.getElementById('fila-' + idx);
    fila.innerHTML = `
        <td class="nombre">${nombre}</td>
        <td class="capacidad">${capacidad}</td>
        <td class="direccion">${direccion}</td>
        <td>
            <button class="btn btn-warning btn-sm" onclick="editarFila(${idx})" title="Editar">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-danger btn-sm" onclick="eliminarFila(${idx})" title="Eliminar">
                <i class="fa fa-trash"></i>
            </button>
        </td>
    `;
}
</script>