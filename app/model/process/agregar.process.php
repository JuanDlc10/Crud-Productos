<?php 
require "../crud.class.php";
$crud = new Crud();

$crud->agregar([
    "nombre" => $_POST["nombre"],
    "precio" => $_POST["precio"],
    "fechaCad" => $_POST["fechaCad"],
]);

?>