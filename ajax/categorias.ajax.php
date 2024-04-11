<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class ajaxCategorias{

    public $id_categorias;
    public $nombre_categoria;

    public function ajaxListaCategorias(){

        $categorias = CategoriasControlador::ctrListarCategorias();
        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);

    }
    public function ajaxGrabarCategorias(){
    $categorias = CategoriasControlador::ctrRegistrarCategorias($this->id_categorias, $this->nombre_categoria);
    echo json_encode ($categorias, JSON_UNESCAPED_UNICODE);
    }
}
if(isset($_POST['accion']) && $_POST['accion']==1){ //parametro para listar categorias
    $categorias = new AjaxCategorias();
    $categorias -> ajaxListaCategorias();

}
if(isset($_POST['accion']) && $_POST['accion']==2){ //parametro para listar categorias
    
    $registrarcategorias = new AjaxCategorias();
    $registrarcategorias -> id_categorias =  $_POST['id_categoria'];
    $registrarcategorias -> nombre_categoria = $_POST['nombre_categoria'];
    $registrarcategorias -> ajaxGrabarCategorias();
}
?>