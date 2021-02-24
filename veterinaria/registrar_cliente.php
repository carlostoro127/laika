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

$nombre_cliente=$_POST['nombre_cliente'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$nombre_mascota=$_POST['nombre_mascota'];
$especie=$_POST['especie'];
$raza=$_POST['raza'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$servicio=$_POST['servicio'];





 



$sql="INSERT INTO clientes(nombre_cliente, direccion, telefono, correo, nombre_mascota, especie, raza, fecha_nacimiento, servicio) VALUES ($nombre_cliente, $direccion, $telefono, $correo, $nombre_mascota, $especie, $raza, $fecha_nacimiento, $servicio);";

mysql_query($sql);

echo "

<script>

swal({
  title: 'Realizado',
  text: 'Usuario creado exitosamente',
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
  text: 'El usuario no pudo ser creado',
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
