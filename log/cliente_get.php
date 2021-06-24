<?php
	
	if (isset($_POST)) {
		
		require 'php/conexion.php';
		require 'php/empresa.php';
		$nombre=$_POST['nombre'];

		if ($conn) {
			
			$consulta = "SELECT * FROM clientes WHERE nombre LIKE '%$nombre%'";
			$buscar = mysqli_query($conn,$consulta);
			$datos=mysqli_fetch_assoc($buscar);

			$id=$datos['id'];
			$nombre=$datos['nombre'];
			$ci=$datos['ci'];
			$numero=$datos['numero'];
			$email=$datos['email'];    
			$direccion=$datos['direccion'];   
			$informe=$datos['informe'];  
			$deuda=$datos['deuda'];  
		// $fecha=$datos['fecha']; 

		}

	
	}
		else{
			header('url= clientes_registrados.php');
			exit;
		}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pedido</title>
	<link href="css/factura/bootstrap.css" rel="stylesheet" />
	<style>@import url(http://fonts.googleapis.com/css?family=Bree+Serif);
  			body, h1, h2, h3, h4, h5, h6{
    			font-family: 'Bree Serif', serif;
 	 									}
	 @media (max-width: 900px){
    #panel input{
        width: 105px;
        height: 30px;
    }
	#factura input{
        width: 150px;
        height: 30px;
    }
	#imagen {
		height: 200px;
		
	}
    
}	
  	</style>
		<div class="container">
			<div class="row">
            
		<div class="col-xs-1">
			<h6><img id="imagen" alt="" style="height: 200px; width:200px"  src="img/logo.jpeg" /> 
			</h6>
			
		</div>
		<div class="col-xs-5">
			<!-- <h5><a href=" "><img alt="" /> <p>[NOMBRE]</p>
				<p>[COMPAÑIA]</p>
				<p>[DIRECCI&Oacute;N]</p>
				<p>[CIUDAD, COD POSTAL]</p>
				<p>[TELEF&Oacute;NO]</p> </a>
			</h5> -->
			
		</div>
		<div class="col-xs-6 text-right">
							<div class="panel panel-default">
							<div class="panel-heading">
									<h1>DATOS DEL CLIENTE
										<a href="#"></a>
									</h1>
									
							</div>
							
						</div>
					</div>
 
			<hr />
 
			
	
			
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4> <?php echo "Caracas " . date("d") . " del " . date("m") . " de " . date("Y"); ?> 
									
									</h4>
								</div>
						
						</div>
					</div>
					
				</div>

<pre></pre>
<table class="table table-bordered">
	<thead >
		<tr >
			<th style="text-align: center;">
				<h4>Datos</h4>
			</th>
		
			
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="3" style="text-align: center;">
				<p> Nombre:  <?php echo "$nombre"; ?></p>
				<p> CI:  <?php echo "$ci"; ?></p>
				<p>Email:  <?php echo "$email"; ?></p>
				<p>Direccion:  <?php echo "$ci"; ?></p>
				<p> Informe:  <?php echo "$informe"; ?></p>
				<p>Deuda: <?php echo "$deuda"; ?></p>
				
				
			</td>

		
			
			
		</tr>
		
		
		
	</tbody>
</table>
<pre></pre>

<pre></pre>
		

	<div class="row">
			<div class="col-xs-4">
				<h1><a href=" "><img alt="" src="img/qr.png" /></a></h1>
			</div>
		
	</div>
		
</div>
</div>

</head>
<body>
	<center><input type="button" name="imprimir" value="Imprimir" class="btn btn-success" onclick="window.print();"> </center>
	<br>
	
	
</body>
</html>