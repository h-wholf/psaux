<?php
$bd = new SQLite3('libros_114_10.db');

//var_dump($bd->querySingle('SELECT nombre FROM acta WHERE nombre="MARIA"'));
print_r($bd->querySingle('SELECT nombre FROM acta WHERE nombre="JUAN"', true));
?>
