<?php
    require_once './model/ClienteModel.php';
    class ClienteController{
        public function cargar(){
            $model=new ClienteModel();
            $clientes=$model->cargar();
            require_once './view/viewCargarClientes.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ClienteModel();
                $cliente=new Cliente();
                $cliente->setNombres($_POST['txtNom']);
                $cliente->setApellidos($_POST['txtApe']);
                $cliente->setEmail($_POST['txtEma']);
                $cliente->setDni($_POST['txtDni']);
                $model->guardar($cliente);
                header('Location: index.php?accion=cargarclientes');
            }
            else{
                require_once './view/viewGuardarCliente.php';
            }
        }

        public function borrar(){
            if(isset($_GET['idcli'])){
                $model=new ClienteModel();
                $model->borrar($_GET['idcli']);
                header('Location: index.php?accion=cargarclientes');
            }
        }
    }

?>