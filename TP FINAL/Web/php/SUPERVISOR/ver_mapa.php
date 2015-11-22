<html>		

	<?php include ("supervisor_home.php");
	
			
	 
		include ('../rutas.php');
	  
		$permiso = "supervisor home";
	  	
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");
	  
		include("../permiso.php");
	  
		if ( isset ($_SESSION["nombre"])){
		
		$nombre = $_SESSION["nombre"];
	   
		}
		else{
		     session_destroy();
    
           header("location:login.php");
	   }
	   
	?>
	<!DOCTYPE html>
	<div id="divContenedor">
	<div class="divTabla">
	<head>
	<center>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
		
		<script src="http://maps.googleapis.com/maps/api/js"></script> <!--La API de Google Maps es una biblioteca JavaScript.-->
		<script>
			function initialize() {                    /*para inicializar el mapa */
				var mapProp = {                            /*objetivo, para las propiedades del mapa */  
					center:new google.maps.LatLng(-34.62529785895708,-58.383750915527344),    /*latitud y longitud del mapa */
					zoom:5,                               
					mapTypeId:google.maps.MapTypeId.ROADMAP    /*tipos de mapas */
				};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp); /*El código anterior crea un nuevo mapa en el interior del elemento*/
				var mapa = new google.maps.Map(map, mapProp);
				var marcador = new google.maps.Marker({  
					position: new google.maps.LatLng(-34.62529785895708, -58.383750915527344),
					map: map
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize); /*ejecuta la funcion de "initialize"*/
		
		</script>
	
	</head>

		<body>
			<div id="googleMap" style="width:500px;height:380px;"></div>   
		</body>
	</center>
	</div>
	</div>
</html>
