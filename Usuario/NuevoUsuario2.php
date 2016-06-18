<body >
<img  src = "/tecnoWeb/images/eagles.png" width = "1300" height = "100" alt = "logo" /> 
<?php
$conexion = mysql_connect("localhost","root","");

        if(!$conexion){
        die ("No he podido conectar por la siguiente razon: ".mysql_error());
        }


        mysql_select_db("colegio",$conexion);
?>


  
<html>
 <body>

 <center><img src="/Parcial_Ultimo/images/NewU.jpg"></center>
 <h1><center>DATOS</center></h1>
 <center><table border=1 width=35% >
 <form action='Prueba1.php' method='POST' >
<tr><td>CI : </td><td><br><input type='text' name='Id' value='' /></td></tr>
<tr><td><br> LOGIN :</td><td><br><input type='text' name='Login' value='' /> </td></tr> 
<tr><td><br>PASSWORD :</td><td><br> <input type='password' name='contra' value='' /></td></tr>


       

<tr><td><br>TIPO: </td><td><br> <select name='privilegio'>

<?php

					echo"<option>";
					echo 'Alumno';
					echo"</option>";
					echo"<option>";
					echo 'Docente';
					echo"</option>";
					 
                 
?>
</select></td></tr>	
<br></br>

<?php	

mysql_close($conexion);
?>

</select></td></tr>
<br></br>
<tr><br><center>     <td> </td><td>     <input type='submit' value='Aceptar'/></td></tr>
<br></br>
</form>
    </table>
 </body>
</html>