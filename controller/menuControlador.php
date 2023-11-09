<?php
    class menuControlador{
        private $menu;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/menuModelo.php");
            $this->menu = new menu();
        }
        public function guardar($id,$platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen=null){
            $id = $this->menu->insertar($id,$platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->menu->show($id) != false) ? $this->menu->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->menu->index()) ? $this->menu->index() : false;
        }
        public function update($id, $platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen){
           $registroActual = $this ->show($id);

           if ($registroActual){
            if($imagen === null){
                $imagen = $registroActual['imagen'];
            }
          
           
            $this->menu->update($id,$platillo,$descripcion,$precio,$ingredientes,$categoria,$calorias,$imagen);
            header("Location:show.php?id=". $id);
        }else{
            header("Location:index.php");
        }
        }





        public function delete($id){
            return ($this->menu->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>