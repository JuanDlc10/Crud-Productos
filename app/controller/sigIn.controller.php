
<script>
    $(document).ready(() => {
        $("#sigIn").click(() => {
            let name = $("#name").val()
            let lastName = $("#lastName").val()
            let user = $("#user").val()
            let pass = $("#password").val()
            if (!name) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un nombre",
                    timer: 2000
                })
                return false
            }
            if (!lastName) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un apellido",
                    timer: 2000
                })
                
                return false
            }
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
                url: "./app/model/process/sigIn.process.php",
                data: {
                    name,
                    lastName,
                    user,
                    pass
                },
                type: "POST",
                success: () => { 
                    Swal.fire({
                        title: 'Usuario registrado!',
                        text: "El usuario se registro con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./home"
                        })  
            },
            error:() => {
                console.log("Error") 
            }
            })
        })
    })
</script>