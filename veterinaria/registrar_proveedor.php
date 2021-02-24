<?php
include("conexion.php");


?>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable='0'" />
  <title>Creando</title>
  
  <link rel="stylesheet" href="example/example.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <!--.......................-->
  </head>
  <iframe src="sweetalert.html" style="display:none;"></iframe>
<?php

if(isset($_POST['crear'])&& !empty($_POST["crear"])){

$nombre_proverdor=$_POST['nombre_proverdor'];
$direccion_proveedor=$_POST['direccion_proveedor'];
$telefono_proveedor=$_POST['telefono_proveedor'];
$correo=$_POST['correo'];
$producto_servicio=$_POST['producto_servicio'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];





 



$sql="INSERT INTO proveedores(nombre_proverdor, direccion_proveedor, telefono_proveedor, correo, producto_servicio, descripcion, cantidad) VALUES ($nombre_proverdor, $direccion_proveedor, $telefono_proveedor, $correo, $producto_servicio, $descripcion, $cantidad);";

mysql_query($sql);

echo "

<script>

swal({
  title: 'Realizado',
  text: 'proveedor creado exitosamente',
  type: 'success',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Continuar',
  closeOnConfirm: true
},
function(){
  window.location='crear_empresas.php';
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
  text: 'El proveedor no pudo ser creado',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='crear_empresas.php';
});



</script>";

	}






mysql_close();
?>
