<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
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
	
    
}				  
			
  	</style>


<?php 
require 'php/conexion.php';
require 'php/empresa.php';


?>
		<div class="container">
			<div class="row">
            
		<div class="col-xs-6">
			<h1><a href=" "> <!-- COLOCAR PAGINA WEB DE LA EMPRESA  --><img id="imagen" alt=""  src="img/logo3.png" /></a></h1>
		</div>
		<div class="col-xs-6 text-right">
							<div class="panel panel-default">
							<div class="panel-heading">
									<h4>RIF: 
										<?php echo "$rif"; ?>
									</h4>
									<h4><?php echo "$empresa"; ?>
									</h4>
							</div>
							<div class="panel-body" id="factura">
								<h4>FACTURA : 
									<input type="text" name="" placeholder="Numero de Factura" id="">
								</h4>
							</div>
						</div>
					</div>
 
			<hr />
 
			
				<h1 style="text-align: center;">FACTURA</h1> 
			
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4> <?php echo "Caracas " . date("d") . " del " . date("m") . " de " . date("Y"); ?> 
									
									</h4>
								</div>
						<div class="panel-body" id="panel" >
						
							
								<h4>Comprador :  
									<input  type="text" name="" placeholder="Nombre y Apellido" id="">
									CI/RIF :
									<input  type="text" name="" placeholder="" id="">
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
				<h4>Cantidad</h4>
			</th>
			<th style="text-align: center;">
				<h4>Concepto</h4>
			</th>
			<th style="text-align: center;">
				<h4>Precio unitario</h4>
			</th>
			<th style="text-align: center;">
				<h4>Total</h4>
			</th>
			
		</tr>
	</thead>
	<tbody>
	
		<tr>
			<td style="text-align: center;">1</td>

			<td><select name="" id="">
			<?PHP 

			$consulta="SELECT * FROM art";

			$empresa=mysqli_query($conn,$consulta);
    		
			while ($datos=mysqli_fetch_assoc($empresa)) {
				$art_des=$datos['art_des'];
				
				
				
			?>
			<option value='<?php echo "$art_des"; ?>'><?php echo "$art_des"; ?></option>
			<?php }?>
			</select></td>
			
			<td class=" text-right ">28500</td>
			<td class=" text-right ">28500</td>
			
			
		</tr>
		<!-- <tr>
			<td style="text-align: center;"><input type="number" name="" id=""></td>
			<td><a href="#"> <input type="text" name="" id=""> </a></td>
			<td class=" text-right "><input type="number" name="" id=""></td>
			<td class=" text-right "><input type="number" name="" id=""></td>
			
			
		</tr> -->
		<tr>
			<td>&nbsp;</td>
			<td><a href="#"> &nbsp; </a></td>
			<td class="text-right">&nbsp;</td>
			<td class="text-right ">&nbsp;</td>
			
		</tr>
		<tr >
			<td colspan="3" style="text-align: right;">Total Bs.</td>
			<td style="text-align: right;"><a href="#" > 28500 </a></td>
			
			
		</tr>
		
		
	</tbody>
</table>
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
	<center><input type="button" name="imprimir" value="Imprimir" onclick="window.print();"> </center>
	<br>
	
</body>
</html>