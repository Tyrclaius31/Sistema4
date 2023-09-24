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
<script type="text/javascript" src="../../css/js/live_validation.js"></script>
<script type="text/javascript" src="../../css/js/1.3.1.min.js"></script> 
<script type="text/javascript" src="../../css/js/funciones.js"></script> 

<!-- CALENDARIOS -->

<link rel="STYLESHEET" type="text/css" href="../../css/dhtmlxcalendar.css">
<script>
window.dhx_globalImgPath = "../../images/imgs/";
</script>
<script type="text/javascript" src="../../css/js/dhtmlxcommon.js"></script>
<script type="text/javascript" src="../../css/js/dhtmlxcalendar.js"></script>
<script>
var mCal;
window.onload = function() {
    mCal = new dhtmlxCalendarObject(['calInput1', 'calInput2']);
}
</script>

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
</head>
<body>
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
    
     <h3><center>Egresos s/iva</center></h3>
      <ul>
        <li><a href="egresos.registro.php" title="Registrar Nuevo Egreso">- Reg. Egresos $$</a></li>
        <? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="egresos.listar.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="egresos.modificar.php" title="Modificar Registros">- Mod. Registro</a></li>
        <li><a href="egresos.listaradm.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
		<? } ?>
        <li><a href="egresos.listar.anual.php" title="Listar Datos de Egresos Anuales">- Registro Anual</a></li>
        <li><a href="#" title="">______________</a></li>
      </ul>
      
      <h3><center>Egresos c/iva</center></h3>
      <ul>
        <li><a href="egresos.registro.iva.php" title="Registrar Nuevo Egreso">- Reg. Egresos $$</a></li>
        <? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="egresos.listar.iva.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="egresos.modificar.iva.php" title="Modificar Registros">- Mod. Registro</a></li>
        <li><a href="egresos.listaradm.iva.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
		<? } ?>
        <li><a href="egresos.listar.anual.iva.php" title="Listar Datos de Egresos Anuales">- Registro Anual</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="egresos.petroleo.php" title="Pagar Petroleo">- Pagar Petróleo</a></li>
        <li><a href="egresos.iva.php" title="Pagar IVA">- Pagar IVA</a></li>
      </ul>
    
    </div>
    <div id="contenido">
        
 <form id="form1" name="formulario" method="post" action="">
  <div align="center">
    <h3><strong>Pago de Guías de Petróleo por Periodos</strong></h3>
    <div id="tira">
    <table width="438" border="0">
      <tr>
        <td width="73"><h4>Fechas Entre</h4></td>
        <td width="139"><label>
          <input name="calInput1" type="text" id="calInput1" size="10" />
      <script>document.formulario.fecha1.focus()</script>
              <script type="text/javascript">  var fecha1 = new LiveValidation('fecha1'); fecha1.add(Validate.Presence);</script> 
          <a onclick="show_calendar()" style="cursor: pointer;"><small> <img src="../../images/images.jpg" width="20" height="20" /></small></a>
        </label></td>
        <td width="137"><label>
          <input name="calInput2" type="text" id="calInput2" size="10" />
              <script type="text/javascript">  var fecha2 = new LiveValidation('fecha2'); fecha2.add(Validate.Presence);</script> 
          <a onclick="show_calendar()" style="cursor: pointer;"><small> <img src="../../images/images.jpg" width="20" height="20" /></small></a>
        </label></td>
        <td width="71"><label>
          <input type="submit" name="button" id="button" value="Buscar" />
        </label></td>
      </tr>
    </table>
    </div>
    <div id="calendario">
    
	<?php //calendar_html() ?>
    
    </div>
    </label>
    </p>
	           
    <?php
	include("conecta.php");
	$conexion=Conectarse();
	
	$fecha1=$_POST[calInput1];
	$fecha2=$_POST[calInput2];
	
	if($_POST[button]=="Buscar")
	{
	echo "<b><font color='#000'><h4><div align='left'>Gasto de Petróleo a Pagar entre las Fechas ".$_POST[calInput1]." y ".$_POST[calInput2]."</div></h4></font></b> ";
	echo "<hr>";
		echo "<b><font face='Times New Roman' size='1'><table width='650' border='0' align='center'>
  <tr><td width='70'>FECHA</td><td width='60'>ESTADO</td><td width='60'>N° GUIA</td><td width='60'>RETIRÓ</td><td width='65'>F. a PAGAR</td><td width='60'>CANTIDAD</td><td width='145'>DETALLE</td><td width='70'>V. UNITARIO</td><td width='60'>TOTAL</td></tr></table></font></b>";
	echo "<hr>";
			
		$sql="select * from petroleo where Fecha between '".$fecha1."' and '".$fecha2."' and Estado='IMPAGO'";
		$respuesta=mysql_query($sql,$conexion);
		
		if (mysql_num_rows($respuesta) == 0) {
   			echo '<script>alert("No existe Gasto de Petróleo entre estas Fechas.");</script>';
    	exit;
		}else{
		
		echo "<h6><table width='650' border='0' align='center'>";
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<tr><td width='70'>".$row["Fecha"]."</td><td width='60'>".$row["Estado"]."</td><td width='60'>".$row["N_Guia"]."</td><td width='60'>".$row["Nombre_Retira"]."</td><td width='65'>".$row["Fecha_a_Pagar"]."</td><td width='60'>".$row["Cantidad"]."</td><td width='145'>".$row["Detalle"]."</td><td width='70'>".$row["Valor_Unitario"]."</td><td width='60'>".$row["Valor_Total"]."</td></tr>";
		} 
		echo "</table></h6>";
?>
  </div>
 
    
    <hr>
<?
	$sql="select sum(Valor_Total) from petroleo where Fecha between '".$fecha1."' and '".$fecha2."' and Estado='IMPAGO'";
		$respuesta=mysql_query($sql,$conexion);
		
		while($row=mysql_fetch_array($respuesta)){
			
		echo "<div align='right'><h5>Total Gasto Petróleo a Pagar entre Fechas seleccionadas  =  $  ".$row['sum(Valor_Total)']."</h5></div>";
			$total=$row['sum(Valor_Total)'];
		}
		mysql_free_result($respuesta);
		}

?>
    <div id="tira">
	<table width="410" border="0" align="center">
      <tr>
        <td width="112" align="center">Fechas</td>
        <td width="94"><input name="fecha3" type="text" id="fecha3" value="<? echo $fecha1; ?>" size="10" />
              <script type="text/javascript">  var fecha3 = new LiveValidation('fecha3'); fecha3.add(Validate.Presence);</script> 
              </td>
        <td width="109"><input name="fecha4" type="text" id="fecha4" value="<? echo $fecha2; ?>" size="10" />
              <script type="text/javascript">  var fecha4 = new LiveValidation('fecha4'); fecha4.add(Validate.Presence);</script> 
              </td>
        <td width="77">&nbsp;</td>
        </tr>
      <tr>
        <td align="center"><input name="fecha" type="hidden" id="fecha" value="<? echo date("Y-m-d"); ?>" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Pagar Petróleo" /></td>
        <td><div align="center">
        <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
        </a>
        </div></td>
        </tr>
    </table>	
  </div>
    </form>   
    
    <?	
	}
	$fecha11=$_POST[fecha3];
	$fecha22=$_POST[fecha4];

	if($_POST[button]=="Pagar Petróleo")
		{
				
			if($_POST[fecha3]=="" or $_POST[fecha4]=="")
			{
			echo '<script>alert("No puede Registrar el Pago del Petróleo, si no corrobora las Fechas.");</script>';
			}else{
				$sql="update petroleo set Estado='PAGADO',Fecha_Pago='".$_POST[fecha]."' where Fecha between '".$fecha11."' and '".     			$fecha22."'";
				$respuesta=mysql_query($sql,$conexion);
								
				echo '<script>alert("Se ha Registrado el Pago de Las Guías de Petróleo entre las Fechas '.$fecha11.' y '.$fecha22.'.");</script>';
		}
		}
		
		if($_POST[button]=="Limpiar")
		{
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