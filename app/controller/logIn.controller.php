<script>
   $(document).ready(() => {
    $("#logIn").click(() => {
        let user = $("#user").val()
        let pass = $("#pass").val()
        if (user.length < 8) {
                Swal.fire({
                    icon: "error",
                    text: "El usuario tiene menos de 8 caracteres",
                    timer: 2000
                })
                
                return false
            }
            if (pass.length < 8) {
                Swal.fire({
                    icon: "error",
                    text: "La contraseña contiene menos de 8 caracteres",
                    timer: 2000
                })
                
                return false
            }
        $.ajax({
            type: "POST",
            url: "./app/model/process/logIn.process.php",
            data: {
                user,
                pass,
            },
            success: () => {
                window.location = "./read"
            },
            error: (error) => {
                console.error(error);
            }
        });
    });
});
</script>
