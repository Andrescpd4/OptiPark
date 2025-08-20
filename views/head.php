<?php

?>
<header class="header">
    <div class="logo-title">
        <div class="logo small-logo">
            <img src="img/logot.png" alt="Logo OptiPark">
        </div>
        <h1 class="system-name">
            <span class="opt">Opti</span><span class="park">Park</span>
        </h1>
    </div>
    <div class="user-icon">
        <div class="relog-buttons">
        <a class="btn btn-outline-primary" id="loginBtn">Iniciar Sesion</a>
        <a class="btn btn-primary" id ="SignBtn">Registrarse</a>
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Usuario">
        </div>
    </div>
</header>

<!-- Pop-up de inicio de sesión -->
<div id="loginModal" class="modal" style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.4);">
  <div class="modal-content" style="background:#fff; margin:10% auto; padding:20px; border-radius:8px; width:300px; position:relative;">
    <span id="closeLoginModal" style="position:absolute; top:10px; right:15px; font-size:22px; cursor:pointer;">&times;</span>
    <h2 style="text-align:center;">Iniciar Sesión</h2>
      <div style="margin-bottom:15px;">
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" class="form-control" required style="width:100%;">
      </div>
      <div style="margin-bottom:15px;">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-control" required style="width:100%;">
      </div>
      <div class="sign-button">
      <button class="btn btn-primary" style="width:100%;">Entrar</button>
      </div>
      <div style="text-align:center; margin-top:10px;">
        <a href="#" id="forgotPassword" style="color:#5f3dc4; text-decoration:underline; cursor:pointer;">¿Olvidó su contraseña?</a>
      </div>
  </div>
</div>

<div id="SignModal" class="modal" style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.4);">
  <div class="modal-content" style="background:#fff; margin:10% auto; padding:20px; border-radius:8px; width:300px; position:relative;">
    <span id="closeSignModal" style="position:absolute; top:10px; right:15px; font-size:22px; cursor:pointer;">&times;</span>
    <h2 style="text-align:center;">Registrarse</h2>
    <form id="formRegistro" autocomplete="off">
      <div style="margin-bottom:15px;">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required style="width:100%;">
      </div>
      <div style="margin-bottom:15px;">
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" class="form-control" required style="width:100%;">
      </div>
      <div style="margin-bottom:15px;">
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" class="form-control" required style="width:100%;">
      </div>
      <div style="margin-bottom:15px;">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-control" required style="width:100%;">
      </div>
      <div class="sign-button">
        <button type="submit" class="btn btn-primary" style="width:100%;">Registrarse</button>
      </div>
      <div id="registroMsg" style="margin-top:10px; text-align:center;"></div>
      <div class="mb-4 mx-auto">
                <div class="h-captcha" data-sitekey=""></div>
            </div>
    </form>
  </div>
</div>

<link rel="stylesheet" href="css/style.css">
<script src="js/Log.js"></script>
<script src="js/register.js"></script>