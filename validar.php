<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contra'];
session_start();
$_SESSION['usuario']=$usuario;

include 'db.php';

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contra='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas){
	header("location:principal.php");
}
else 
{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">Error en la autenticacion</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

 ?>