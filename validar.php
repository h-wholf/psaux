
<?php
$año = ($_POST["año"]);
$n_acta = ($_POST["n_acta"]);

$consulta = shell_exec("echo 'select * from acta where año = $año and n_acta = $n_acta;'|sqlite3 libros_114_10.db");

echo "esta acta pertenece a  ". $consulta;

if ($consulta == "" ) {

	echo "no hay datos puedes continuar a registrar";
}
?>
