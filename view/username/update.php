<?php
    require_once("c://xampp/htdocs/proyecto/controller/menuControlador.php");
    $obj = new menuControlador();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_POST['id_platillo'];
    $platillo=$_POST['platillo'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $ingredientes=$_POST['ingredientes'];
    $categoria=$_POST['categoria'];
    $calorias=$_POST['calorias'];

    if($_FILES['imagen']['tmp_name']){
       $imagen= file_get_contents($_FILES["imagen"]["tmp_name"]);
    }else{
        $imagen = null;
    }
    
    $obj->update($id,$platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen);
}
?>