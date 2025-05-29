<?php
    require_once './config/DB.php';
    require_once 'Categoria.php';
    class CategoriaModel{
        private $db;

        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Categoria $categoria){
            $sql="insert into categoria (nombre,idfamilia) values (:nom, :idfam)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":nom", $categoria->getNombre());
            $ps->bindParam(":idfam", $categoria->getIdfamilia());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from categoria";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $categorias=array();
            foreach($filas as $f){
                $cat=new Categoria();
                $cat->setIdcategoria($f[0]);
                $cat->setNombre($f[1]);
                $cat->setIdfamilia($f[2]);
                array_push($categorias, $cat);
            }
            return $categorias;
        }

        public function borrar($idcat){
            $sql="delete from categoria where idcategoria=:idcat";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idcat', $idcat);
            $ps->execute();
        }
    }
?>