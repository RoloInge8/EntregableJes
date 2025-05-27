<?php  
    require './config/DB.php';
    require 'Familia.php';

    class FamiliaModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Familia $familia){
            $sql="insert into familia (nombre,descripcion) values (:n, :d)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":n", $familia->getNombre());
            $ps->bindParam(":d", $familia->getDescripcion());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from familia";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $familias=array();
            foreach($filas as $f){
                $fam=new Familia();
                $fam->setIdfamilia($f[0]);
                $fam->setNombre($f[1]);
                $fam->setDescripcion($f[2]);
                array_push($familias, $fam);
            }
            return $familias;
        }
    }
?>


