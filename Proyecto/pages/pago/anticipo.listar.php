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
    
   <h3><center> Liquidaciones</center></h3>
      <ul>
        <li><a href="liquidacion.chofer.php" title="Liquidaciones Chofer">- Liquid. Chofer</a></li>
        <li><a href="liquidacion.vitacora.php" title="Vitácora de Liquidaciones">- Bitácora Liquid.</a></li>
        <li><a href="liquidacion.buscar.php" title="Buscar Liquidación">- Buscar Liquid.</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="anticipo.registro.php" title="Registrar Anticipo">- Reg. Anticipo</a></li>
        <? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="anticipo.listar.php" title="Listar Anticipos">- Listar Registro</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="anticipo.listaradm.php" title="Listar Anticipos">- Listar Registro</a></li>
		<? } ?>
        <li><a href="anticipo.listar.anual.php" title="Listar Anticipos  anuales">- Registro Anual</a></li>
      </ul>
    </div>
    <div id="contenido">
    
 <form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h3><strong>Lista de Anticipos Por Mes</strong></h3>
    <div id="tira">
    <table width="358" border="0">
      <tr>
        <td width="80">Seleccione </td>
        <td width="121"><h4>
          <select name="mes" id="mes">
            <option value="01" selected="selected">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Junio</option>
            <option value="07">Julio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
          </select>
      <script>document.form1.mes.focus()</script>
        </h4></td>
        <td width="71"><select name="ano" id="ano">
  <option selected="selected">2010</option>
          <option>2011</option>
          <option>2012</option>
          <option>2013</option>
        </select></td>
        <td width="117"><label>
          <input type="submit" name="button" id="button" value="Buscar" />
        </label></td>
      </tr>
    </table>
    </div>
    
    <?php
	include("conecta.php");
	$conexion=Conectarse();
	
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
	
	echo "<b><font color='#000'><h4><div align='left'>Anticipos Entregados en $mes del Año $ano</div></h4></font></b> ";
	echo "<hr>";
		echo "<b><font face='Times New Roman' size='1'><table width='650' border='0' align='center'>
  <tr><td width='100'>FECHA</td><td width='200'>TRABAJADOR</td><td width='100'>RUT</td><td width='100'>CAMIÓN</td><td width='150'>MONTO ANTICIPO</td></tr></table></font></b>";
	echo "<hr>";
		$sql="select * from anticipo where Mes=".$_POST[mes]." and Ano=".$_POST[ano];
		$respuesta=mysql_query($sql,$conexion);
		
		if (mysql_num_rows($respuesta) == 0) {
   			echo '<script>alert("No existen Anticipos en este Mes.");</script>';
    	exit;
		}else{
		echo "<h6><table width='650' border='0' align='center'>";
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<tr><td width='100'>".$row["Fecha"]."</td><td width='200'>".$row["Nombre_Tra"]."</td><td width='100'>".$row["Rut_Tra"]."</td><td width='100'>".$row["Camion"]."</td><td width='150'>".$row["Monto"]."</td></tr>";
		} 
		echo "<h6></table>";
		
?>
  </div>
</form>  
    
    <hr>
<?
	$sql="select sum(Monto) from anticipo where Mes=".$_POST[mes]." and Ano=".$_POST[ano];
		$respuesta=mysql_query($sql,$conexion);
		
		while($row=mysql_fetch_array($respuesta)){
			
		echo "<div align='right'><h4>Total Egresos por Anticipos en $mes del Año $ano  =  $  ".$row['sum(Monto)']."</h4></div>";
			
		}
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