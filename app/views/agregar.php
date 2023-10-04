<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5 text-center ">Agregar productos</h1>      
                <div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre">
                        <div class="form-text" >Ingresa el nombre</div>
                    </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control"  id="precio">
                    <div id="" class="form-text" >Ingresa el precio del producto</div>
                </div>
                <div class="mb-3">
                    <label for="fechaCad" class="form-label" >Fecha de caducidad</label>
                    <input type="date" class="form-control"  id="fechaCad">
                    <div id="" class="form-text" >Ingresa la fecha de caducidad</div>
                    <hr>
                    <button id="agregar" class="btn btn-success">Agregar</button>
                    <a href="./read" class="btn btn-success">Regresar</a>
                </div>
                </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/agregar.controller.php"
?>