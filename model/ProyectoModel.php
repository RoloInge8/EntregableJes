<?php
    require_once './config/DB.php';
    require_once 'Proyecto.php';
    class ProyectoModel {
        private $db;
        public function __construct() {
            $this->db = DB::conectar();
        }
        public function guardar(Proyecto $proyecto) {
            $sql = "INSERT INTO proyecto (nombre, descripcion, fecha_entrega, fecha_asignacion, idcliente) VALUES (:nom, :desc, :fecha_entrega, :fecha_asignacion, :idcliente)";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(":nom", $proyecto->getNombre());
            $ps->bindParam(":desc", $proyecto->getDescripcion());
            $ps->bindParam(":fecha_entrega", $proyecto->getFechaEntrega());
            $ps->bindParam(":fecha_asignacion", $proyecto->getFechaAsignacion());
            $ps->bindParam(":idcliente", $proyecto->getIdcliente());
            $ps->execute();
        }
        public function cargar() {
            $sql = "SELECT p.*, c.nombres, c.apellidos FROM proyecto p 
                    LEFT JOIN cliente c ON p.idcliente = c.idcliente";
            $ps = $this->db->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();
            $proyectos = array();
            foreach ($filas as $f) {
                $pro = new Proyecto();
                $pro->setIdproyecto($f[0]);
                $pro->setNombre($f[1]);
                $pro->setDescripcion($f[2]);
                $pro->setFechaEntrega($f[3]);
                $pro->setFechaAsignacion($f[4]);
                $pro->setIdcliente($f[5]);
                $pro->setNombreCliente($f[6] . ' ' . $f[7]); // nombres + apellidos
                array_push($proyectos, $pro);
            }
            return $proyectos;
        }
        public function borrar($idproyecto) {
            $sql = "DELETE FROM proyecto WHERE idproyecto = :idproyecto";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(':idproyecto', $idproyecto);
            $ps->execute();
        }
    }

?>