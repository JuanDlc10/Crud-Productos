<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-start" >
                <a href="./read" class="btn btn-outline-primary mt-5" >Regresar</a>
            </div>
            <h2 class="mt-4" >Estos son tus pedidos <?php echo $usuario?></h2>
            <hr>
            <h1 class="mt-4 text-center">Tus pedidos</h1>
            <hr>
            <table class="table text-center table-secundary table-striped table-bordered table-sm table-hover table-responsive" >
                <thead>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Todal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                            foreach ($pedidos as $pedido):
                        ?>
                       <td> <?php echo $pedido["producto"] ?></td>
                       <td> <?php echo $pedido["cantidad"] ?></td>
                       <td> <?php echo $pedido["total"] ?></td>
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