
<?php

require '../includes/log.php';



if (isset($_POST)) {
    require '../includes/conexion.php';



    
    $linea_des=isset($_POST ['linea_des']) ? mysqli_real_escape_string($conn,$_POST['linea_des']):false ;
    

    if ($conn) {
        $sql= "INSERT INTO linea VALUES (null,'$linea_des',now())";
 
        $guardar = mysqli_query($conn,$sql);

        if (!$guardar) {
           
           $error= mysqli_error($conn);
           echo "<center><h3>ERROR</h3>";
           echo "<h4>$error</h4>";

            
           echo "<a href='inicio.php' class='btn btn-danger'>Salir</a></center>";
           die();
           
            
        }else {
           
            header('location: articulos.php');
            exit;
        }

            
 
    }else {
           
        header('location: articulos.php');
        exit;
    }

  

   
} else{
    header('location: articulos.php');
    exit;
}

















?>













