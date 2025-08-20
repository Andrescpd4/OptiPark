<?php
?>
<h2>Agregar Cliente</h2>
<?php
?>
<h2>Agregar Cliente</h2>
<form action="index.php?controller=clientes&action=guardar" method="post">
    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Teléfono:</label>
        <input type="text" name="telefono" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="index.php?controller=clientes&action=index" class="btn btn-secondary">Cancelar</a>
</form>
