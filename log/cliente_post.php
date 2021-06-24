
<?php


include 'php/loading.php';



if (isset($_POST)) {
    require 'php/conexion.php';

  // var_dump($_POST);


    
    $nombre=isset($_POST ['nombre']) ? mysqli_real_escape_string($conn,$_POST['nombre']):false ;
    $ci=isset ($_POST ['ci']) ? mysqli_real_escape_string($conn,$_POST ['ci'] ): false ;
    $numero=isset($_POST ['numero']) ? mysqli_real_escape_string($conn,trim($_POST ['numero'])) : false;
    $email=isset($_POST ['email']) ? mysqli_real_escape_string($conn,trim($_POST ['email'])) :false;
    $informe=isset ($_POST ['informe']) ? mysqli_real_escape_string($conn,$_POST ['informe'] ): false ;
    $direccion=isset ($_POST ['direccion']) ? mysqli_real_escape_string($conn,$_POST ['direccion'] ): false ;

    if ($conn) {
        $sql= "INSERT INTO clientes VALUES (null,'$nombre','$ci','$numero','$email','$direccion','$informe',null,now())";
 
        $guardar = mysqli_query($conn,$sql);

        if (!$guardar) {
           
           $error= mysqli_error($conn);
           echo "<br><center><h3>ERROR</h3></center>";
           echo "<h4>$error</h4>";

            
           echo "<a href='inicio.php' class='btn btn-danger'>Salir</a>";
           die();
           
            
        }else {
            header('refresh:2;url= clientes.php');
            exit;
        }

            
 
    }
  

   
} else{
    header('refresh:2;url= clientes.php');
    exit;
}

















?>












