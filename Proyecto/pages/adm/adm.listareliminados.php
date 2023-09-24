<?
 	session_start("Id");
    if (!(session_is_registered("Id")))
    {
      session_unset();
      session_destroy();
	  echo '<SCRIPT>alert("No se ha iniciado Session, Favor Registrarse.");
    	location.href=("../../index.php");</SCRIPT>';
      exit;
    }  
	
	$fecha1= mktime(0,0,0,date("m"),date("d"),date("Y"));
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asetrans</title>
<link href="../../css/stylemcontenido.css" rel="stylesheet" type="text/css" />
<script src="../../Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- IMPRIMIR-->

		<style type="text/css">
		@media print {
			#contenido { width:810px; font-size: 15px; display:block}
			#menugeneral {display:none}
			#apDiv3 { visibility:visible;}
			#animacion {display:none}
			#manulateral {display:none}
			#usuario {display:none}
			#tira {display:none}
			#apDiv1 {display:none}
			#apDiv5 {display:none}
			#osx-modal-content {display:none}
}
        </style>
<script>
function impre(num) {
	document.getElementById(num).className="contenido";
	print();
	document.getElementById(num).className="menugeneral";
	document.getElementById(num).className="animacion";
	document.getElementById(num).className="manulateral";
	document.getElementById(num).className="usuario";
	document.getElementById(num).className="tira";
}
</script>

<link type='text/css' href='../../css/osx.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='../../css/js/jquery1.js'></script>
<script type='text/javascript' src='../../css/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='../../css/js/osx.js'></script>
</head>
<body>
<div id="apDiv5"><strong><a href='#' class='osx'><img src="../../images/interrogacion.jpg" width="19" height="19" /></a></strong></div>

	<!-- modal content -->
		<div id="osx-modal-content">
			<div id="osx-modal-title"><h2 align="center"><b>Ayuda Auxiliar para Sistema de Gestión</b></h2></div>
			<div class="close"><a href="#" class="simplemodal-close">x</a></div>
			<div id="osx-modal-data">
				<h3>Registro de Trabajadores que han Sido Eliminados Área Administrativa.</h3>
                 <p align="justify">Este formulario muestra un listado de los Trabajadores que han sido eliminados. Esta lista contempla el Motivo de porque fue eliminado el trabajador, como tambien la fecha en que se realizo la eliminación y quien la hizo.</p>         
                 <p align="center"><h5><img src="../../images/log.png"/></h5></p>   

                <br>            
                </div>
</div>

<div id="apDiv1"><a href="#" onClick="impre('contenido');return false"><img src="../../images/impresora.jpg" width="16" height="15" /></a></div>
<div id="contenedorgeneral">
  <div id="menugeneral">
    <ul>
      <li><a href="../../principal.php" title="">Home</a></li>
      <li><a href="../../trabajadores.php" title="Categoria SudMenu 'Trabajadores'">Trabajadores</a></li>
      <li><a href="../../camiones.php" title="Categoria SudMenu 'Camiones'">Camiones</a></li>
      <li><a href="../../guias.php" title="Categoria SudMenu 'Guías'">Guías</a></li>
      <li><a href="../../produccion.php" title="Categoria SudMenu 'Producción'">Producción</a></li>
      <li><a href="../../petroleo.php" title="Categoria SudMenu 'Petróleo'">Petróleo</a></li>
      <li><a href="../../pago.php" title="Categoria SudMenu 'Liquidaciones y Anticipos'">Liquidaciones</a></li>
      <li><a href="../../egresos.php" title="Categoria SudMenu 'Egresos'">Egresos</a></li>
      <? if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
      <li><a href="../../administracion.php" title="Administración del Sitio">Administración</a></li>
	  <? } ?>
    </ul>
  </div>
   <div id="usuario">
    <table width="315" border="0" align="center">
      <tr>
        <td width="182">Usuario: <? echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
        <td width="72" align="center"><a href="../../configurar.php">Configurar</a></td>
        <td width="47" align="center"><a href="index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir" />
        </a></td>
      </tr>
    </table>
    <?php
		if($_POST[button]=="Salir")
		{
			session_destroy();
			
	?>
    <script type="text/javascript">
		window.location="../../index.php";
		</script>
    <?
		}
	?>
  </div>
  <div id="animacion">
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="595" height="95">
      <param name="movie" value="../../asetrans.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="7.0.70.0" />
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="../../Scripts/expressInstall.swf" />
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="../../asetrans.swf" width="595" height="95">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="7.0.70.0" />
        <param name="expressinstall" value="../../Scripts/expressInstall.swf" />
        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
        <div>
          <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
  </div>
  <div id="cuerpoleft">
    <div id="manulateral">
    
    <h3><center> Administración</center></h3>
      <ul>
        <li><a href="adm.registro.php" title="Registrar Nuevo Personal Adm.">- Registrar Adm.</a></li>
        <li><a href="adm.modificar.php" title="Modificar Datos de Personal">- Modificar Adm.</a></li>
         <li><a href="adm.listar.php" title="Listar Información del Personal Adm.">- Listar Adm.</a></li>
        <li><a href="adm.eliminar.php" title="Eliminar a Personal (Despedido)">- Eliminar Adm.</a></li>
        <li><a href="adm.listareliminados.php" title="Listar Información de Personal Eliminado">- Eliminados</a></li>
        <li><a href="adm.reincorporar.php" title="Reincorporar Personal Eliminado">- Reincorporación</a></li>
        <li><a href="#" title="">_______________</a></li>
        <li><a href="../../estadisticas.php" title="Estadísticas y Gráficos">Estadísticas</a></li>
      </ul>
    
    </div>
    <div id="contenido" align="center">
    
<font size="1">
    <h2>Lista del Personal Adm. Eliminados</h2>
  <?php
	include("conecta.php");
	$conexion=Conectarse();
	
	echo "<hr>";
	echo "<b><font face='Times New Roman' size='1'><table width='680' border='0' align='center'>
  <tr><td width='60'>RUT</td><td width='120'>NOMBRE</td><td width='65'>TELEFONO</td><td width='70'>CARGO</td><td width='220'>MOTIVO</td><td width='75'>F. ELIMINADO</td><td width='70'>USUARIO</td></tr></table></font></b>";
	echo "<hr>";
		$sql="select * from n_operador where Estado='DESPEDIDO' and Descripcion='Administrativo'";
		$respuesta=mysql_query($sql,$conexion);
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<table width='680' border='0' align='center'><tr><td width='60'>".$row["Rut_Operador"]."</td><td width='120'>".$row["Nombre_Operador"]."</td><td width='65'>".$row["Fono_Contacto"]."</td><td width='70'>".$row["Cargo_Operador"]."</td><td width='220'>".$row["Motivo"]."</td><td width='75'>".$row["Fecha_Salida"]."</td><td width='70'>".$row["Eliminar_Usuario"]."</td></tr></table>";
		}
	//}
	
	if($_POST[button]=="Limpiar")
	{
		
	}
	
?>
</font> 
    
    <div id="apDiv3"><img src="../../images/logo.png" alt="" width="227" height="71" /></div>
    
    </div>
  </div>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>