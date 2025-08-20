<!-- Botón hamburguesa -->
<button id="menuToggle"><i class="fa fa-bars"></i></button>

<!-- Menú -->
<div class="sidebar" id="sidebarMenu">
    <div class="logo">
  <i class="fa-solid fa-square-parking"></i>
    <span>OptiPark <strong>Admin</strong></span>
    </div>
	<a href="index.php?pg=1010"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
    <a href="index.php?pg=1011"><i class="fa-solid fa-table-list"></i> Datatable</a>
	<a href="index.php?pg=1012"><i class="fa-solid fa-square-parking"></i> Parqueaderos</a>
	<a href="index.php?pg=1013"><i class="fa fa-users"></i> Clientes</a>
	<a href="index.php?pg=1014"><i class="fa-solid fa-money-bill-1-wave"></i> Pagos</a>
	<a href="index.php?pg=1015"><i class="fa-solid fa-gear"></i> Configuración</a>
</div>

<script>
const menuBtn = document.getElementById("menuToggle");
const sidebar = document.getElementById("sidebarMenu");

// Muestra menú y oculta el botón hamburguesa 
menuBtn.addEventListener("click", function () {
    sidebar.classList.add("show");       // muestra menú
    menuBtn.classList.add("hide");       // oculta botón hamburguesa
});
</script>

