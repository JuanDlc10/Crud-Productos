<script>
    $(document).ready(() => {
        $("#agregarPedido").click(() => {
            let id = $("#id").val()
            let precio = $("#precio").val()
            let cantidad = $("#cantidad").val()
            if (!cantidad) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste la cantidad del pedido",
                    timer: 2000
                }) 
                return false
            }
            $.ajax({
                url: "./app/model/process/agregarPedido.process.php",
                data: {
                    id,
                    precio,
                    cantidad
                },
                type: "POST",
                success: () => { 
                    console.log()
                    Swal.fire({
                        title: 'Pedido realizado!',
                        text: "Pedido guardado con exito!",
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