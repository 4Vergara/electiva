<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H.O.P.E.</title>
    <!-- Icono de la pestaña -->
    <link rel="icon" href="<?php echo RUTA_BASE; ?>assets/imagenes/hope_icon.png">
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="formulario-registro">
                <h1>Crear cuenta</h1>
                <div class="social-container">
                </div>
                <span>Usa tu correo para registrarte</span>
                <input name="nombre" type="text" placeholder="Nombre">
                <input name="correo" type="email" placeholder="Correo">
                <input name="contrasena" type="password" placeholder="Contraseña">
                <input name="confirmar_contrasena" type="password" placeholder="Confirmar contraseña">
                <button class="mt-3" type="submit">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Inicia sesión</h1>
                <div class="social-container">
                </div>
                <span>Ingresa tus credenciales</span>
                <input type="email" placeholder="Correo" />
                <input type="password" placeholder="Contraseña" />
                <button class="mt-3">Ingresar</button>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <!-- <img src="<?php echo RUTA_BASE; ?>assets/imagenes/hope_icon.png" alt="" width="300px"> -->
                    <h1>¡Bienvenid@ de vuelta!</h1>
                    <p>¡Para mantenerte conectad@ con nosotros por favor ingresa con tu cuenta registrada!</p>
                    <button class="ghost" id="signIn">Ingresar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Hola, Bienvenid@!</h1>
                    <p>Ingresa tus datos para comenzar</p>
                    <p>¿No tienes cuenta? Da click en Registrarse para continuar</p>

                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
</body>


</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo RUTA_BASE; ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?php echo RUTA_BASE; ?>assets/js/login.js"></script>