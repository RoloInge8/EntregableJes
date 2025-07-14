<?php
    class DB{
        public static function conectar(){
            $url='pgsql:host=localhost;dbname=test_db';
            $user='usuario_prueba';
            $password='TuNuevaPassSegura123!';
            $cn=new PDO($url, $user, $password);
            return $cn;
        }
    }
?>