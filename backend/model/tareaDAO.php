<?php
require_once '../conexion/conexion.php';

class tarea
{

    function obtener(){ 
        $connection = connection();
        $sql = "SELECT * FROM tarea ";
        $respuesta = $connection->query($sql);
        $tareas = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $tareas;
    }
    public function agregar($nombre, $fecha, $hora, $estado){ 
        $sql = "INSERT INTO tarea VALUES(0, '$nombre', '$fecha', '$hora', $estado);";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    public function eliminar($id_tarea){ 
        $sql = "DELETE FROM tarea WHERE id_tarea= $id_tarea;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    public function editar($id_tarea, $nombre, $fecha, $hora, $estado){  
        $sql = "UPDATE tarea SET nombre='$nombre', fecha='$fecha', hora='$hora', estado=$estado WHERE id_tarea= $id_tarea;";  
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
}
?>