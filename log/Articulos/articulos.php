<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fondo.css">
    
    <title>Inicio</title>
</head>
<style>
    table{
        font-size: 25px;
        border: black solid;
        
        
    }
    form {
        border:black ;
        border-radius: 10px;  
        padding-top:10px;
        background-color:  rgba(29, 27, 27, 0.205);
        box-shadow: 2px 2px 5px #999;
    }
    form button {
        margin: 5px 0 5px 0;
    }
    form .form-group{
      margin-top:5px;
    }
    table td {
      color:black;
    }
   
    
</style>
<?php


require_once 'php/header.php';
require_once 'php/menu.php';

?>
<body>
 


<div class="container mt-2">
  <div class="row">
    <!-- CARGAR ARTICULO -->
    
    <div class="row">
    <div class="col">
    <h2>Registrar Articulos</h2>
      <div class="card-body">

        <form action="articulo_post.php" method="POST" >
        <center>
          <div class="form-group">
            <input type="text" style="width: 95%;" name="art_des" placeholder="Descripción" class="form-control" autofocus required>
          </div>
          <div class="form-group">
            <input type="text"style="width: 95%;" name="co_art" placeholder="Código" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="number" style="width: 95%;"  name="ref_art" placeholder="Referencia" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="number" style="width: 95%;" name="stock" placeholder="Cantidad" class="form-control" required>
          </div>
      
         <button type="submit" class="btn btn-primary">
            Save
          </button></center>
        </form>
      </div>
     </div>

     
     <div class="col">
     <h2>Buscar Articulo</h2>
      <div class="card-body">

        <form action="articulo_get.php" method="POST" >
        <center>
          <div class="form-group">
            <input type="text" style="width: 95%;" name="art_des" placeholder="Descripción" class="form-control" autofocus>
          </div>
       
          
      
         <button type="submit" class="btn btn-primary">
            Search
          </button></center>
        </form>
      </div>
     </div>
    

    </div>

    <hr>
  
   
      <table class="table table-bordered table-hover" id="tblData">
        <thead >
          <tr class="table-secondary">
            
            <td>Descripción</td>
            <td>Código</td>
            <td>Precio</td>
            <td>Referencia</td>
            <td>Cantidad</td>
            <td>Accion</td>
          </tr>
        </thead>
        <tbody>

        
        <?php
         
          require 'php/conexion.php';

          //CONSULTA DE ARTICULOS
          $consulta="SELECT * FROM art";
          $runC=mysqli_query($conn,$consulta);

          //CONSULTA DE LA TASA DEL DIA
        
          $tasa="SELECT tasa_dia FROM configuracion where ref=0";
          $runT=mysqli_query($conn,$tasa);
          $rowT=mysqli_fetch_assoc($runT);
          $dolar=$rowT['tasa_dia'];   

          while($rowC=mysqli_fetch_assoc($runC)) { 
            $campo1=$rowC['id'];
            $campo2=$rowC['art_des'];
            $campo3=$rowC['co_art'];
            $campo4=$rowC['ref_art'];
                $total=$campo4*$dolar;
                $bolivares=number_format($total, 2, ',', '.');
            $campo5=$rowC['stock'];    
            ?>
          <tr>
           
            <td><?php echo $campo2; ?></td>
            <td><?php echo $campo3; ?></td>
            <td>Bs.<?php echo $bolivares; ?></td>
            <td><?php echo $campo4; ?></td>
            <td><?php echo $campo5; ?></td>
            <td>
              <a href='edit.php?id=<?php echo $campo1?>' class='btn btn-info'>
                <i class='fas fa-marker'></i>
              </a>
              <a href='delete.php?id=<?php echo $campo1?>' class='btn btn-danger'>
                <i class='far fa-trash-alt'></i>
              </a>
            </td>
          </tr>
          <?php } ?>


        <?php

    
/*           while($rowC=mysqli_fetch_assoc($runC)) { 
            $campo1=$rowC['id'];
            $campo2=$rowC['art_des'];
            $campo3=$rowC['co_art'];
            $campo4=$rowC['ref_art'];
                $total=$campo4*$dolar;
                $bolivares=number_format($total, 2, ',', '.');
            $campo5=$rowC['stock'];
            
              echo "
            <tr>
              <td>".$campo1."</td>
              <td>".$campo2."</td>
                  <td>".$campo3."</td>
                  <td>Bs.".$bolivares."</td>
                  <td>".$campo4."</td>
                  <td>".$campo5."</td>
                  <td>
                  <a href='edit.php?id= $campo1['id']' class='btn btn-secondary'>
                    <i class='fas fa-marker'></i>
                  </a>
                  <a href='delete_task.php?id= $campo1['id']' class='btn btn-danger'>
                    <i class='far fa-trash-alt'></i>
                  </a>
                </td>
              
            </tr>";
            
            
          } */

?>
        

        </tbody>
      </table>




      
    



  </div>
</div>
    




<?php
require_once 'php/excel.php';  
require_once 'php/footer.php';

?>










