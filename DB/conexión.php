<?php
$servername = "localhost"; // Cambia "localhost" si es necesario
$username = "root"; // Cambia "root" si es necesario 
$password = ""; // Cambia "password" si es necesario
$dbname = "Mapa_del_viajero"; // Cambia "Mapa_del_viajero" por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>