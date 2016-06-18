<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>

	
	
	
	
	
    <body >
	<img  src = "/tecnoWeb/images/eagles.png" width = "1300" height = "100" alt = "logo" /> 
        <?php
        

        $conexion = mysql_connect("localhost","root","");

        if(!$conexion){
        die ("No he podido conectar por la siguiente razon: ".mysql_error());
        }

        mysql_select_db("colegio",$conexion);

       $consulta= mysql_query("SELECT id,nick,clave,tipo FROM usuario");
       
       //IMPRIMIR CONSULTA
       echo '<table border=1 width=100%>
            <tr>
            <td>CI   </td>
            <td>LOGIN  </td>
            <td>PASSWORD  </td>
			<td>TIPO</td>

            <td></td>
            <td></td>
            </tr>
            '; 
      echo" <h1> USUARIO</h1>";
                while ($fila = mysql_fetch_array($consulta)) 
                {
                echo "<tr><td>".$fila['id']."</td>
						  <td>".$fila['nick']."</td>
						  <td>".$fila['clave']."</td>
						  
						  <td>".$fila['tipo']."</td>
						  
						  
						  
								 <td><a href='EliminarUsuario.php?id="
								 .$fila['id']."&nick="
								 .$fila['nick']."&clave="
								 .$fila['clave']."&tipo="
								 
								 .$fila['tipo']."'> Eliminar</a></td>
								 <td><a href='ActualizarUsuario.php?id="
								 .$fila['id']."&nick="
								 .$fila['nick']."&clave="
								 .$fila['clave']."&tipo="
								 .$fila['tipo']."'> Actualizar</a></td>
								 	 

					 </tr>"
					 
                 ;
                }




mysql_close($conexion);

        ?>
    </body>
</html>
