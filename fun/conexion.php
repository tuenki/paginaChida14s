<?php
$bd_host = 'localhost';
$bd_usuario = 'root';
$bd_password = '';
$bd_base = 'simuk';
$con = mysqli_connect($bd_host, $bd_usuario, $bd_password) or die (" ".mysqli_error());
mysqli_select_db($con,$bd_base)  or die ("".mysqli_error());
?>