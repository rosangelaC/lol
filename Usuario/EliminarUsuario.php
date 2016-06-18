<?php
         session_start();
							$idUsu=$_GET['id'];
		
							$Nombre=$_GET['nick'];
							$apellido=$_GET['clave'];
							
							$IdPri=$_GET['tipo'];
							
		
        $conexion = mysql_connect("localhost","root","");

        if(!$conexion){
        die ("No he podido conectar por la siguiente razon: ".mysql_error());
        }

        mysql_select_db("colegio",$conexion);

       $consulta= mysql_query("DELETE FROM usuario  WHERE id='".$idUsu."'");
       
              //IMPRIMIR CONSULTA
		
       
       mysql_close($conexion);
       
       
       //Refresca y redirecciona
	       
	echo'	
	  <html>
	  <head>
			<meta http-equiv="REFRESH" content="0; url=Usuario.php">
	  </head>
	  </html>
        ';


 ?>
