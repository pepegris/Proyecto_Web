<?PHP
require 'includes/conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

var_dump($_POST);

$sql = "SELECT count(*) as contar from usuario where usuario = '$usuario' and clave = '$clave'";

$consulta=mysqli_query($conn,$sql);
$array=array();
$array=mysqli_fetch_array($consulta);

if ($array['contar']>0) {

    $_SESSION['username']=$usuario;
    header ("location:alfin.php");
    
}else {
    echo "la sigue cagando";
}









?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>ENTRO</h5>
</body>
</html>