<?php
    require './model/FamiliaModel.php';
    class FamiliaController{
        public function cargar(){
            $model=new FamiliaModel();
            $familias=$model->cargar();
            require './view/viewCargarFamilias.php';
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
                require './view/viewGuardarFamilia.php';
            }

        }
    }
?>