<?php
session_start();

$host_db = "173.194.107.21";
$user_db = "root";
$pass_db = "root";
$db_name = "fundacion_telefonica";
$tbl_name = "users";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['name'];
$password = $_POST['pass'];

$sql = "SELECT * FROM $tbl_name WHERE email = '$username' and password = '$password'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {
  $_SESSION['loggedin'] = true;
  header('Location: http://localhost/Administrador/Inicio/');
 }else {
   header('Location: http://localhost/Administrador/?');
 }
 mysqli_close($conexion);
 ?>
