<?php
    class DB{
        public static function conectar(){
            $url="mysql: host=localhost; dbname=ventasdbsenati";
            $user="root";
            $password="";
            $cn=new PDO($url, $user, $password);
            return $cn;
        }
    }
?>