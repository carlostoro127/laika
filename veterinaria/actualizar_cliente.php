<?php
include("conexion.php");

?>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="wid_clienteth=device-wid_clienteth, initial-scale=1, maximum-scale=1, user-scalable=0" />
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
$id_cliente=$_POST['id_cliente'];
$nombre_cliente=$_POST['nombre_cliente'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$nombre_mascota=$_POST['nombre_mascota'];
$especie=$_POST['especie'];
$raza=$_POST['raza'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$servicio=$_POST['servicio']; 




if($nombre_cliente!="")
{
$Modifica="update clientes  set nombre_cliente='".$nombre_cliente."' WHERE id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($direccion!="")
{
$Modifica="update clientes  set direccion='".$direccion."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($telefono!="")
{
$Modifica="update clientes  set telefono='".$telefono."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($correo!="")
{
$Modifica="update clientes  set correo='".$correo."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($nombre_mascota!="")
{
$Modifica="update clientes  set nombre_mascota='".$nombre_mascota."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($especie!="")
{
$Modifica="update clientes  set especie='".$especie."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($raza!="")
{
$Modifica="update clientes  set raza='".$raza."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($fecha_nacimiento!="")
{
$Modifica="update clientes  set fecha_nacimiento='".$fecha_nacimiento."' WHERE  id_cliente=$id_cliente;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}

if($servicio!="")
{
$Modifica="update clientes  set servicio='".$servicio."' WHERE  id_cliente=$id_cliente;";

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
