<?php

$Servidor = "localhost";
$usuario = "root";
$passworddb = "";
$baseDatos = "test";

$conn = new mysqli($Servidor, $usuario, $passworddb, $baseDatos);

if ($conn->connect_error){
    die ("Conexion fallida: " .$conn->connect_error);
}

$correo = $_POST['email'];
$passwordusr = $_POST['password'];

$sql = "SELECT nombre, apellidoPaterno, apellidoMaterno FROM usuarios WHERE correo='$correo' AND password='$passwordusr'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $nombreCompleto =  $row["nombre"]. $row["apellidoPaterno"] .$row["apellidoMaterno"];
        $_SESSION['nombreCompleto']= $nombreCompleto;
    }
   
    //echo $nombreCompleto;
    
    $_SESSION['usuario'] = $correo;
   
    header("location: inicio.php");
}else{
    echo "correo y contraseña incorrectos";    
    $conn->close();
    header("location: dos.html");
}

//$conn->close();

?>*/