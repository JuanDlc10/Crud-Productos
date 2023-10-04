<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
            let nombre = $("#nombre").val()
            let precio = $("#precio").val()
            let fechaCad = $("#fechaCad").val()
            if (!nombre) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un nombre",
                    timer: 2000
                }) 
                return false
            }
            if (!precio) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un precio",
                    timer: 2000
                })
                return false
            }
            if (!fechaCad) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste una fecha de caducidad",
                    timer: 2000
                })
                return false
            }
            $.ajax({
                url: "./app/model/process/agregar.process.php",
                data: {
                    nombre,
                    precio,
                    fechaCad
                },
                type: "POST",
                success: () => { 
                    Swal.fire({
                        title: 'Producto guardado!',
                        text: "Producto guardado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./read"
                        })  
            },
            error:() => {
                console.log("Error")
            }
            })
        })
    })
</script>