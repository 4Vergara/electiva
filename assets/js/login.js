const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

$(function () {
    $(document).on('submit', '#formulario-registro', function (e) {
        e.preventDefault();
        $.ajax({
            url: IP_SERVER + 'Usuarios/registrar',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.resp == 1) {

                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        html: data.mensaje,
                      });
                }
            }
        })
    })

})