
<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';
?>

<?php 


$db = new SQLite3('ibros_114_10.db');                   
$total = $db->querySingle("SELECT COUNT(*) as count FROM acta");  

echo "total ". $total;
?>

<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>

