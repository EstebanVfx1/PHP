<?php
include_once("conexion.php");

if(empty($_POST["Nombre"]) or empty($_POST["Apellido"]) or empty($_POST["email"]) or empty($_POST["contrasena"])){
    echo "cambos sin llenar";
}else{
    $nombre = $_REQUEST['Nombre'];
    $apellido = $_REQUEST['Apellido'];
    $email = $_REQUEST['email'];
    $password = sha1($_REQUEST['contrasena']);

    $consul = "SELECT COUNT(*) AS cantidad
            FROM usuario
            WHERE email = '$email'";

    $resultado = mysqli_query($conexion, $consul);

    if($resultado){
        $fila = mysqli_fetch_assoc($resultado);
        $cantidad = $fila['cantidad'];

        if($cantidad > 0){
            echo "Email ya existe";
        }else{
            $sql=$conexion->query("INSERT INTO usuario(nombre, apellido, email, password_hash, rol) VALUES('$nombre','$apellido', '$email', '$password', 'NNN')" );
            if($sql==1){
                header("Location: login.html");
                echo "REGISTRO MELO";
            }else{
                echo "error pa a mimir";
            }
        }
    }

    
}
?>