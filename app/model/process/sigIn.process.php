<?php 
require "../crud.class.php";
$crud = new Crud();

$crud->sigIn([
    "name" => $_POST["name"],
    "lastName" => $_POST["lastName"],
    "user" => $_POST["user"],
    "pass" => sha1($_POST["pass"])
]);

?>