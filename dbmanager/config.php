<?php
define('USER','uv7ypx6ohdrtfm1i');
define('PASSWORD','m4D81lC0dmQ0Si0vVK5r');
define('HOST','bvxmpll4hj0jha1zvqmw-mysql.services.clever-cloud.com');
define('DATABASE','bvxmpll4hj0jha1zvqmw');

$mysqli = new mysqli(HOST, USER, PASSWORD,DATABASE);
if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}
?>
