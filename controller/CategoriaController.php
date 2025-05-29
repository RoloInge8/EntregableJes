<?php
    require_once './model/CategoriaModel.php';
    require_once './model/FamiliaModel.php';
    class CategoriaController{
        public function cargar(){
            $model=new CategoriaModel();
            $categorias=$model->cargar();
            require_once './view/viewCargarCategorias.php';
        }

        public function guardar(){
            $model=new FamiliaModel();
            $familias=$model->cargar();
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new CategoriaModel();
                $categoria=new Categoria();
                $categoria->setNombre($_POST['txtNom']);
                $categoria->setIdcategoria($_POST['cbxIdFam']);
                $model->guardar($categoria);
                header('Location: index.php?accion=cargarcategorias');
            }
            else{
                require_once './view/viewGuardarCategoria.php';
            }

        }

        public function borrar(){
            if(isset($_GET['idcat'])){
                $model=new CategoriaModel();
                $model->borrar($_GET['idcat']);
                header('Location: index.php?accion=cargarcategorias');
            }
        }
    }
?>