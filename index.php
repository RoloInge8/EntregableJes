<?php
    require_once './controller/FamiliaController.php';
    require_once './controller/CategoriaController.php';
    $accion=isset($_GET['accion'])?$_GET['accion']:'cargarfamilias';
    switch($accion){
        case 'guardarfamilia':
            $controller=new FamiliaController();
            $controller->guardar();
        break;
        case 'cargarfamilias':
            $controller=new FamiliaController();
            $controller->cargar();
        break;
        case 'borrarfamilia':
            $controller=new FamiliaController();
            $controller->borrar();
        break;
        case 'cargarcategorias':
            $controller=new CategoriaController();
            $controller->cargar();
        break;
        case 'guardarcategoria':
            $controller=new CategoriaController();
            $controller->guardar();
        break;
    }
?>