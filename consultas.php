<?php

$db = new SQLite3('libros_114_10.db');
$statement = $db->prepare('SELECT * FROM acta WHERE nombre = :"MARIA";');
$statement->bindValue(':id', $id);

$result = $statement->execute();

?>
