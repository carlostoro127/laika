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
$id_proveedor=$_POST['id_proveedor'];
$nombre_proverdor=$_POST['nombre_proverdor'];
$direccion_proveedor=$_POST['direccion_proveedor'];
$telefono_proveedor=$_POST['telefono_proveedor'];
$correo=$_POST['correo'];
$producto_servicio=$_POST['producto_servicio'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];




if($nombre_proverdor!="")
{
$Modifica="update proveedores  set nombre_proverdor='".$nombre_proverdor."' WHERE  id_proveedor=$id_proveedor;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($direccion_proveedor!="")
{
$Modifica="update proveedores  set direccion_proveedor='".$direccion_proveedor."' WHERE  id_proveedor=$id_proveedor;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($telefono_proveedor!="")
{
$Modifica="update proveedores  set telefono_proveedor='".$telefono_proveedor."' WHERE  id_proveedor=$id_proveedor;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($correo !="")
{
$Modifica="update proveedores  set correo='".$correo."' WHERE  id_proveedor=$id_proveedor;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($producto_servicio!="")
{
$Modifica="update proveedores  set producto_servicio='".$producto_servicio."' WHERE  id_proveedor=$id_proveedor;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($descripcion!="")
{
$Modifica="update proveedores  set descripcion='".$descripcion."' WHERE  id_proveedor=$id_proveedor;";

$resp=mysql_query($Modifica)or die("no se pudo modificar el dato<br>MySQL dice: ".mysql_error());
}
if($cantidad!="")
{
$Modifica="update proveedores  set cantidad='".$cantidad."' WHERE  id_proveedor=$id_proveedor;";

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
            //si aparece esto es posible que el archivo no tenga el correo adecuado, inclusive cuando es cvs, revisarlo para ver si esta separado por " ; "
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
