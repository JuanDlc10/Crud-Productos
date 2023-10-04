<?php 
require "../crud.class.php";
session_start();
$crud = new Crud();

$crud->agregarProducto([
    "id" => $_POST["id"],
    "precio" => $_POST["precio"],
    "pedidoPor" => $_SESSION['id_user'],
    "cantidad" => $_POST["cantidad"],
]);

?>