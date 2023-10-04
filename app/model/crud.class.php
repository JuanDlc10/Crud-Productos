<?php 

    class Crud{
        private $conexion;
        private $host = "localhost";
        private $user = "juan";
        private $pass = "juan1018";
        private $bd = "productos";

        public function __construct() {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->pass);
        }
        public function sigIn($datos){
            $query = "INSERT INTO t_usuario(nombres, apellidos, usuario, pass) VALUES (:name, :lastName, :user, :pass)";
            $stmt= $this->conexion->prepare($query); 
            $stmt->bindParam(":name",$datos["name"]);
            $stmt->bindParam(":lastName",$datos["lastName"]);
            $stmt->bindParam(":user",$datos["user"]);
            $stmt->bindParam(":pass",$datos["pass"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function logIn($datos){
            $query = "SELECT * FROM t_usuario WHERE usuario = :user AND pass = :pass";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":user",$datos["user"]);
            $stmt->bindParam(":pass",$datos["pass"]);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) { 
                unset($this->conexion);
                session_start();
                $_SESSION['id_user'] = $result[0]["id"];
                $_SESSION['user'] = $result[0]["nombres"];
                echo $_SESSION['user'];
                return $result;
            }else{
                unset($this->conexion);
                return false;   
            }
        }
        public function read(){
            $query = "SELECT * FROM t_producto";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function agregar($datos){
            $query = "INSERT INTO t_producto(nombre, precio, fecha_caducidad) VALUES (:nombre, :precio, :fechaCad)";
            $stmt= $this->conexion->prepare($query); 
            $stmt->bindParam(":nombre",$datos["nombre"]);
            $stmt->bindParam(":precio",$datos["precio"]);
            $stmt->bindParam(":fechaCad",$datos["fechaCad"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function show($id){
            $query = "SELECT * FROM t_producto WHERE id=:id";
            $stmt= $this->conexion->prepare($query); 
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function delete($id){
        $query = "DELETE FROM t_producto WHERE id=:id";
        $stmt= $this->conexion->prepare($query); 
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
        }
        public function update($datos){
            $query = "UPDATE t_producto SET nombre=:nombre, precio=:precio, fecha_caducidad=:fechaCad WHERE id=:id";
            $stmt= $this->conexion->prepare($query); 
            $stmt->bindParam(":id",$datos["id"]);
            $stmt->bindParam(":nombre",$datos["nombre"]);
            $stmt->bindParam(":precio",$datos["precio"]);
            $stmt->bindParam(":fechaCad",$datos["fechaCad"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function agregarProducto($datos){
            $query = "INSERT INTO t_pedido(producto, pedido_por, cantidad) VALUES (:producto, :pedidoPor, :cantidad)";
            $stmt= $this->conexion->prepare($query); 
            $stmt->bindParam(":producto",$datos["id"]);
            $stmt->bindParam(":pedidoPor",$datos["pedidoPor"]);
            $stmt->bindParam(":cantidad",$datos["cantidad"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function mostrarPedidos($id){
            $query = "SELECT t_producto.nombre AS producto, t_pedido.cantidad, t_pedido.cantidad,
            t_producto.precio, t_pedido.cantidad * t_producto.precio AS total
            FROM 
                t_pedido
            INNER JOIN 
                t_producto ON t_pedido.producto = t_producto.id 
             WHERE pedido_por = :id";
            $stmt = $this->conexion->prepare($query);
            $stmt -> bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
}
?>


