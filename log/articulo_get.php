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
    
   
</style>

<?php
if (isset($_POST)) {
    require 'php/conexion.php';
}else {
    header('refresh:1;url= articulos.php');
    exit;
}

require_once 'php/header.php';
require_once 'php/menu.php';

?>
<body>
 
  <table class="table table-bordered table-hover" id="tblData" >
        <thead style="background-color: black;">
          <tr class="table-secondary">
            <td>n°</td>
            <td>Descripción</td>
            <td>Código</td>
            <td>Referencia</td>
            <td>Cantidad</td>
            <td>Accion</td>
          </tr>
        </thead>
        <tbody>
        <?php
         
         $art_des=$_POST['art_des'];
         if ($conn) {

            $sql= "SELECT * FROM art where art_des like '%$art_des%' ";
 
            $buscar = mysqli_query($conn,$sql);

          while($rowC=mysqli_fetch_assoc($buscar)) { 
              
            $campo1=$rowC['id'];
            $campo2=$rowC['art_des'];
            $campo3=$rowC['co_art'];
            $campo4=$rowC['ref_art'];
            $campo5=$rowC['stock'];    
            ?>
          <tr>
            <td><?php echo $campo1; ?></td>
            <td><?php echo $campo2; ?></td>
            <td><?php echo $campo3; ?></td>
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
          <?php } }else {
        header('refresh:5;url= articulos.php');
        exit;}?>






   
        </tbody>
      </table>




      <?php

require_once 'php/excel.php';      

require_once 'php/footer.php';

?>
