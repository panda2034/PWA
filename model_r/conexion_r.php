<?php
$contrasena="";
$usuario = "root";
$nombrebd="registro";

try{
    $bd = new PDO(
        "mysql:host=localhost;
        dbname=" .$nombrebd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")

    
    );
} 
catch(PDOException $e) {
    echo "error".$e->getMessage();
}



?>