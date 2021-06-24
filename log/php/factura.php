<?php

require 'php/conexion.php';

		
		

		
			
			$consulta = "SELECT * FROM facturas ";
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

		



?>