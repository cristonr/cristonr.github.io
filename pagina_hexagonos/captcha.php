<?php
session_start();
header("Content-type: image/jpeg");
$imagen = imagecreate(120, 20);
$color_fondo = imagecolorallocate($imagen, 219, 171, 11);
$color_texto = imagecolorallocate($imagen, 1,21,143);

imagestring($imagen, 15, 25, 3, $_SESSION['captcha'], $color_texto);
imagejpeg($imagen);
?>