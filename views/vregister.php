<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <style>
        /* Estilo para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        .modal-content {
            background: #fff;
            padding: 20px;
            margin: auto;
            width: 300px;
            border-radius: 8px;
            text-align: center;
        }
        .close {
            color: red;
            cursor: pointer;
            float: right;
            font-size: 18px;
        }
    </style>
</head>
<body>

<h2>Registro de Usuario</h2>
<form id="registerForm">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required><br>

    <label>Contraseña:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Registrar</button>
</form>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>
        <p id="modalMessage"></p>
    </div>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch('/controllers/register.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {
        let modal = document.getElementById('modal');
        let message = document.getElementById('modalMessage');
        message.textContent = data.message;
        modal.style.display = 'block';
    })
    .catch(err => console.error(err));
});

document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});
</script>

</body>
</html>
