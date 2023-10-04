<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5 text-center ">Actualizar producto</h1>      
                <div>
                <input type="text" id="id" value="<?php echo $producto['id']; ?>" hidden>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="<?php echo $producto['nombre'];?>">
                        <div class="form-text" >Ingresa el nombre</div>
                    </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" value="<?php echo $producto['precio'];?>">
                    <div id="" class="form-text" >Ingresa el precio del producto</div>
                </div>
                <div class="mb-3">
                    <label for="fechaCad" class="form-label">Fecha de caducidad</label>
                    <input type="date" class="form-control"  id="fechaCad" value="<?php echo $producto['fecha_caducidad'];?>">
                    <div id="" class="form-text" >Ingresa la fecha de caducidad</div>
                    <hr>
                    <button id="update" class="btn btn-success">Actualizar</button>
                    <a href="./read" class="btn btn-success">Regresar</a>
                </div>
                </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/update.controller.php"
?>