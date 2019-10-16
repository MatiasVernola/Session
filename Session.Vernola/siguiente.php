<?php
session_start();
?>

<?php
if (isset($_SESSION['nombre'])) { //voy a buscar la variable nomre, no la variable session
	echo "Bienvenido " .($_SESSION['nombre']);
}
else
{
	echo "no estas logueado";
}
//var_dump($_GET);
//var_dump($_SESSION);
//$_SESSION['nombre']=$_GET ["nombre"];
//echo "<br>";
//var_dump($_SESSION);
?> 