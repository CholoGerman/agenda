<?php
require_once '../model/tareaDAO.php'; 

$funcion = $_GET['funcion']; 

switch ($funcion) { 

    case "agregar"; 
        agregar();  
        break; 

    case "eliminar"; 
        eliminar();
        break; 

    case "obtener";  
        obtener(); 
        break;

    case "editar"; 
        editar(); 
        break; 
}
function obtener(){ 
    $resultado = (new tarea())->obtener();
    echo json_encode($resultado);
}
function agregar(){ 
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];    
    $estado = $_GET['estado'];       
    $resultado = (new tarea())->agregar($nombre, $fecha, $hora, $estado);
    echo json_encode($resultado);
}
function eliminar(){
    $id_tarea = $_GET['id_tarea'];
    $resultado = (new tarea())->eliminar($id_tarea);
    echo json_encode($resultado);
}


function editar(){ 
    $id_tarea = $_GET['id_tarea'];
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];
    $estado = $_GET['estado'];
    $resultado = (new tarea())->editar($id_tarea, $nombre, $fecha, $hora, $estado);
    echo json_encode($resultado);
}