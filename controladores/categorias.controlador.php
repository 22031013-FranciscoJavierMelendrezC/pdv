<?php

class CategoriasControlador{
    static public function ctrListarCategorias(){
        $categorias = CategoriasModelo::mdListarCategorias();
        return $categorias;
    }

    static public function  ctrRegistrarCategorias($id_categoria, $nombre_categoria)
    {
        $registroCategoria = CategoriasModelo::mdlRegistrarCategorias(
            $id_categoria, $nombre_categoria);

            return $registroCategoria;
    }
}