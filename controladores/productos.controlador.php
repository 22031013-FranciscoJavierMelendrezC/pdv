<?php

class ProductosControlador{

    static public function ctrCargaMasivaProductos(){
    
        $productos = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
    
        return $productos;
    }

    static public function ctrListarProductos(){

        $productos  = ProductosModelo::mdlListarProductos();

        return $productos;
    }

}