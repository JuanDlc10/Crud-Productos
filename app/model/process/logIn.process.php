<?php
require "../crud.class.php";
$crud = new Crud();
    $crud->logIn([
    "user" => $_POST["user"],
    "pass" => sha1($_POST["pass"])
]);
?>