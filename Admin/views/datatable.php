<div class="container mt-4">
    <h2 class="mb-3">Usuarios y Reservas</h2>
    <table id="tablaUsuarios" class="table table-striped">
        <thead>
            <tr>
                <th>Nombre de usuario</th>
                <th>Espacio</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ana Gómez</td>
                <td>A12</td>
                <td>$15,000</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="del(this)">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>Juan Pérez</td>
                <td>B7</td>
                <td>$20,000</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="del(this)">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#tablaUsuarios').DataTable();
    });

    function del(btn) {
        let fila = btn.closest("tr");
        let nombre = fila.cells[0].innerText;
        if (confirm("¿Eliminar a " + nombre + "?")) {
            fila.remove();
        }
    }
</script>
