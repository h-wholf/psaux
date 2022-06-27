<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';

?>
<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>
<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>

<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';?>



<div class="contenedor2">

<?php
$nombre = ($_POST["nombre"]);
$n_acta = ($_POST["n_acta"]);

$bd = new SQLite3('libros_114_10.db');

$consulta = ($bd->exec("select nombre from acta where nombre = '$nombre'"));

echo $consulta;









/*
	CRUD con SQLite3, PDO y PHP
	parzibyte.me


if (empty($_POST["NOMBRE"])) {
	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}

if (empty($_POST["FECHA"])) {
	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}

if (empty($_POST["REGISTRO"])) {
	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}
?>
*/
#Si llegamos hasta aquí es porque los datos al menos están definidos
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

# creamos una variable que tendrá la sentencia
$sentencia = $baseDeDatos->prepare("INSERT INTO acta(nombre, apellido_p, apellido_m, n_acta, n_padre, n_madre, año, libro)
	VALUES(:nombre, :apellido_p, :apellido_m, :n_acta, :n_padre, :n_madre, :año, :libro);");


# Debemos pasar a bindParam las variables, no podemos pasar el dato directamente
# debido a que la llamada es por referencia


$sentencia->bindParam(":nombre", $_POST["nombre"]);
$sentencia->bindParam(":apellido_p", $_POST["apellido_p"]);
$sentencia->bindParam(":apellido_m", $_POST["apellido_m"]);
$sentencia->bindParam(":n_acta", $_POST["n_acta"]);
$sentencia->bindParam(":n_padre", $_POST["n_padre"]);
$sentencia->bindParam(":n_madre", $_POST["n_madre"]);
$sentencia->bindParam(":año", $_POST["año"]);
$sentencia->bindParam(":libro", $_POST["libro"]);









$resultado = $sentencia->execute();
if($resultado === true){
	echo "<a class='boton2' href='index.php'> SE REGISTRÓ CORRECTO</a>";
}else{
	echo "Lo siento, ocurrió un error";
}
echo "<audio autoplay loop>
  <source src='n.mp3' type='audio/mpeg'>
</audio>"

?>
<script type="text/javascript">
	function redireccionarPagina() {
  window.location = "libro_agregar.php";
}
setTimeout("redireccionarPagina()", 8000);
</script>



<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>
</div>