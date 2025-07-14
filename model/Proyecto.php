<?php
    Class Proyecto {
        //campos privados de clase
        private $idproyecto;
        private $nombre;
        private $descripcion;
        private $fecha_entrega;
        private $fecha_asignacion;
        private $idcliente;

        //encapsulamiento idproyecto
        public function getIdproyecto() {
            return $this->idproyecto;
        }
        public function setIdproyecto($idproyecto) {
            $this->idproyecto = $idproyecto;
            return $this;
        }
        //encapsulamiento nombre   
        
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
            return $this;
        }

        //encapsulamiento descripcion
        public function getDescripcion() {
            return $this->descripcion;
        }
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
            return $this;
        }

        //encapsulamiento fecha_entrega
        public function getFechaEntrega() {
            return $this->fecha_entrega;
        }
        public function setFechaEntrega($fecha_entrega) {
            $this->fecha_entrega = $fecha_entrega;
            return $this;
        }
        //encapsulamiento fecha_asignacion
        public function getFechaAsignacion() {
            return $this->fecha_asignacion;
        }
        public function setFechaAsignacion($fecha_asignacion) {
            $this->fecha_asignacion = $fecha_asignacion;
            return $this;
        }

        //encapsulamiento idcliente
        public function getIdcliente() {
            return $this->idcliente;
        }
        public function setIdcliente($idcliente) {
            $this->idcliente = $idcliente;
            return $this;
        }

        //encapsulamiento nombreCliente
        private $nombreCliente;
        public function getNombreCliente() {
            return $this->nombreCliente;
        }
        public function setNombreCliente($nombreCliente) {
            $this->nombreCliente = $nombreCliente;
            return $this;
        }
        
    }

?>