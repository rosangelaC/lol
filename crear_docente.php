<?php 
include("conexion.php"); //con esto abro la conexion
if($_POST['op']=="Guardar"){
 mysql_query("insert into docente values ('".$_POST['ci']."','".$_POST['paterno']."','".$_POST['materno']."','".$_POST['nombre']."')") or die ("mal");
$id = mysql_insert_id();
 echo '<script language="javascript"> location.href="Docente.php?idh='.$id.'"</script>';
}
else{
echo '<script language="javascript"> location.href="paginaDocente.php"</script>';
}
?>