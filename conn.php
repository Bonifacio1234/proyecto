<?php

$conn = new mysqli("localhost", "root", "", "sesion");

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
 
?>