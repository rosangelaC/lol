<?php
         session_start();
			$Id=$_POST['Id'];

			$Login=$_POST['Login'];
			$Password=$_POST['contra'];
			$Id=$_POST['Id'];
			$Privilegio=$_POST['privilegio'];
			

									  echo $Privilegio;
		
									  
$conexion = mysql_connect("localhost","root","");

        if(!$conexion){
        die ("No he podido conectar por la siguiente razon: ".mysql_error());
        }

        mysql_select_db("colegio",$conexion);

    mysql_query("INSERT INTO usuario(id,nick,clave,tipo) VALUES
	('".$Id."','".$Login."','".$Password."','".$Privilegio."')
	");
       
              
		
       
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

 
