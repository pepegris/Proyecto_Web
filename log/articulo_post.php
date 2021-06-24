
<?php


include 'php/loading.php';



if (isset($_POST)) {
    require 'php/conexion.php';

  // var_dump($_POST);
   
   /*   $art_des=$_POST['art_des'];
    $co_art=$_POST['co_art'];
    $ref_art=$_POST['ref_art'];
    $stock=$_POST['stock'];  */ 

    
    $art_des=isset($_POST ['art_des']) ? mysqli_real_escape_string($conn,$_POST['art_des']):false ;
    $co_art=isset ($_POST ['co_art']) ? mysqli_real_escape_string($conn,$_POST ['co_art'] ): false ;
    $ref_art=isset($_POST ['ref_art']) ? mysqli_real_escape_string($conn,trim($_POST ['ref_art'])) : false;
    $stock=isset($_POST ['stock']) ? mysqli_real_escape_string($conn,trim($_POST ['stock'])) :false;


    if ($conn) {
        $sql= "INSERT INTO art VALUES (null,'$art_des','$co_art',$ref_art,null,null,$stock,now())";
 
        $guardar = mysqli_query($conn,$sql);

        if (!$guardar) {
           
           $error= mysqli_error($conn);
           echo "<br><center><h3>ERROR</h3></center>";
           echo "<h4>$error</h4>";

            
           echo "<a href='inicio.php' class='btn btn-danger'>Salir</a>";
           die();
           
            
        }else {
            header('refresh:2;url= articulos.php');
            exit;
        }

            
 
    }
  

   
} else{
    header('refresh:2;url= articulos.php');
    exit;
}

















?>













