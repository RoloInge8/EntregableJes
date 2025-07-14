<?php
    require_once './config/DB.php';
    require_once 'Cliente.php';

    Class ClienteModel{
        private $db;

        public function __construct(){
            $this->db = DB::conectar();
        }

        public function guardar(Cliente $cliente){
            $sql = "INSERT INTO cliente (nombres, apellidos, email, dni) VALUES (:n, :a, :e, :d)";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(":n", $cliente->getNombres());
            $ps->bindParam(":a", $cliente->getApellidos());
            $ps->bindParam(":e", $cliente->getEmail());
            $ps->bindParam(":d", $cliente->getDni());
            $ps->execute();
        }

        public function cargar(){
            $sql = "SELECT * FROM cliente";
            $ps = $this->db->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();
            $clientes = array();
            foreach($filas as $f){
                $cli = new Cliente();
                $cli->setIdcliente($f[0]);
                $cli->setNombres($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setEmail($f[3]);
                $cli->setDni($f[4]);
                array_push($clientes, $cli);
            }
            return $clientes;
        }

        public function borrar($idcliente){
            $sql = "DELETE FROM cliente WHERE idcliente=:id";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(':id', $idcliente);
            $ps->execute();
        }
    }

?>