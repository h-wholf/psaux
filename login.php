<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';?>


<div class="contenedor2">
<div class="mensaje" >
<?php

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

if (($nombre=="hoakin") && ($pass=="hoakin21")) {
	echo " hola ". $nombre. " tienes acceso" ;
	echo "<SCRIPT LANGUAGE=\"javascript\"> setTimeout(\"location.href= 'validar.php'\",5000)</SCRIPT>";
}else {
	echo "  lo lamentamos no tienes acceso a la pagina";
}

?>

</div>
<div>
	
	<a class="mensaje" href="index.php">regresar al inicio</a>

</div>
<div>
	
	<a class="mensaje" href="reg.php">solicitud de registro</a>

</div>

</div>





<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>
