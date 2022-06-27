<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';?>

<?php

$db = new SQLite3('libros_114_10.db');
$total = $db->querySingle("SELECT COUNT(*) as count FROM acta");
echo "total de registros ".$total;



print_r($db->querySingle("SELECT nombre acta where ID = 48;",true));


/*
$todos = 1;
while($todos<=$total){
  echo "registro  ". $todos."  ";
  print_r($db->querySingle("SELECT *FROM acta where ID = $todos;",true));
  $todos++;
}
*/

$c = ($_POST["NOMBRE"]);
$n = "BENJAMIN";
/*

  CRUD con SQLite3, PDO y PHP
  parzibyte.me
*/
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

$resultado = $baseDeDatos->query("SELECT * FROM acta where nombre ='$n';");
$datos = $resultado->fetchAll(PDO::FETCH_OBJ);

?>
<?php /*
<center>
  <table class="tabla">
    <thead>
      <tr>
        <th>NOMBRE</th>
        <th>APELLIDO 1</th>
        <th>APELLIDO 2</th>
        <th> NUMERO ACTA</th>
        <th> AÑO DE REGISTRO</th>
        <th> PADRE</th>
        <th> MADRE</th>
      </tr>
    </thead>
    <tbody>
      <!-- Notar que siempre se repite lo que hay entre <tr> y </tr> -->
      <!-- Así que lo hacemos en un ciclo foreach -->

      <?php foreach($datos as $d){ /*Notar la llave que dejamos abierta*/ ?>
        <tr>
          <td><?php echo $d->nombre ?></td>
          <td><?php echo $d->apellido_p ?></td>
          <td><?php echo $d->apellido_m ?></td>
          <td><?php echo $d->n_acta ?></td>
          <td><?php echo $d->año ?></td>
          <td><?php echo $d->n_padre ?></td>
          <td><?php echo $d->n_madre ?></td>
        
        </tr>
      <?php } /*Cerrar llave, fin de foreach*/ ?>

    </tbody>
  </table>*/
?>
<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>
