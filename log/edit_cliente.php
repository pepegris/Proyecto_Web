<?php
require 'php/conexion.php';



    $nombre='';
    $ci='';
    $numero='';
    $email='';    
    $direccion='';   
    $informe='';  
    $deuda='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM clientes WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    
    $nombre=$row['nombre'];
    $ci=$row['ci'];
    $numero=$row['numero'];
    $email=$row['email'];    
    $direccion=$row['direccion'];   
    $informe=$row['informe'];  
    $deuda=$row['deuda'];  
   // $fecha=$row['fecha']; 
    
  }
}

if (isset($_POST['update'])) {

    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $ci=$_POST['ci'];
    $numero=$_POST['numero'];
    $email=$_POST['email'];    
    $direccion=$_POST['direccion'];   
    $informe=$_POST['informe'];  
    $deuda=$_POST['deuda'];  
   // $fecha=$_POST['fecha']; 




  $query = "UPDATE clientes set nombre = '$nombre', ci = '$ci', numero = '$numero', email = '$email',direccion = '$direccion',informe = '$informe',deuda = '$deuda'  WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Edit Updated Successfully';
  $_SESSION['message_type'] = 'warning *EDITANDO*';
  header('Location: clientes_registrados.php');
}

?>
<?php include 'php/header.php';
      //include 'php/menu.php'; ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_cliente.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-group">
          <input type="text" name="nombre"  class="form-control" value="<?php echo $nombre; ?>" placeholder="Name">
        </div>

        <div class="form-group">
        <input type="text" name="ci"   class="form-control" value="<?php echo $ci;?>" placeholder="CI">
        </div>

        <div class="form-group">
        <input type="text" name="numero"  class="form-control" value="<?php echo $numero;?>" placeholder="Phone">
        </div>

        <div class="form-group">
        <input type="text" name="email"  class="form-control" value="<?php echo $email;?>" placeholder="Email">
        </div>

        <div class="form-group">
        <textarea class="form-control" name="direccion" id="exampleTextarea" rows="2"><?php echo $direccion;?></textarea>
        
        </div>

        <div class="form-group">
        <textarea class="form-control" name="informe" id="exampleTextarea" rows="3"><?php echo $informe;?></textarea>

        </div>

        <div class="form-group">
        <textarea class="form-control" name="deuda" id="exampleTextarea"  rows="2"><?php echo $deuda;?></textarea>
        </div>
        
        <button class="btn btn-primary" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('php/footer.php'); ?>
