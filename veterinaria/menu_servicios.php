<?php
include("conexion.php");

?>
        

<!DOCTYPE HTML>
<html>
<head>
   <meta charset='UTF-8'>
   <title>Funciones</title>
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

/*css que contiene el tama&ntildeo del div, espaciadores, tama&ntildeo de la fuante, fuente a utilizar
color de fondo en el div y grosor del borde
*/
.menu{
    padding:0;
    list-style:none;
    width:720px;
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

        </style>
   


</head>
<body>














<br><br><br><br><br><br>

<center>
<div style=" font-family:Arial, Helvetica, Verdana; font-weight: bold; float:left; margin-top:50px; margin-left:300px;">
<ul class='menu'>
  

	<li><a href="crear_servicio.php" >Crear servicio</a>
    </li> 
	<br>
	<li><a href="consultar_servicio.php" >Consultar servicio</a>
    </li> 
	<br>
	<li><a href="edicion_servicio.php" >Actualizar servicio</a>
    </li> 
	<br>
	<li><a href="eliminar_servicio.php" >Borrar servicio</a>
    </li>	
	
	 
 
    
	
 </ul>


 </div>
 </center>
  </div>
</body>
</html>



