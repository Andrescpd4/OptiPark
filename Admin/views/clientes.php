<?php
$clientes = [
    [
        'id' => 1,
        'nombre' => 'Ana Gómez',
        'email' => 'ana.gomez@email.com',
        'telefono' => '+57 310 123 4567'
    ],
    [
        'id' => 2,
        'nombre' => 'Juan Pérez',
        'email' => 'juan.perez@email.com',
        'telefono' => '+57 320 987 6543'
    ]
];
?>
<h2>Clientes</h2>
<p>Esta página lista todos los clientes registrados en el sistema.</p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nombre']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['telefono']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p>
    <a href="index.php?controller=clientes&action=crear" class="btn btn-primary">Agregar Cliente</a>
</p>
