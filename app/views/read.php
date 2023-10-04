<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-start" >
                <a href="./agregar" class="btn btn-outline-primary mt-5" >Agregar</a>
                <a href="./pedidos" class="btn btn-outline-primary mt-5">Pedidos</a>
                <a href="./logOut" class="btn btn-outline-danger mt-5 text-rigth" >Terminar session</a>
            </div>
            <h2 class="mt-4" >Hola bienvenido <?php echo $usuario?></h2>
            <hr>
            <h1 class="mt-4 text-center">Productos</h1>
            <hr>
            <table class="table text-center table-secundary table-striped table-bordered table-sm table-hover table-responsive" >
                <thead>
                        <th>Nombre</th>
                        <th>Producto</th>
                        <th>Fecha</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        <th>Realizar pedido</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                            foreach ($productos as $producto):
                        ?>
                       <td> <?php echo $producto["nombre"] ?></td>
                       <td> <?php echo $producto["precio"] ?></td>
                       <td> <?php echo $producto["fecha_caducidad"] ?></td>
                       <td>
                            <a href="./update&id=<?php echo $producto['id']?>" class="btn btn-outline-warning" >Actualizar</a>
                       </td>
                       <td>
                            <button onclick="eliminar(<?php echo $producto['id']?>)" class="btn btn-outline-danger">Eliminar</button>
                       </td>
                       <td>
                       <a href="./agregarPedido&id=<?php echo $producto['id']?>" class="btn btn-outline-dark">Realizar pedido</a>
                       </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    require "./app/controller/delete.controller.php";
?>