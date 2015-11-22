<?PHP

   include ("chofer_home.php");
	
	$fecha_hora =$_POST ["fecha_hora_vc"];
	$lugar =$_POST ["lugar_vc"];
	$costo =$_POST ["costo_vc"];
	$cantidad =$_POST ["cantidad_vc"];
	$id_viaje=$_POST ["id_viaje"];

	

	
		include ('../rutas.php');
	

	
	$consultar_viaje= mysql_query("SELECT fecha_fin fin
					  FROM viaje
					  WHERE id_viaje = '".$id_viaje."'")or die ("no query");
					  
	$fecha = mysql_fetch_assoc($consultar_viaje);
	
	
	if($fecha["fin"] == 0){
	
			$consulta_id= mysql_query(" SELECT MAX( id_vc ) ID
                                        FROM vale_combustible ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_vc= $fila1["ID"];
			
			$id_vc++;
			
	
	$insert_vc = mysql_query("insert into vale_combustible(id_vc,id_viaje,  fecha_hora, lugar, costo, cantidad)
							                    values ('".$id_vc."','".$id_viaje."','".$fecha_hora."', '".$lugar."','".$costo."', '".$cantidad."');") or die (mysql_error());

		
		echo "<p>Los datos han sido guardados con exito.</p>" ; 

	}else
		echo"EL VIAJE QUE QUIERES MODIFICAR YA TERMINO";
?>