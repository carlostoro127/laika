<?php
include("conexion.php");

?>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <title>Actualizando</title>
  
  <link rel="stylesheet" href="example/example.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <!--.......................-->
  </head>
  <iframe src="sweetalert.html" style="display:none;"></iframe>
<?php


if(isset($_POST['actualizar'])&& !empty($_POST["actualizar"]))
{
$nombre_servicio=$_POST['nombre_servicio'];
$precio_servicio=$_POST['precio_servicio'];
$descripcion=$_POST['descripcion'];
$id_servicio=$_POST['id_servicio'];



if($nombre_servicio!="")
{
$Modifica="update servicios  set nombre_servicio='".$nombre_servicio."' WHERE  id_servicio=$id_servicio;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($precio_servicio!="")
{
$Modifica="update servicios  set precio_servicio='".$precio_servicio."' WHERE  id_servicio=$id_servicio;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($descripcion!="")
{
$Modifica="update servicios  set descripcion='".$descripcion."' WHERE  id_servicio=$id_servicio;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}





echo "

<script>

swal({
  title: 'Realizado',
  text: 'Datos actualizados exitosamente',
  type: 'success',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Continuar',
  closeOnConfirm: true
},
function(){
  window.location='edicion_registros.php';
});



</script>";


	
	}//final if principal
	
	
	else
	{
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para ver si esta separado por " ; "
              	echo "

<script>

swal({
  title: 'Error',
  text: 'El registro no pudo ser modificado',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='edicion_registros.php';
});



</script>";
	}




?>
