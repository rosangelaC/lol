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

       $consulta= mysql_query("SELECT id, nick, clave,tipo FROM usuario WHERE id=$idUsu");
       
              //IMPRIMIR CONSULTA
		echo "<center><table border=1 width=30%>
			<tr>
			<td>
<h1>DATOS</h1>				 
<form action='ProcesoActualizar.php' method='POST' > 
                                  
<tr><td><br> CI  :</td><td><input type='text' name='IdUsuario' value='".$idUsu."'></td></tr>

<tr><td><br>LOGIN :</td><td><input type='text' name='Login' value='".$Nombre."'></td></tr>
<tr><td><br>PRIVILEGIO :</td><td><input type='text' name='password' value='".$IdPri."'></td></tr>
<tr><td><br> PASSWORD :</td><td> <input type='password' name='IdP' value='' ></td></tr>

<tr><td><br> 	</td>	<td><br>		  <p> <center>           <input type='submit' value='Actualizar' ></td></tr>
				   
		   </td></center>

				   </form>
			</tr> ";

       
       
       mysql_close($conexion);
       
       
       //Refresca y redirecciona

 ?>
