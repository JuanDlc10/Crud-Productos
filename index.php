<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "./app/views/includes/metatags.php";
        session_start();
    ?>
</head>
<body>
    <?php
    require "./app/model/crud.class.php";
    $crud = new Crud; 
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    if (isset($_SESSION["id_user"])){
                        $usuario = $_SESSION["user"];
                        $productos = $crud->read();
                    include "./app/views/read.php";
                    break;
                }else{
                    header('location: ./home');
                }
                case 'agregar':
                    if (isset($_SESSION["id_user"])){
                        include "./app/views/agregar.php";
                    break;
                }else{
                    header('location: ./home');
                }
                case 'agregarPedido':
                    if (isset($_SESSION["id_user"])){
                        $producto = $crud->show($_REQUEST["id"]);
                        include "./app/views/agregarPedido.php";
                        break;
                }else{
                    header('location: ./home');
                }
                case 'pedidos':
                    if (isset($_SESSION["id_user"])){
                        $usuario = $_SESSION["user"];
                        $pedidos = $crud -> mostrarPedidos($_SESSION["id_user"]);
                        include "./app/views/pedidos.php";
                        break;
                }else{
                    header('location: ./home');
                }
                case 'update':
                    if (isset($_SESSION["id_user"])){
                        $producto = $crud->show($_REQUEST["id"]);
                        include "./app/views/update.php";
                        break;
                }else{
                    header('location: ./home');
                }
                
                case 'logOut';
                    if (isset($_SESSION["id_user"])){
                        include "./app/model/process/logOut.process.php";
                    }else{
                        header('location: ./home');
                    }
                    break;

                case 'sigIn';
                    include "./app/views/sigIn.php";
                    break;
            }
        } else {
            header('location: ./home');
        }
   ?>
    <?php 
        require "./app/views/includes/scripts.php" 
    ?>
</body>
</html>