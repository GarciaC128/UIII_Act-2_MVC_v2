<?php
    require_once("c://xampp/htdocs/proyecto/controller/menuControlador.php");
    $obj = new menuControlador();
    $obj->delete($_GET['id']);

?>