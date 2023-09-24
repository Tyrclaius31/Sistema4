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
<title>Asetrans - Home</title>
<link href="../../css/stylemcontenido.css" rel="stylesheet" type="text/css" />
<script src="../../Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript" src="../../css/js/live_validation.js"></script>
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
				<h3>Ingreso de Guías</h3>
                 <p align="justify">Este formulario nos permite ingresar las guías de despachos de la empresa, es necesario llenar todos los campos del registro. Para el registro correcto de la guía de despacho debe completar los siguientes campos:</p>
            	<br>
                <b>Nº Guía:</b> Numero identificador de la guía de despacho.<br>
                <b>Nombre Empresa:</b> Nombre de la empresa que corresponde la guía de 	despacho.<br>
                <b>Fecha:</b> Día, Mes y Año.<br>
                <b>Origen-Destino:</b> El origen y el destino de la guía de despacho.<br>
                <b>Hora Llegada:</b> Hora de llegada a la empresa origen.<br>
                <b>Hora Despacho:</b> Hora del despacho de la guía.<br>
                <b>Nº de Despacho:</b> Numero identificador del despacho.<br>
                <b>Cantidad M3:</b> Cantidad de metros cúbicos de la guía.<br>
                <b>Detalle del Carguío:</b> Comentario sobre la entrega de la guía con el detalle 	del producto.<br>
                <b>Camión:</b> Seleccionar patente del camión.<br>

                <br>
                <p align="justify">Una vez llenado todos estos datos, Aceptamos el Ingreso, por último debe hacer clic en el botón   			  				<b>"Ingresar Guía"</b>, y listo!!!</p>
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
        <td width="47" align="center"><a href="../../index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir" />
        </a>
        <?php
		if($_POST[button]=="Salir")
		{
			session_destroy();
		}
		?>
        </td>
      </tr>
    </table>
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
    
    <h3><center> Guías
    </center></h3>
      <ul>
        <li><a href="guias.registro.php" title="Ingresar Nueva Guía">- Ingresar Guía</a></li>
        <li><a href="guias.buscar.php" title="Buscar Datos de Guía"><b>- Buscar Guía</b></a></li>
        <li><a href="guias.modificar.php" title="Modificar Datos de Guía">- Modificar Guía</a></li>
        <li><a href="guias.listar.php" title="Listar Guías por Mes">- Listar Mes</a></li>
        <li><a href="guias.listar.anual.php" title="Listar Guías del Año">- Listar Anual</a></li>
		<li><a href="#" title="">_______________</a></li>
		<li><a href="fletes.registro.php" title="Ingresar Fletes de Ocación">- Flet. de Ocación</a></li>
		<li><a href="fletes.mensual.php" title="Listar Fletes de Ocación por Mes">- Listar Mes</a></li>
		<li><a href="fletes.anual.php" title="Listar Fletes de Ocación del Año">- Listar Anual</a></li>
		<li><a href="#" title="">_______________</a></li>
		<li><a href="empresa.registro.php" title="Registrar Empresa">- Regist. Empresa</a></li>
		<li><a href="empresa.modificar.php" title="Modificar Empresa Registrada">- Mod. Registro</a></li>
		<li><a href="empresa.listar.php" title="Listar Información de Empresas">- Listar Registros</a></li>
		<li><a href="#" title="">_______________</a></li>
		<li><a href="tarifa.registro.php" title="Agregar Tarifas de Transporte">- Agregar Tarifas</a></li>
		<li><a href="tarifa.modificar.php" title="Modificar Registros de Tarifas">- Mod. Tarifas</a></li>
		<li><a href="tarifa.listar.php" title="Listar Tarifas de Transporte">- Listar Tarifas</a></li>
      </ul>
    
    </div>
    <div id="contenido">
    
    <form id="form1" name="form1" method="post" action="">
      <table width="620" border="0" align="center">
        <tr>
          <td colspan="4" align="center"><h3>Ingreso Guía</h3></td>
          </tr>
        <tr>
          <td width="116">N° Guía*</td>
          <td width="193"><label>
            <input name="guia" type="text" id="guia" maxlength="45" />
      <script>document.form1.guia.focus()</script>
      <script> var guia = new LiveValidation('guia'); guia.add( Validate.Numericality, { onlyInteger: true } ); guia.add(Validate.Presence);</script>

            </label></td>
          <td width="117">Nombre Empresa*</td>
          <td width="176">
          
          <?php
		include("conecta.php");
		$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from empresas");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="empresa" id="select">';
			do {
       			echo '<option value='.$row["Nombre_Empresa"].'>'.$row["Nombre_Empresa"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
		
	   
	?>
          
          </td>
          </tr>
        <tr>
          <td>Fecha*</td>
          <td colspan="3"><select name="dia" id="dia">
            <option selected="selected">Dia:</option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
            <select name="mes" id="mes">
              <option selected="selected">Mes:</option>
              <option value="01">Enero</option>
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
            <select name="ano" id="ano">
              <option selected="selected">Año:</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
            </select></td>
          </tr>
        <tr>
          <td>Origen - Destino*</td>
          <td colspan="3">
          <?php
          $result=mysql_query("select * from tarifa where Estado='ACTIVO'");
			if ($row = mysql_fetch_array($result)){ 
			echo '<select name="origendestino" id="select">';
			do {
       			echo '<option value='.$row["Id"].'>'.$row["Origen"]." - ".$row["Destino"].'</option>';		
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
			}
            ?>
          
          </td>
          </tr>
        <tr>
          <td>Hora Llegada*</td>
          <td><label>
            <input name="hllegada" type="text" id="hllegada" value="00:00:00" />
          <script type="text/javascript">  var hllegada = new LiveValidation('hllegada'); hllegada.add(Validate.Presence);</script> 
          </label></td>
          <td>Hora Despacho*</td>
          <td><label>
            <input name="hdespacho" type="text" id="hdespacho" value="00:00:00" />
          <script type="text/javascript">  var hdespacho = new LiveValidation('hdespacho'); hdespacho.add(Validate.Presence);</script> 
          </label></td>
        </tr>
        <tr>
          <td>N° de Despacho*</td>
          <td><label>
            <input type="text" name="ndespacho" id="ndespacho" />
      <script> var ndespacho = new LiveValidation('ndespacho'); ndespacho.add( Validate.Numericality, { onlyInteger: true } ); ndespacho.add(Validate.Presence);</script>
          </label></td>
          <td>Cantidad M3*</td>
          <td><label>
            <input type="text" name="cantidadm3" id="cantidadm3" />
                  <script> var cantidadm3 = new LiveValidation('cantidadm3'); cantidadm3.add( Validate.Numericality ); cantidadm3.add(Validate.Presence);</script>

          </label></td>
          </tr>
        <tr>
          <td>Detalle de Carguío*</td>
          <td colspan="3"><label>
            <input name="detalle" type="text" id="detalle" size="69" />
      <script> var detalle = new LiveValidation('detalle'); detalle.add(Validate.Presence);</script>
          </label></td>
          </tr>
        <tr>
          <td>Camión*</td>
          <td><?php
          $result=mysql_query("select * from asignacion_camiones where Estado='ACTIVO'");
			if ($row = mysql_fetch_array($result)){ 
			echo '<select name="camion" id="select">';
			do {
       			echo '<option value='.$row["Id"].'>'.$row["Patente_Ca"].'</option>';				
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
			}
		  ?></td>
          <td>Fecha</td>
          <td><input name="fechaa" type="text" id="fechaa" value="<?php echo date('Y-m-d'); ?>" readonly="readonly" /></td>
        </tr>
      </table>
    <table width="571" border="0" align="center">
      <tr>
        <td colspan="2"><input name="contratado" type="hidden" id="contratado" value="CONTRATADO" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Aceptar Ingreso de Guía
            <script>var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
          </label>
          </strong></div></td>
      </tr>
      <tr>
        <td width="227"><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Guía" />
        </div></td>
        <td width="233"><div align="center">
        <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
        </a>
        </div></td>
      </tr>
    </table>    
  </form>        
    <?php
	
	if($_POST[button]=="Ingresar Guía")
	{
		
		$sql1="select * from tarifa where Id=".$_POST['origendestino'];
			$respuesta=mysql_query($sql1,$conexion);
			if(mysql_affected_rows()>0)
			{
			echo "";
			$registro=mysql_fetch_row($respuesta);
			
            $origen= $registro[2];
            $destino=$registro[3];
            $tarifa=$registro[5];
            }
		
		$cantidad=$_POST[cantidadm3];
		$monto=$tarifa*$cantidad;
		
		$iva1=19/100;
		$iva=$monto*$iva1;
		$neto=$monto-$iva;
			
			
		$sql2="select * from asignacion_camiones where Id=".$_POST['camion'];
		$respuesta=mysql_query($sql2,$conexion);
		if(mysql_affected_rows()>0)
			{
				echo "";
				$registro=mysql_fetch_row($respuesta);
	
			$nom=$registro[5];
			$rut=$registro[7];
			$nom_tra=$registro[8];
			$pat=$registro[6];
			
			}
			
		
		if ($_POST[guia]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
     				if ($_POST[ndespacho]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[cantidadm3]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[detalle]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';	
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Ingreso al SCG "Sistema de Control de Gestión"");</script>';	
					}else{
							
					$p_Id="";
					$p_N_Guia_pro=$_POST[guia];
					$p_Empresa=$_POST[empresa];
					$p_Dia=$_POST[dia];
					$p_Mes=$_POST[mes];
					$p_Ano=$_POST[ano];
					$p_Origen=$origen;
					$p_Destino=$destino;
					$p_Hora_Llegada=$_POST[hllegada];
					$p_Hora_Despacho=$_POST[hdespacho];
					$p_N_Despacho=$_POST[ndespacho];
					$p_Cantidad_m3=$_POST[cantidadm3];
					$p_Detalle=$_POST[detalle];
					$p_Tarifa=$tarifa;
					$p_Monto_Despachado=round($monto);
					$p_Fecha_Ingreso=$_POST[fechaa];
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
					$p_Patente_Ca=$pat;
					$p_Valor_Neto=$neto;
					$p_Valor_Iva=$iva;

		
		$sql="insert into guia values('".$p_Id."','".$p_N_Guia_pro."','".$p_Empresa."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".        $p_Origen."','".$p_Destino."','".$p_Hora_Llegada."','".$p_Hora_Despacho."','".$p_N_Despacho."','".$p_Cantidad_m3."','".        $p_Detalle."','".$p_Tarifa."','".$p_Monto_Despachado."','".$p_Fecha_Ingreso."','".$p_Modificacion_Usuario."','".        $p_Fecha_Modificacion."','".$p_Patente_Ca."','".$p_Valor_Neto."','".$p_Valor_Iva."')";
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
		
					$p_Id="";
					$p_N_Guia_pro=$_POST[guia];
					$p_Patente_Ca=$pat;
					$p_Nombre_Ca=$nom;
					$p_Rut_Tra=$rut;
					$p_Nombre_Tra=$nom_tra;
					$p_Fecha_Ingreso=$_POST[fechaa];
					
					$sqll="insert into guia_camion values('".$p_Id."','".$p_N_Guia_pro."','".$p_Patente_Ca."','".$p_Nombre_Ca."','".      				$p_Rut_Tra."','".$p_Nombre_Tra."','".$p_Fecha_Ingreso."')";
					echo '<script>alert("La Guía N°'.$p_N_Guia_pro.' ha sido Registarda en el Sistema.");</script>';
					$conexion=mysql_connect("localhost","root","");
					mysql_select_db("asetrans",$conexion);
					mysql_query($sqll,$conexion);
					
					
		
					}
					}
					}
				}
			}
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