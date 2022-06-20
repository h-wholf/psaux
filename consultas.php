<?php
$bd = new SQLite3('libros_114_10.db');

var_dump($bd->querySingle('SELECT nombre FROM acta WHERE nombre="MARIA"'));
//print_r($bd->querySingle('SELECT username, email FROM user WHERE userid=1', true));
?>
