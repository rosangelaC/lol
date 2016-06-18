<?php

		
							$idUsu=$_POST['IdUsuario'];
							$Nombre=$_POST['Login'];
							$apellido=$_POST['password'];
							$IdPri=$_POST['IdP'];
							echo $idUsu;
							echo $Nombre;
							echo $apellido;
							echo $IdPri;
        
     
           

			$conexion = mysql_connect("localhost","root","");

				if(!$conexion){
				die ("No he podido conectar por la siguiente razon: ".mysql_error());
				}

				mysql_select_db("colegio",$conexion);

			mysql_query("UPDATE usuario SET   id='".$idUsu."' , nick='".$Nombre."', clave='".$IdPri."',tipo='".$apellido."'	 where id='".$idUsu."'");

			


mysql_close($conexion);
           
		echo'	
	  <html>
	  <head>
			<meta http-equiv="REFRESH" content="0; url=Usuario.php">
	  </head>
	  </html>
        ';
?>