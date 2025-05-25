<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electiva</title>
    <!-- Icono de la pestaña -->
    <link rel="icon" href="<?php echo RUTA_BASE; ?>assets/imagenes/tres.png">
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
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
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

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
    });
</script>