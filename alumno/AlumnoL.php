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

       $consulta= mysql_query("SELECT ci,apellido_pat,apellido_mat,nombre FROM estudiante");
       
       //IMPRIMIR CONSULTA
       echo '<table border=1 width=100%>
            <tr>
            <td>CI   </td>
            <td>PATERNO  </td>
            <td>MATERNO  </td>
			<td>NOMBRE</td>

            <td></td>
            <td></td>
            </tr>
            '; 
      echo" <h1> USUARIO</h1>";
                while ($fila = mysql_fetch_array($consulta)) 
                {
                echo "<tr><td>".$fila['ci']."</td>
						  <td>".$fila['apellido_pat']."</td>
						  <td>".$fila['apellido_mat']."</td>
						  
						  <td>".$fila['nombre']."</td>
						  
						  
						  

								 	 

					 </tr>"
					 
                 ;
                }




mysql_close($conexion);

        ?>
    </body>
</html>
