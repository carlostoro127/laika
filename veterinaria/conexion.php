
<?php
$servidor="localhost";
$usuario="root";
$clave="";
mysql_connect($servidor,$usuario,$clave) or die("no se pudo conectar"); 
mysql_select_db("veterinaria") or die("no se puede conectar a la base de datos");
?>