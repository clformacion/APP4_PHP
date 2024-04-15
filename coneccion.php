<?php
function connectDB(){
    $servidor= "localhost";
    $usuario= "root";
    $password = "";
    $base= "text";

    $conexion = mysqli_connect($servidor, $usuario, $password ,$base) 
        or die("No se pudo conectar con la base de datos");

    return $conexion;
    

}








?>