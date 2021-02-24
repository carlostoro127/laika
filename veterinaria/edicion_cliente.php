<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ediciones</title>
	<link rel="stylesheet" href="jquery.dataTables.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script src="js/table.js"></script>
	

<style type='text/css'>
        /* Codigo CSS para pagina responsive*/
        @media only screen and (max-width: 630px) {
            body                    { width: 100% !important; -webkit-text-size-adjust: none; }
            table table             { width: 320px !important; }
            .scaleHeader            { width: 320px !important; !important; }
            .scaleFullwidth         { width: 320px !important; !important; }
            .scaleSeperator         { width: 320px !important; }
            .scaleFollowus          { width: 240px !important; }
            .fullWidth              { width: 320px !important; }
            .mobileImage            { margin: 20px auto; }
            .center                 { text-align: center !important; }
            .tableCenter            { margin-left: auto !important; margin-right: auto !important; float: none !important; }
            .columnMargin           { margin-bottom: 20px !important; }
            .button                 { margin-left: auto !important; margin-right: auto !important; float: none !important; }
        }
        .mobileImage {margin: 20px auto; }
        .mobileImage1 {margin: 20px auto; }
.mobileImage1 {margin: 20px auto; }

/*css del plugin*/

/*css que contiene el tamaño del div, espaciadores, tamaño de la fuante, fuente a utilizar
color de fondo en el div y grosor del borde
*/
.menu{
    padding:0;
    list-style:none;
    width:200px;
    font-size:18px;
    font-family: Helvetica, Arial, sans-serif;
    background:#FFF;
    
}
 /*contiene codigos css para:
mostrar el contenido, grosor de bordes entre divs, color de fondo, decoraciones al texto, color de texto, 
sombra del texto y ubicacion del mismo.
 */
.menu li a{
    display: block;
    border-bottom: 1px solid rgba(0,0,0, 0.2);
    border-top: 1px solid rgba(255,255,255, 0.2);
    background:#C3C8CC;
    text-decoration:none;
    font-family: Helvetica, Arial, sans-serif;
    color:#000;
    text-shadow: 1px 0px 1px rgba(0,0,0,0.2);
    filter: dropshadow(color=#000, offx=1, offy=0);
    padding:10px;
    padding-left:20px;
	text-align: center;
}
 /*contiene codigos css para:
  color de letra en las columnas que se expanden,  
sombra del texto y ubicacion del mismo.
 */
.menu li ul li a{
    font-size:14px;
    font-family: Helvetica, Arial, sans-serif;
    color:#47689d;
    text-shadow: 1px 0px 1px rgba(255,255,255,0.5);
    
}
 /*contiene codigos css para:
  color de fondo en las columnas que se expanden (azul)y tiempo de transicion en la funcion.
 */
.menu li a:hover{
    background:#9da4a9;
    -moz-transition: background 0.3s ease-in;
    -webkit-transition: background 0.3s ease-in;
    -o-transition: background 0.3s ease-in;
}
 /*contiene codigos css para:
  tiempo de transicion en la funcion para expandir y contraer las columnas.
 */
.menu ul{
    margin:0;
    padding:0;
    list-style:none;
    height:0;
    overflow: hidden;
    transition:1s;
    -moz-transition:1s;
    -webkit-transition:1s;
}
 /*contiene codigos css para:
  permite mostrar las columnas cuando la funcion de expansion se ejecuta.
 */
.menu li:hover ul{
    height:350px;
    overflow-y:auto;
    overflow-x:hidden;
}


/*contiene codigos css para:
  color de fondo en las columnas que se expanden(blanco).
 */ 
.menu ul li a{
    background:#fafafa;
}
 
.menu ul li a:hover {
    background: none repeat scroll 0 0 #ccc;
    color: #fff;
    -moz-transition: color 0.4s ease;
    -webkit-transition: color 0.4s ease;
    -o-transition: color 0.4s ease;
}

 /*css 1 para popup ubicacion fondo oscuro*/
        #preloader {
    position: fixed;
    top:0; left:0;
    right:0; bottom:0;
    background-color:  rgba(0,0,0,0.48); 
    z-index: 100;
    padding: 0px;
    margin: 0px;
    display:block;
}
/*css 2 para popup ubicacion imagen*/
#loader {
    display:block;
    max-width: 600px;
    left:50%; top:50%;
   position: absolute;
    right:0;
    bottom:0;
    margin:-250px 0 0 -300px;
}



        </style>
</head>
<body style="font-family:Arial, Helvetica, Verdana;">
<a href="logout.php" style='text-decoration:none; color:#000; '><div style=" float:left; width: 200px; font-family:Arial, Helvetica, Verdana; font-weight: bold; margin-left:1052px;   background-color:#FFE600; text-align:center;">Logout</div></a>
<script type="text/javascript">
function mostrar1(){
document.getElementById('oculto1').style.display = 'block';
document.getElementById('oculto2').style.display = 'none';
}
</script>
<script type="text/javascript">
function mostrar2(){
document.getElementById('oculto1').style.display = 'none';
document.getElementById('oculto2').style.display = 'block';
}
</script>


<br><br>
<!--MENU PEQUEÑO-->
<div style="float:left; display:none;" id='oculto1' >
<img src="images/menu_icon.png" onclick="mostrar2()" style="float:left;  width:40px; margin-left:30px;  cursor: pointer;" title="Ocultar menu">



<a href="index.php"><div title="Inicio" style="cursor: pointer; font-family:Arial, Helvetica, Verdana; font-weight: bold; background-color: #c3c8cc; width:40px; height:40px; float:left; margin-left:30px; "><center><img src="images/home_icon.png"  style="width:30px;" alt="home_icon"/></center></div></a>


</div>

<img src="images/menuo_icon.png" id='oculto2' onclick="mostrar1()" style="float:left; width:40px; margin-left:30px;  cursor: pointer;" title="Desplegar menu">
<!--MENU PEQUEÑO-->
<br><br><br><br>
<br>

<br><br>

<?php



 $query = "SELECT * FROM  clientes";


    $result = mysql_query($query); 
    $numero_registros = mysql_num_rows($result); 
	
	echo'
	<table id="tabla" class="display" cellspacing="0"  style="background-color: #FFF; border:1px; margin-top:30px; ">
        <thead>
            <tr>

<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">Nombres</th>		
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">direccion</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">telefono</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">correo</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">nombre_mascota</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">especie</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">raza</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">fecha_nacimiento</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">servicio</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">Accion</th>
 
            </tr>
        </thead>';
 
     echo"<tbody>";
		while ($registro = mysql_fetch_array($result))
		{ 
echo "
             <tr>
	  <form method='POST' action='actualizar_cliente.php'>
	  <input   type='hidden'  name='id_cliente' placeholder='$registro[id_cliente]' />
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='text'  name='nombre_cliente' placeholder='$registro[nombre_cliente]'/></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='text'  name='direccion' placeholder='$registro[direccion]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='number'  name='telefono' placeholder='$registro[telefono]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='email'  name='correo' placeholder='$registro[correo]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='text'  name='nombre_mascota' placeholder='$registro[nombre_mascota]'/></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='text'  name='especie' placeholder='$registro[especie]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='text'  name='raza' placeholder='$registro[raza]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='date'  name='fecha_nacimiento' placeholder='$registro[fecha_nacimiento]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'><input   type='text'  name='servicio' placeholder='$registro[servicio]' /></td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'>
	  <center><input style='float:left; border-radius:10px; border:0px; cursor: pointer; background-color:#FFE600; font-family:arial,helvetica' type='submit' name='actualizar' value='actualizar' /></center></form></td>
      
      	   
            </tr>
             "; 
} 
echo "
        </tbody>
    </table>";
	?> 
</body>
</html>

