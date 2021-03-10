<?php
include('dbmanager/config.php');
if (!isset($_POST['datetime']) || !isset($_POST['fullname']) || !isset($_POST['lastname'])  ||  !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['affair']) || !isset($_POST['message'])){
        echo "falló";
  } else {
    $fecha = $_POST['datetime'];
    $nombre = $_POST['fullname'];
    $apellido = $_POST['lastname'];
    $correo = $_POST['email'];
    $telefono = $_POST['phone'];
    $asunto = $_POST['affair'];
    $mensaje = $_POST['message'];
    $ayuda = $_POST['ayuda'];
    $sqlnuevaCita = "INSERT INTO `cita` (`ID`, `nombre`, `apellido`, `correo`, `telefono`, `asunto`, `fecha`, `ayuda`,`mensaje`) VALUES
                        (NULL, '$nombre', '$apellido', '$correo', '$telefono', '$asunto', '$fecha', '$ayuda','$mensaje')";
    $nuevaCita = $mysqli->query($sqlnuevaCita);
    if ($nuevaCita) {
        // echo "Archivo Subido Correctamente.";
        header('location: contacto.php');
    } else {
        echo "Ha fallado la subida, reintente nuevamente. <br><br>";
        echo mysqli_errno($mysqli).' - '.mysqli_error($mysqli);
    }
  }

$mysqli->close();
?>
