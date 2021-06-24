


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require 'includes/conexion.php';

if (isset($_POST['usuario']) and isset($_POST['clave']) ) {
    
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];



    $sql="INSERT INTO usuario VALUES (NULL,'$usuario','$clave',now())";
    
    $guardar=mysqli_query($conn,$sql);
}else {




?>

<p><?php echo "no pudo registrar"; ?></p>

<?php     
}
?>

    <form action="registrar.php" method="post">

    <input type="text" name="usuario" id="">
    <input type="password" name="clave" id="">
    <input type="submit" value="enviar">
    
    
    </form>
    
</body>
</html>