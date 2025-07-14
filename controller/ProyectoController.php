<?php
    require_once './model/ProyectoModel.php';
    require_once './model/ClienteModel.php';
    class ProyectoController {
        public function cargar() {
            $model = new ProyectoModel();
            $proyectos = $model->cargar();
            require_once './view/viewCargarProyectos.php';
        }

        public function guardar() {
            $model = new ClienteModel();
            $clientes = $model->cargar();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $model = new ProyectoModel();
                $proyecto = new Proyecto();
                $proyecto->setNombre($_POST['txtNom']);
                $proyecto->setDescripcion($_POST['txtDesc']);
                $proyecto->setFechaEntrega($_POST['txtFechaEntrega']);
                $proyecto->setFechaAsignacion($_POST['txtFechaAsignacion']);
                $proyecto->setIdcliente($_POST['cbxIdCliente']);
                $model->guardar($proyecto);
                header('Location: index.php?accion=cargarproyectos');
            } else {
                require_once './view/viewGuardarProyecto.php';
            }
        }
        public function borrar() {
            if (isset($_GET['idproyecto'])) {
                $model = new ProyectoModel();
                $model->borrar($_GET['idproyecto']);
                header('Location: index.php?accion=cargarproyectos');
            }
        }
    }   


?>