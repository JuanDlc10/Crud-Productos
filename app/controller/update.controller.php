<script>
    $(document).ready(() => {
        $("#update").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let precio = $("#precio").val()
            let fechaCad = $("#fechaCad").val()
            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    precio,
                    fechaCad,
                },
                type: "POST",
                success: (a,b,c) => { 
                    console.log(a,b,c)
                    Swal.fire({
                        title: 'Producto actualizado!',
                        text: "Producto actualizado con exito!",
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
</script