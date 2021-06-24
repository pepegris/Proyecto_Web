
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>

<?php
include 'php/loading.php';



 if (isset($_POST)) {

    
    $usuario=$_POST['user'];
    $clave=$_POST['pass'];

    
    if ($usuario == 'sistema' && $clave == 'sistema123' ) {

        header('refresh:5;url=  inicio.php');

    //    header('refresh:5;url= inicio.php');
        exit;

        
    } else {
        
        header('refresh:5;url= index.php');
        exit;


    }
    
    
} 
?>
</html>