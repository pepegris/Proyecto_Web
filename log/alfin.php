<?php



session_start();

$usuario=$_SESSION['username'];

if (!isset($usuario)) {
    header("location:login.php");
}


echo "$usuario";



?>
<a href="salir.php">dasda</a>