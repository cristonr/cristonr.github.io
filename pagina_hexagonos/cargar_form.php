<?php
session_start();
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha = date("Y-m-d");
$nombre_us = $_POST['nombre'];
$correo_us = $_POST['correo'];
$consulta = $_POST['consulta'];
include('conexion.php');
if($_POST['codigo_captcha'] == $_SESSION['captcha']) {

mysqli_query($conectar, "INSERT INTO consultas_cris VALUES('$fecha','$nombre_us','$correo_us', '$consulta')");
    header('Location: contacto.php?ok');

}else{
	header("Location: contacto.php?error");
}
?>