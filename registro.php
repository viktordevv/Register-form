<?php
include_once('db.php');
// Data reception
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Confirmation
echo "Datos recibidos: <br>";
echo "Nombres: $nombres <br>";
echo "Apellidos: $apellidos <br>";
echo "Correo: $correo <br>";
echo "Usuario: $usuario <br>";
echo "Contraseña: $contraseña <br>";

// Send data
$conectar = conn();
$sql = "INSERT INTO usuarios (nombres, apellidos, correo, usuario, contraseña) 
VALUES ('$nombres', '$apellidos', '$correo', '$usuario', '$contraseña')";
$result = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conectar), E_USER_ERROR);
?>
