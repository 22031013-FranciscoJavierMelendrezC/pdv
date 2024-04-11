<?php 

require_once "conexion.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductosModelo{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        
        return $respuesta;
    }

    static public function mdlListarProductos(){

        $stmt = Conexion::conectar()->prepare('call sp_consulta_productos');

        $stmt->execute();

        return $stmt->fetchAll();
    }

}