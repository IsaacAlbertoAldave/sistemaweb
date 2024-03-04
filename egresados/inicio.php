<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $_SESSION['usuario'];
    $nombre = $_SESSION['nombreCompleto'];
    } else {
    echo "No se ha iniciado sesión.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seguimiento de Egresados</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Seguimiento de Egresados</h2>
    
    <nav>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#perfil">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#mensajes">Mensajes</a>
            </li>            
        </ul>
    </nav>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><?php echo "Bienvenido exalumno: " .$nombre; ?></span>
  </div>
</nav>
    
    <div class="tab-content">
        <div class="tab-pane fade show active" id="inicio">
            <h3>Datos del Egresado</h3>
            <p><?php include 'inicio2.php' ?></p>
            <a href="
            /uno.html"></a>
        </div>
        <div class="tab-pane fade" id="perfil">
            <h3>Sección 1 encuesta</h3>
            <p>Primera parte de la encuesta.</p>
        </div>
        <div class="tab-pane fade" id="mensajes">
            <h3>Sección 2 encuesta</h3>
            <p>Segunda parte de la encuesta</p>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
