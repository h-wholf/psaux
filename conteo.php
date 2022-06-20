
<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';
?>
<div class="contenido">
	<div class="mensaje">
<?php 
$db = new SQLite3('libros_114_10.db');                   
$total = $db->querySingle("SELECT COUNT(*) as count FROM acta");  
echo  "total   ".$total;
?>
</div>
<div class="mensaje">

<?php 
$db = new SQLite3('libros_114_10.db');
$busqueda = $db->querySingle("SELECT *from acta"); 
echo  "todos los registros  ".$busqueda;
?>


</div>
<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>

