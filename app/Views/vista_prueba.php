<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electiva</title>
    <!-- Icono de la pestaña -->
    <link rel="icon" href="<?php echo RUTA_PUBLICA; ?>tres.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5 d-none">
        <h2 class="text-center mb-4">Calculadora Básica</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="formCalculadora">
                    <div class="form-group mb-3">
                        <label for="numero1">Número 1:</label>
                        <input type="number" class="form-control" id="numero1" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="numero2">Número 2:</label>
                        <input type="number" class="form-control" id="numero2" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="operacion">Operación:</label>
                        <select class="form-control" id="operacion">
                            <option value="sumar">Sumar</option>
                            <option value="restar">Restar</option>
                            <option value="multiplicar">Multiplicar</option>
                            <option value="dividir">Dividir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular</button>
                </form>
                <div class="alert alert-info mt-3 d-none" id="resultadoBox">
                    Resultado: <span id="resultado"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-start mb-4">Lista de Usuarios</h2>
            <button class="btn btn-success" id="abrir_modal_usuario">Registrar usuario</button>
        </div>
        <p class="text-start">A continuación se muestra una lista de usuarios registrados en la base de datos.</p>
        <table class="table table-striped mt-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->id_usuario; ?></td>
                    <td><?php echo $usuario->nombre_usuario; ?></td>
                    <td><?php echo $usuario->email; ?></td>
                    <td><?php echo $usuario->rol_usuario; ?></td>
                    <td>
                        <button class="btn btn-danger btn-sm eliminar_usuario" data-id="<?php echo $usuario->id_usuario; ?>">Eliminar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2 class="text-start mb-4">Lista de Roles</h2>
        <p class="text-start">A continuación se muestra una lista de roles registrados en la base de datos.</p>
        <table class="table table-striped mt-5">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID Rol</th>
                    <th scope="col">Nombre Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roles as $rol): ?>
                <tr>
                    <td><?php echo $rol->id_rol; ?></td>
                    <td><?php echo $rol->nombre_rol; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </div>   
</body>

<!-- Modal para registrar usuario -->
<div class="modal fade" id="modal_usuario" tabindex="-1" aria-labelledby="modal_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_usuarioLabel">Registrar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_registrar_usuario">
                    <div class="mb-3">
                        <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombre_usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_usuario" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="rol_usuario" class="form-label">Rol</label>
                        <select class="form-select" id="rol_usuario">
                            <?php foreach ($roles as $rol): ?>
                            <option value="<?php echo $rol->id_rol; ?>"><?php echo $rol->nombre_rol; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrar Usuario</button>
                </form>
            </div>
        </div>
    </div>
</div>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('#formCalculadora').submit(function (e) {
            e.preventDefault();

            const num1 = parseFloat($('#numero1').val());
            const num2 = parseFloat($('#numero2').val());
            const operacion = $('#operacion').val();
            let resultado;

            switch (operacion) {
                case 'sumar':
                    resultado = num1 + num2;
                    break;
                case 'restar':
                    resultado = num1 - num2;
                    break;
                case 'multiplicar':
                    resultado = num1 * num2;
                    break;
                case 'dividir':
                    if (num2 === 0) {
                        resultado = 'No se puede dividir entre 0';
                    } else {
                        resultado = num1 / num2;
                    }
                    break;
                default:
                    resultado = 'Operación inválida';
            }

            $('#resultado').text(resultado);
            $('#resultadoBox').removeClass('d-none');
        });

        $('#abrir_modal_usuario').click(function () {
            $('#modal_usuario').modal('show');
        });

        $('#form_registrar_usuario').submit(function (e) {
            e.preventDefault();

            const nombreUsuario = $('#nombre_usuario').val();
            const emailUsuario = $('#email_usuario').val();
            const rolUsuario = $('#rol_usuario').val();

            $.ajax({
                url: '<?php echo RUTA_PUBLICA; ?>' + 'home/registrar_usuario',
                type: 'POST',
                data: {
                    nombre_usuario: nombreUsuario,
                    email: emailUsuario,
                    id_rol: rolUsuario
                },
                dataType: 'json',
                success: function (response) {
                    if(response.resp == true){
                        alert('Usuario registrado exitosamente');
                        $('#modal_usuario').modal('hide');
                        location.reload(); // Recargar la página para ver el nuevo usuario
                    }else{
                        alert('Error al registrar el usuario');
                    }
                },
                error: function () {
                    alert('Error al registrar el usuario');
                }
            });
        });

        $('.eliminar_usuario').click(function () {
            const idUsuario = $(this).data('id');
            let respuesta = confirm('¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.');

            if (respuesta) {
                $.ajax({
                    url: '<?php echo RUTA_PUBLICA; ?>' + 'home/eliminar_usuario',
                    type: 'POST',
                    data: { id_usuario: idUsuario },
                    dataType: 'json',
                    success: function (response) {
                        if(response.resp == true){
                            alert('Usuario eliminado exitosamente');
                            location.reload(); // Recargar la página para ver los cambios
                        }else{
                            alert('Error al eliminar el usuario');
                        }
                    },
                    error: function () {
                        alert('Error al eliminar el usuario');
                    }
                });
            }
        });
        
    });
</script>