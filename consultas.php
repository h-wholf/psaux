<?php

$db = new SQLite3('libros_114_10.db');
$statement = $db->prepare('SELECT * FROM table WHERE id = :id;');
$statement->bindValue(':id', $id);

$result = $statement->execute();

?>
