
<?php
$nombre = ($_POST["nombre"]);
$apellido_p = ($_POST["apellido_p"]);
$apellido_m = ($_POST["apellido_m"]);
$n_acta = ($_POST["n_acta"]);
$n_padre = ($_POST["n_padre"]);
$n_madre = ($_POST["n_madre"]);
$año = ($_POST["año"]);
$libro = ($_POST["libro"]);


echo ('hola '. $n);
//crea y habre la base de datos
$bd = new SQLite3('libros_114_10.db');
//agrega datos a la base
$bd->exec("INSERT INTO acta (nombre, apellido_p, apellido_m, n_acta, n_padre, n_madre, año, libro) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$n_acta', '$n_padre', '$n_madre', '$año', '$libro')");


?>