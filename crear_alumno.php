<?php 
include("conexion.php"); //con esto abro la conexion
if($_POST['op']=="Guardar"){//error 
 mysql_query("insert into estudiante values ('".$_POST['ci']."','".$_POST['paterno']."','".$_POST['materno']."','".$_POST['nombre']."')") or die ("mal");
$id = mysql_insert_id();
 echo '<script language="javascript"> location.href="Alumno.php?idh='.$id.'"</script>';
}
else{
echo '<script language="javascript"> location.href="paginaAlumno.php"</script>';
}
?>