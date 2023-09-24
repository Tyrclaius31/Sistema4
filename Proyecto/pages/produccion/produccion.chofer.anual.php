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
			#apDiv2 { visibility:visible;}
			#animacion {display:none}
			#manulateral {display:none}
			#usuario {display:none}
			#tira {display:none}
			#apDiv1 {display:none}
			#apDiv5 {display:none}
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
				<h3>Resumen de Producción Anual por Chofer</h3>
                 <p align="justify">Esta opción nos permite ver la Producción hecha en el Año por un chofer a selección. Sólo debe seleccionar el Año y la Patente del Camión, y podrá revisar detalladamente las ganancias del Año seleccionado.<br></p>      
                                           <p align="right"><h5><img src="../../images/log.png"/></h5>
                                           </p>   
 
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
    
   <h3><center> Producción</center></h3>
      <ul>
        <li><a href="produccion.resumen.php" title="Resumen de Producción">- Resumen de Transportes</a></li>
        <li><a href="produccion.chofer.php" title="Prod. asociado a Chofer por Mes">- Prod. Mensual por Chofer</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="produccion.chofer.anual.php" title="Prod. General de Chofer Anual">- Prod. Gral Anual por Chofer</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="produccion.anual.php" title="Producción Anual de Transportes">- Prod. Anual</a></li>
      </ul>
    
    </div>
    <div id="contenido" class="scroll">
    
 <form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h3><strong>Resumen de Transportes Anual por Chofer</strong>    </h3>
    <div id="tira">
    <table width="376" border="0">
      <tr>
        <td width="95"><h4>Seleccione </h4></td>
        <td width="104">
        
         <?php
		include("conecta.php");
		$conexion=Conectarse();
		
          $result=mysql_query("select * from asignacion_camiones");
			if ($row = mysql_fetch_array($result)){ 
			echo '<select name="camion" id="select">';
			do {
       			echo '<option value='.$row["Patente_Ca"].'>'.$row["Patente_Ca"].'</option>';				
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
			}
		 ?>
      	<script>document.form1.camion.focus()</script>
        </td>
        <td width="104"><select name="ano" id="ano">
<option selected="selected">2010</option>
          <option>2011</option>
          <option>2012</option>
          <option>2013</option>
        </select></td>
        <td width="55"><label>
          <input type="submit" name="button" id="button" value="Buscar" />
        </label></td>
      </tr>
    </table>
    </div>
    
    <?php	
	if($_POST[button]=="Buscar")
	{
	
	if($_POST[mes]==01){ $mes='Enero';}
	if($_POST[mes]==02){ $mes='Febrero';}
	if($_POST[mes]==03){ $mes='Marzo';}
	if($_POST[mes]==04){ $mes='Abril';}
	if($_POST[mes]==05){ $mes='Mayo';}
	if($_POST[mes]==06){ $mes='Junio';}
	if($_POST[mes]==07){ $mes='Julio';}
	if($_POST[mes]==08){ $mes='Agosto';}
	if($_POST[mes]==09){ $mes='Septiembre';}
	if($_POST[mes]==10){ $mes='Octubre';}
	if($_POST[mes]==11){ $mes='Noviembre';}
	if($_POST[mes]==12){ $mes='Diciembre';}	
	
	$ano=$_POST[ano];
	$patente=$_POST[camion];
	
	echo "<b><font color='#000'><h4><div align='left'>Guías Registradas en el Año $ano del Camión Patente $patente</div></h4></font></b> ";
	echo "<hr>";
		echo "<b><font face='Times New Roman' size='1'><table width='680' border='0' align='center'>
  <tr><td width='70'>FECHA</td><td width='50'>PATENTE</td><td width='70'>N° GUÍA</td><td width='100'>ORIGEN</td><td width='120'>DESTINO</td><td width='70'>DESPACHO</td><td width='60'>CANT. M3</td><td width='60'>TARIFA</td><td width='80'>MONTO DESP.</td></tr></table></font></b>";
	echo "<hr>";
		$sql="select a.Id, a.Patente_Ca, a.Nombre_Tra, b.Id, b.N_Guia_pro, b.Dia, b.Mes, b.Ano, b.Origen, b.Destino, b.N_Despacho, b.Cantidad_m3, b.Tarifa, b.Monto_Despacho, b.Fecha_Ingreso from guia_camion a, guia b where a.Patente_Ca=".$patente." and b.Ano=".$ano." and a.Id=b.Id order by a.Fecha_Ingreso asc";
		
		$respuesta=mysql_query($sql,$conexion);
		
		if (mysql_num_rows($respuesta) == 0) {
   			echo '<script>alert("No existen Guías en este Año.");</script>';
    	exit;
		}else{
			
		echo "<h6><table width='680' border='0' align='center'>";
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<tr><td width='70'>".$row["Ano"]." - ".$row["Mes"]." - ".$row["Dia"]."</td><td width='50'>".$row["Patente_Ca"]."</td><td width='70'>".$row["N_Guia_pro"]."</td><td width='100'>".$row["Origen"]."</td><td width='120'>".$row["Destino"]."</td><td width='70'>".$row["N_Despacho"]."</td><td width='60'>".$row["Cantidad_m3"]."</td><td width='60'>".$row["Tarifa"]."</td><td width='80'>".$row["Monto_Despacho"]."</td></tr>";
			$id=$row["Id"];
		} 
		echo "<h6></table>";
		
?>
  </div>
</form>  
    
    <hr>
<?
	$sql="select sum(Monto_Despacho), sum(Cantidad_m3) from guia where Id=".$id." and Ano=".$_POST[ano];
		$respuesta=mysql_query($sql,$conexion);
		
		echo "<h4><table width='680' border='0' align='center'>";
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<tr><td width='70'> </td><td width='50'> </td><td width='70'> </td><td width='100'> </td><td width='120'> </td><td width='70'>TOTALES</td><td width='60'>".$row['sum(Cantidad_m3)']."</td><td width='60'> </td><td width='80'>".$row['sum(Monto_Despacho)']."</td></tr>";
		} 
		echo "<h4></table>";
		
		
		mysql_free_result($respuesta);
		}
	}

?>    
    <div id="apDiv2"><img src="../../images/logo.png" alt="" width="227" height="71" /></div>
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