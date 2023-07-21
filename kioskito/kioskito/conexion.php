<?php
   $hots = "localhost";
   $user = "root";
   $dbname = "kioskito";
   $password = "";

   $conexion = new mysqli($hots, $user, $password, $dbname);
   if($conexion->connect_error){
    die("conecion fallida: " . $conexion->connect_error);
   }else{
    //echo "Conexion melosa";
   }
?>