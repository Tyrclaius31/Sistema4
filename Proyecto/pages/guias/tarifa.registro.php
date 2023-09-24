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

<link type='text/css' href='../../css/osx.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='../../css/js/jquery1.js'></script>
<script type='text/javascript' src='../../css/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='../../css/js/osx.js'></script>
<script type="text/javascript" src="../../css/js/live_validation.js"></script>

</head>
<body>
<div id="apDiv5"><strong><a href='#' class='osx'><img src="../../images/interrogacion.jpg" width="19" height="19" /></a></strong></div>

	<!-- modal content -->
		<div id="osx-modal-content">
			<div id="osx-modal-title"><h2 align="center"><b>Ayuda Auxiliar para Sistema de Gestión</b></h2></div>
			<div class="close"><a href="#" class="simplemodal-close">x</a></div>
			<div id="osx-modal-data">
				<h3>Ingreso de Tarifas de Transporte</h3>
                 <p align="justify">Este formulario nos permite ingresar las tarifas para el cobro del servicio para las empresas, es necesario llenar todos los campos del registro. Para el registro correcto de la empresa, se debe completar los siguientes campos:</p>
            	<br>
                <b>Origen:</b> Origen del transporte.
                <b>Destino:</b> Lugar de entrega del envío.
                <b>Calidad Madera:</b> Ej. Madera de primera, segunda etc.
                <b>Nombre Empresa:</b> Nombre de la empresa deña de la madera.
                <b>Tarifa:</b> Monto a cobrar por el envío.<br>
                <p align="justify">Una vez llenado todos estos datos, Aceptamos el Ingreso, por último debe hacer clic en el botón   			  				<b>"Ingresar Tarifa"</b>, y listo!!!</p>
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
    <h3 align="center"><strong>Ingreso de Tarifas</strong></h3>
    <table width="569" border="0" align="center">
      <tr>
        <td width="103">Origen*</td>
        <td width="173"><input name="origen" type="text" id="origen" /></td>  <script>document.form1.origen.focus()</script>
              <script type="text/javascript">  var origen = new LiveValidation('origen'); origen.add(Validate.Presence, { minimum: 4 });</script> 
        <td width="106">Destino*</td>
        <td width="169"><input type="text" name="destino" id="destino" /></td>
              <script type="text/javascript">  var destino = new LiveValidation('destino'); destino.add(Validate.Presence, { minimum: 4 });</script> 
      </tr>
      <tr>
        <td>Calidad Madera*</td>
        <td><input name="calidad" type="text" id="calidad" maxlength="30" /></td>
              <script type="text/javascript">  var calidad = new LiveValidation('calidad'); calidad.add(Validate.Presence, { minimum: 4 });</script> 
        <td>Nombre Empresa*</td>
        <td><?php
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
          
		  ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#262626">Tarifa*</td>
        <td bgcolor="#262626"><label>
          <input type="text" name="tarifa" id="tarifa" />
          <script> var tarifa = new LiveValidation('tarifa'); tarifa.add( Validate.Numericality, { onlyInteger: true, minimum: 4 } );  tarifa.add(Validate.Presence);</script>
        </label></td>
      </tr>
      <tr>
        <td colspan="4" align="center"></td>
      </tr>
    </table>
    <table width="407" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Acepta Ingreso de Tarifa
 			<script>var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
        </strong></div></td>
        </tr>
      <tr>
        <td width="198"><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Tarifa" />
        </div></td>
        <td width="199"><div align="center">
          <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
          </a>
        </div></td>
      </tr>
    </table>
    <input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d") ?>" />
    <input name="estado" type="hidden" id="estado" value="ACTIVO" />
    </form>


<?php
		
	if($_POST[button]=="Ingresar Tarifa")
	{
		if ($_POST[calidad]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[origen]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[destino]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
     				if ($_POST[tarifa]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
						if ($_POST[checkbox]== "") {
    				echo '<script>alert("Debe Aceptar el Ingreso de Tarifa");</script>';
					}else{
						
											
					$p_Id="";
					$p_Empresa=$_POST[empresa];
					$p_Origen=$_POST[origen];
					$p_Destino=$_POST[destino];
					$p_Calidad_Madera=$_POST[calidad];
					$p_Tarifa=$_POST[tarifa];
					$p_Fecha_Ingreso=$_POST[fecha];
					$p_Estado=$_POST[estado];
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into tarifa values('".$p_Id."','".$p_Empresa."','".$p_Origen."','".         			 	 	      	     	     	$p_Destino."','".$p_Calidad_Madera."','".$p_Tarifa."','".$p_Fecha_Ingreso."','".$p_Estado."','".$p_Modificacion_Usuario."','".   		$p_Fecha_Modificacion."')";	
		echo '<script>alert("La Nueva tarifa desde '.$p_Origen.' hasta '.$p_Destino.', a $'.$p_Tarifa.' ha sido Registarda en el        Sistema.");</script>';
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