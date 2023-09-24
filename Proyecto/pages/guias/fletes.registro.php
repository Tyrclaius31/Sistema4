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
				<h3>Ingreso de Fletes de Ocación</h3>
                 <p align="justify">Este formulario nos permite ingresar fletes que no están contemplados como guía de despacho, es necesario llenar todos los campos del registro. Para el registro correcto se debe completar los siguientes campos:</p>
            	<br>
                <b>Origen:</b> Lugar de donde proviene el flete.<br>
                <b>Destino:</b> Lugar donde llegara el flete.<br>
                <b>Fecha:</b> Día, Mes, Año.<br>
                <b>Trabajador:</b> Nombre del trabajador encargado del flete.<br>
                <b>Camión:</b> Patente del camión.<br>
                <b>Monto:</b> Valor del flete en pesos.<br>
                <b>Porcentaje:</b> Porcentaje asignado al camionero por el flete.<br>
                <br>
                <p align="justify">Una vez llenado todos estos datos, Aceptamos el Ingreso, por último debe hacer clic en el botón   			  				<b>"Ingresar Flete"</b>, y listo!!!</p>
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
    <h3 align="center"><strong>Ingreso de Fletes de Ocación</strong></h3>
    <table width="604" border="0" align="center">
      <tr>
        <td width="110">Origen*</td>
        <td width="183"><label>
          <input name="origen" type="text" id="origen" />
      <script>document.form1.origen.focus()</script>
      <script type="text/javascript">  var origen = new LiveValidation('origen'); origen.add(Validate.Presence, { minimum: 4 });</script> 

        </label></td>
        <td width="108">Destino*</td>
        <td width="185"><label>
          <input name="destino" type="text" id="destino" />
          <script type="text/javascript">  var destino = new LiveValidation('destino'); destino.add(Validate.Presence, { minimum: 4 });</script> 

        </label></td>
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
        <td>Trabajador*</td>
        <td>
		<?php
		include("conecta.php");
		$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from n_operador where Cargo_Operador='Chofer' and Estado='CONTRATADO'");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="operador" id="select">';
			do {
       			echo '<option value='.$row["Nombre_Operador"].'>'.$row["Nombre_Operador"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
		?>
    </td>
        <td>Camión*</td>
        <td>
        
        <?php
		$result=mysql_query("select * from camiones where Estado='ACTIVO'");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="camion" id="select">';
			do {
       			echo '<option value='.$row["Traccion"].'>'.$row["Traccion"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
		?>
        
        </td>
      </tr>
      <tr>
        <td>Monto*</td>
        <td><label>
          <input name="monto" type="text" id="monto" />
          <script> var monto = new LiveValidation('monto'); monto.add( Validate.Numericality, { onlyInteger: true, minimum: 4 } );  monto.add(Validate.Presence);</script>
        </label></td>
        <td>Porcentaje*</td>
        <td><label>
          <input name="porcentaje" type="text" id="porcentaje" size="17" maxlength="3" />
        %</label>
          <script> var porcentaje = new LiveValidation('porcentaje'); porcentaje.add( Validate.Numericality, { onlyInteger: true, minimum: 2 } ); porcentaje.add(Validate.Presence); </script>
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center">&nbsp;</td>
      </tr>
    </table>
    <table width="407" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Acepta Ingreso Flete
 			<script>var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
            </label>
        </strong>
            <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
        </div></td>
        </tr>
      <tr>
        <td width="201"><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Flete" />
        </div></td>
        <td width="196"><div align="center">
        <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
        </a>
        </div></td>
      </tr>
    </table>
    </form>


<?php
		
	if($_POST[button]=="Ingresar Flete")
	{
		if ($_POST[origen]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[destino]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[monto]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
     				if ($_POST[porcentaje]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Ingreso al SCS "Sistema de Control de Servicios"");</script>';	
					}else{
								
					
					$monto=$_POST[monto];
					$por=$_POST[porcentaje];
					$porcentaje=$por/100;
					$valor=$monto*$porcentaje;
					$total=$monto-$valor;
					
					
					$p_Id="";
					$p_Origen=$_POST[origen];
					$p_Destino=$_POST[destino];
					$p_Fecha=$_POST[fecha];
					$p_Dia=$_POST[dia];
					$p_Mes=$_POST[mes];
					$p_Ano=$_POST[ano];
					$p_Monto=$_POST[monto];
					$p_Porcentaje=$_POST[porcentaje];
					$p_Valor_Por=$valor;
					$p_Total=$total;
					$p_Patente_Ca=$_POST[camion];
					$p_Nombre_Tra=$_POST[operador];
		
		$sql="insert into fletes_ocacion values('".$p_Id."','".$p_Origen."','".$p_Destino."','".         			 	 	      	     	$p_Fecha."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".$p_Monto."','".$p_Porcentaje."','".$p_Valor_Por."','".$p_Total."','". 			  		$p_Patente_Ca."','".$p_Nombre_Tra."')";	
		echo '<script>alert("El Flete de '.$_POST[origen].' a '.$_POST[destino].', ha sido Registardo en el Sistema.");</script>';
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
		
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