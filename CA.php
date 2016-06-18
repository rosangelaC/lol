<?php
$conexion = mysql_connect("localhost","root","");

        if(!$conexion){
        die ("No he podido conectar por la siguiente razon: ".mysql_error());
        }


        mysql_select_db("primera",$conexion);
?>


  
<html>
 <body BACKGROUND ="/Parcial_Ultimo/images/fondo4.png">
 <center><img src="/Parcial_Ultimo/images/newClie.jpg"></center>    
<center><table border=1 width=30% >
<tr>
<td>
  <h1>DATOS</h1>
 <form action='PruebaC.php' method='POST' > 
<tr><td><br>CI  :</td><td><input type='text' name='Ccli' value=''></td></tr>
<tr><td><br>NOMBRE  :</td><td><input type='text' name='Nombre' value=''></td></tr>
<tr><td><br>DIRECCION  :</td><td><input type='text' name='Direccion' value=''></td></tr>
<tr><td><br>TELEFONO  :</td><td><input type='text' name='Telefono' value=''></td></tr>
<tr><td><br>SEXO  :</td><td><select name="sexo">
            <option>F</option>
            <option>M</option>
        </select></td></tr>
<tr><td><br>EDAD  :</td><td><input type='text' name='edad' value=''></td></tr>
       

	
<tr><td><br> POLITICA:</td><td><select name='politicas'>
<?php	
		$consulta2= mysql_query("SELECT NombrePO FROM politicadenegocio");
		while ($fila = mysql_fetch_array($consulta2)) 
                {
					echo"<option>";
					echo $fila['NombrePO'];
					echo"</option>";
					 
                 
                }
mysql_close($conexion);
?>

</select></td></tr>

<tr><td><br>          </td><td><br><input type='submit' value='Aceptar'/></td></tr>

</form>
</body>
</html>