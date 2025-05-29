<?php
    require_once './model/FamiliaModel.php';
    class FamiliaController{
        public function cargar(){
            $model=new FamiliaModel();
            $familias=$model->cargar();
            require_once './view/viewCargarFamilias.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new FamiliaModel();
                $familia=new Familia();
                $familia->setNombre($_POST['txtNom']);
                $familia->setDescripcion($_POST['txtDes']);
                $model->guardar($familia);
                header('Location: index.php');
            }
            else{
                require_once './view/viewGuardarFamilia.php';
            }

        }

        public function borrar(){
            if(isset($_GET['idfam'])){
                $model=new FamiliaModel();
                $model->borrar($_GET['idfam']);
                header('Location: index.php');
            }
        }
    }
?>