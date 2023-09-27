<!-- SISTEMA DE COMTROL DE SERVICIOS 'ASETRANS'
	
    Empresa= ASETRANS Ltda.
    Creador= William Leal Orellana
    Supervisor= SERGIO LEAL
    Fecha Inicio Proyecto= 05/05/2010

 -->

 <?php 
function Conectarse(){
	if (!($link = mysqli_connect("localhost","root","","asetrans"))){
		exit();
	}
	if (!mysqli_select_db($link,"asetrans")){
		exit();
	}
	return $link;
} 
?>
