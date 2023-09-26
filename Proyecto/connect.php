<?php


/* Database config */

$db_host		= 'localhost:3301';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'asetrans';

/* End config */



$link = mysqli_connect($db_host,$db_user,$db_pass) or die('No hay conexión con la Base de Datos');

mysqli_select_db($link,$db_database);
mysqli_query($link,"SET names UTF8");

?>