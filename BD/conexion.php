<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tesis";
$port = 3306;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Ya no se necesita este mensaje, eliminamos esta respuesta.
?>
