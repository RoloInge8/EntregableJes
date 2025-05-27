<?php
    require './controller/FamiliaController.php';
    $controller=new FamiliaController();
    $accion=isset($_GET['accion'])?$_GET['accion']:'cargarfamilias';
    switch($accion){
        case 'guardarfamilia':
            $controller->guardar();
        break;
        case 'cargarfamilias':
            $controller->cargar();
        break;
    }
?>