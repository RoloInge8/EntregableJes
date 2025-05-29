<?php
    class Categoria{
        //campos privados de clase
        private $idcategoria;
        private $nombre;
        private $idfamilia;
        //encapsulamiento idcategoria
        public function getIdcategoria(){return $this->idcategoria;}
        public function setIdcategoria($idcategoria){$this->idcategoria = $idcategoria;}
        //encapsulamiento nombre
        public function getNombre(){return $this->nombre;} 
        public function setNombre($nombre){$this->nombre = $nombre;return $this;}
        //encapsulamiento idfamilia
        public function getIdfamilia(){return $this->idfamilia;}
        public function setIdfamilia($idfamilia){$this->idfamilia = $idfamilia;return $this;}
    }
?>