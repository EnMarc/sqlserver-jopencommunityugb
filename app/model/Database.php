<?php

class Database {
    public static function conectar(){
        return new PDO('sqlsrv:Server=192.168.56.101;Database=jopencommunity', 'sa', 'sasa');
    }
}
//echo phpinfo();
//$db = new Database();
//
//if ($db->conectar()){
//    echo 'Conexion';
//} else {
//    echo 'Error';
//}