<?php
$bd = new SQLite3('libros_114_10.db');

$consulta = $bd->query('SELECT * FROM acta');
while ($row = $consulta->fetchArray()) {
    var_dump($row);
}
?>
