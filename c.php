<?php

/**
 * 
 
class db extends SQLite3
{
  
  /**
   * 
   
  function __construct()
  {
    $this->open("libros_114_10.db");
  }
}

$db = new db();
$resultado = $db->query('SELECT nombre FROM acta');
var_dump($resultado->fetchArray());
*/
?>

<?php
$db = new SQLite3('libros_114_10.db');
$total = $db->querySingle("SELECT COUNT(*) as count FROM acta");
echo "total de registros ".$total;



?>

<?php
print_r($db->querySingle("SELECT *FROM acta where ID = 48;",true));
?>

<?php
$todos = 1;
while($todos<=$total){
  echo "registro  ". $todos."  ";
  print_r($db->querySingle("SELECT *FROM acta where ID = $todos;",true));
  $todos++;
}

?>