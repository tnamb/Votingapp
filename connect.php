<?php
$host = "localhost";
$username = "root";
$password = "tiger";
$name = "namb";

$dbc = mysqli_connect($host, $username, $password, $name) or die ("Connection Error".mysqli_error($dbc));
?>
