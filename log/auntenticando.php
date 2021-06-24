
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
</head>

<?php
include 'includes/loading.php';



 if (isset($_POST)) {

    require 'includes/conexion.php';
    session_start();

    $usuario = $_POST['user'];
    $clave = $_POST['pass'];



    $sql = "SELECT count(*) as contar from usuario where usuario = '$usuario' and clave = '$clave'";

$consulta=mysqli_query($conn,$sql);
$array=array();
$array=mysqli_fetch_array($consulta);

if ($array['contar']>0) {

    $_SESSION['username']=$usuario;

    header('refresh:3;url=  config/inicio.php');
    
    
}else {
    header ("location:index.php");
}

    
    
    
} else {
    header ("location:index.php");
}
?>
</html>