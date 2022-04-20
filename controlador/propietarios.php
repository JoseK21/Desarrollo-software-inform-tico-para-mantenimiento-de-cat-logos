<?php
require_once("modelo/propietarios.php");
class propietariosController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("productos","1");
        require_once("vista/propietarios.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("vista/propietarios/nuevo.php");
    }
    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data = "'".$nombre."',".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos",$data);
        header("location:"."http://localhost/mantenimiento/");
    }

    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos","id=".$id);        
        require_once("vista/propietarios/editar.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data = "nombre='".$nombre."',precio=".$precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos",$data,"id=".$id);
        header("location:"."http://localhost/mantenimiento/");
    }

    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos","id=".$id);
        header("location:"."http://localhost/mantenimiento/");
    }


}