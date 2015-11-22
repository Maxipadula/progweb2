<html>
	<head>
	

	</head>
	
	<body>
		<?php
			include ('../rutas.php');
			
			
			
			
			
			
		?>
			
		<p>PORFAVOR ESCANEAR EL CODIGO 'QR' ENTREGADO E INGRESAR EL ID DE SU VIAJE </p>
			
		<form class='contacto' method="post" action="<?php echo $validar_id_viaje?>">
		<div id="contacto">
		        </br>
				<div><label>ID DE VIAJE
					<input type="text" name="id_viaje">
					</label>
				</div>
				</br>
				
		
			</div>
			</form>
			</div>
		</div>
	</body>
</html>