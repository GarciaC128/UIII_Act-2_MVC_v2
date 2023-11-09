<?php
    class menu{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id,$platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen){
            $stament = $this->PDO->prepare("INSERT INTO tbl_menu (id_platillo, platillo, descripcion, precio, ingredientes, categoria, calorias, imagen) VALUES(:id_platillo, :platillo, :descripcion, :precio, :ingredientes, :categoria, :calorias, :imagen)");
            $stament->bindParam(":id_platillo", $id);
            $stament->bindParam(":platillo",$platillo);
            $stament->bindParam(":descripcion",$descripcion);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":ingredientes",$ingredientes);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":calorias",$calorias);
            $stament->bindParam(":imagen",$imagen, PDO::PARAM_LOB);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_menu where id_platillo = :id_platillo limit 1");
            $stament->bindParam(":id_platillo",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_menu");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen){
            $stament = $this->PDO->prepare("UPDATE tbl_menu SET platillo = :platillo, descripcion = :descripcion, precio = :precio, ingredientes = :ingredientes, categoria = :categoria, calorias = :calorias, imagen = :imagen WHERE id_platillo = :id_platillo");
            $stament->bindParam(":platillo",$platillo);
            $stament->bindParam(":descripcion",$descripcion);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":ingredientes",$ingredientes);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":calorias",$calorias);
            $stament->bindParam(":imagen",$imagen, PDO::PARAM_LOB);
            $stament->bindParam(":id_platillo",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_menu WHERE id_platillo = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>