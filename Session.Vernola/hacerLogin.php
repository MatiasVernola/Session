<?php
session_start();
var_dump($_GET);
var_dump($_SESSION);
$_SESSION['nombre']=$_GET ["nombre"];
echo "<br>";
var_dump($_SESSION);
?> 