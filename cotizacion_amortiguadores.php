<?php
include('dbmanager/config.php');
if (!isset($_POST['fullname']) || !isset($_POST['email']) || !isset($_POST['affair']) || !isset($_POST['phone']) || !isset($_POST['message'])){
        echo "falló";
  } else {
    $aceite = $_POST['aceite'];
    $nombre = $_POST['fullname'];
    $correo = $_POST['email'];
    $asunto = $_POST['affair'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['message'];
    $sqlnuevaCoti = "INSERT INTO `cotizacion` (`ID`, `Nombre`, `Email`,  `Telefono`, `Automovil`, `Mensaje`, `Servicio`) VALUES
                        (NULL, '$nombre', '$correo', '$telefono', '$asunto', '$mensaje', 'Cambio de amortiguadores')";
    $nuevaCoti = $mysqli->query($sqlnuevaCoti);
    if ($nuevaCoti) {
        // echo "Archivo Subido Correctamente.";
        header('location: servicio_amortiguadores.php');
    } else {
        echo "Ha fallado la subida, reintente nuevamente. <br><br>";
        echo mysqli_errno($mysqli).' - '.mysqli_error($mysqli);
    }
  }
$mysqli->close();
?>
