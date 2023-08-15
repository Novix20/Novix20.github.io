<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "phpmyadmin";
$password = "RedesInformaticas";
$dbname = "db_ibarra";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";
if ($conn->query($sql) === TRUE) {
  echo "Registro exitoso";
} else {
  echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>