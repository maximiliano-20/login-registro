<?php

include_once "conexion.php";

$nombres=isset($_POST['nombres']) ? $_POST['nombres'] : false;
$email = isset($_POST['email']) ? $_POST['email'] : false;
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;

if($nombres == "" || $email == "" || $usuario == "" || $password == ""  ){
    return;
}

$password_segura = password_hash($password,PASSWORD_BCRYPT);
$consulta = "INSERT INTO usuarios VALUES (NULL,'$nombres','$email','$usuario','$password_segura')";
$registro = $conexion->query($consulta);


if ($registro) {
    $mensajes['exito'] = "El Usuario Ha sido registrado corectamente";  
}else{
    $mensajes['error'] = "El Usuario no se pudo registrar";
}

echo json_encode($mensajes);

