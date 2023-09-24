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
				<h3>Buscar Guía de Petróleo</h3>
                 <p align="justify">Esta opción nos permite buscar una guía de petróleo ya ingresada.</p>
            	<br>
                <p align="justify">Para buscar una guía solo debemos seleccionar el número de guía y presionar el botón 
   			  	<b>"Buscar"</b>. Luego de esto el sistema nos arroja la información de la guía seleccionada.</p>
                <br>
            	<p align="center"><h5><img src="../../images/log.png"/></h5></p>
                </div>
</div>


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
    
    <h3><center> Petróleo</center></h3>
      <ul>
        <li><a href="petroleo.registro.php" title="Ingrear Guía de Petróleo">- Ingresar Guía</a></li>
        <li><a href="petroleo.buscar.php" title="Buscar Guía">- Buscar</a></li>
        <li><a href="petroleo.especifico.php" title="Informe Exacto de gasto entre fechas">- Infor. Especifico</a></li>
        <li><a href="petroleo.mensual.php" title="Informe Mensual de Guías">- Infor. Mensual</a></li>
        <li><a href="petroleo.anual.php" title="Informe Anual Petróleo">- Informe Anual</a></li>
      </ul>
    
    </div>
    <div id="contenido">
    
    <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong>Buscar Guía Petróleo</strong></h3>
    <p align="center"> <b>Seleccione N° de Guía</b>
    
     <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from n_guia");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="nombre" id="select">';
			do {
       			echo '<option value='.$row["N_Guia"].'>'.$row["N_Guia"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
	?>
      <script>document.form1.nombre.focus()</script>
      <label>
        <input type="submit" name="button2" id="button2" value="Buscar" />
        <br />
      </label>    
    
     <?php
	
	if($_POST[button2]=="Buscar")
	{
		echo "<hr>";
		echo "<b><font face='Times New Roman' size='1'><table width='650' border='0' align='center'>
  <tr><td width='70'>FECHA</td><td width='120'>PROVEEDOR</td><td width='60'>N° GUIA</td><td width='60'>CANTIDAD</td><td width='110'>DETALLE</td><td width='70'>V. UNITARIO</td><td width='60'>TOTAL</td><td width='100'>RETIRÓ</td></tr></table></font></b>";
	echo "<hr>";
		$sql="select * from petroleo where N_Guia=".$_POST[nombre];
		$respuesta=mysql_query($sql,$conexion);
		
		echo "<table width='650' border='0' align='center'><h6>";
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<tr><td width='70'>".$row["Fecha"]."</td><td width='120'>".$row["Proveedor"]."</td><td width='60'>".$row["N_Guia"]."</td><td width='60'>".$row["Cantidad"]."</td><td width='110'>".$row["Detalle"]."</td><td width='70'>".$row["Valor_Unitario"]."</td><td width='60'>".$row["Valor_Total"]."</td><td width='100'>".$row["Nombre_Retira"]."</td></tr>";
		} 
		echo "</h6></table>";
   
	}
	
	
	if($_POST[button]=="Limpiar")
	{
		
	}
		
?>   
    
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