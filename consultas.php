<?php
	/**
	 * 
	 */
	class basededatos extends SQLite3
	{
		
		function __construct()
		{
			$this->open("libros_114_10.db");
		}
	}

$db = new basededatos();
if ($db) {
	echo "<p> la base de datos de abrio de forma exitosa";
} else{
	echo "<p> la base de datos de abrio de forma exitosa";
}
?>

