<?php
    class DB{
        public static function conectar(){
            $url="pgsql: host=localhost; dbname=ventasweb";
            $user="postgres";
            $password="123";
            $cn=new PDO($url, $user, $password);
            return $cn;
        }
    }
?>