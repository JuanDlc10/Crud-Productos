<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5 text-center">Realizar pedido</h1>      
                <div>
                <input type="text" id="id" value="<?php echo $producto['id']; ?>" hidden>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" readonly value="<?php echo $producto['nombre'];?>">
                        <div class="form-text" >Ingresa el nombre</div>
                    </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" readonly value="<?php echo $producto['precio'];?>" id="precio">
                    <div id="" class="form-text" >Ingresa el precio del producto</div>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad de piezas</label>
                    <input type="text" class="form-control"  id="cantidad">
                    <div id="" class="form-text" >Ingresa la fecha de caducidad</div>
                    <hr>
                    <button id="agregarPedido" class="btn btn-success">Agregar</button>
                    <a href="./read" class="btn btn-success">Regresar</a>
                </div>
                </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/agregarPedido.controller.php"
?>