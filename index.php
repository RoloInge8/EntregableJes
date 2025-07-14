<?php
    require_once './controller/FamiliaController.php';
    require_once './controller/CategoriaController.php';
    require_once './controller/ClienteController.php';
    require_once './controller/ProyectoController.php';
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
        case 'guardarcliente':
            $controller=new ClienteController();
            $controller->guardar();
        break;
        case 'cargarclientes':
            $controller=new ClienteController();
            $controller->cargar();
        break;
        case 'borrarcliente':
            $controller=new ClienteController();
            $controller->borrar();
        break;
        case 'cargarproyectos':
            $controller=new ProyectoController();
            $controller->cargar();
        break;
        case 'guardarproyecto':
            $controller=new ProyectoController();
            $controller->guardar();
        break;
        case 'borrarproyecto':
            $controller=new ProyectoController();
            $controller->borrar();
        break;


    }
?>