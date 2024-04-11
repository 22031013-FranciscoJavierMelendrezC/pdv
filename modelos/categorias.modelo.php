<?php

require_once "conexion.php";

class CategoriasModelo{

    static public function mdListarCategorias(){

        $stmt = Conexion::conectar()->prepare("SELECT'' AS VALORES, IdCategoria, Descripcion, '' AS Opciones 
        FROM categoria order by Descripcion desc");
        
        $stmt -> execute();

        return $stmt->fetchALL();
    }

    /*===================================================================
    REGISTRAR CATEGORIAS
    ====================================================================*/
    static public function mdlRegistrarCategorias($id_categoria, $nombre_categoria)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO categoria(IdCategoria,Descripcion) 
                                                VALUES (:IdCat,:Descrip)");//::parametros
            $stmt->bindParam(":IdCat", $id_categoria, PDO::PARAM_STR);
            $stmt->bindParam(":Descrip", $nombre_categoria, PDO::PARAM_STR);
            if ($stmt->execute()) {
                $resultado = "ok";
            } else {
                $resultado = "error";
            }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }
        return $resultado;
        $stmt = null;
    }
}
