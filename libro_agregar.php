<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';

?>


<div class="contenedor2">
<form action="insertar.php" method="post">
<div class="contenido">

<?php // aqui comienza el formulario?>
<div class="inputBox">
	<input id="nombre" oninput="this.value = this.value.toUpperCase()" name="nombre" type="tetx" required="required">
	<span>Nombre</span></div>

<div class="inputBox">
	<input id="nombre" oninput="this.value = this.value.toUpperCase()" name="apellido_p" type="tetx" required="required">
	<span>apellido paterno</span></div>

<div class="inputBox">
	<input id="nombre" oninput="this.value = this.value.toUpperCase()" name="apellido_m" type="tetx" required="required">
	<span>apellido materno</span></div>
	<div class="inputBox">

	<input type="number" id="nombre" name="n_acta" required="required">
	<span>numero de acta</span></div>

	<div class="inputBox">
	<input id="nombre" oninput="this.value = this.value.toUpperCase()" name="n_padre" type="tetx" required="required">
	<span>nombre del padre</span></div>

	<div class="inputBox">
	<input id="nombre" oninput="this.value = this.value.toUpperCase()" name="n_madre" type="tetx" required="required">
	<span>nombre de la madre</span></div>
	<div class="inputBox">
	<input id="nombre" name="año" type="number" required="required">
	<span>año de regsitro</span></div>
	<div class="inputBox">
	<input id="nombre" name="libro" type="number" required="required">
	<span>libro</span></div>
<?php // aqui termina el formulario?>

<div >
	<button class="boton" type="submit">Agregar</button>
</div>
</div>
</form>

</div>












<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>

