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
				<h3>Ingreso de Empresas</h3>
                 <p align="justify">Este formulario nos permite ingresar a las empresas que le prestaremos nuestro servicio, es necesario llenar todos los campos del registro. Para el registro correcto de la empresa, se debe completar los siguientes campos:</p>
            	<br>
                <b>Nombre Empresa:</b> Nombre de la empresa.<br>
                <b>Rut Empresa:</b> Rol Único Tributario de la empresa.<br>
                <b>Dirección:</b> Ubicación de la empresa.<br>
                <b>Nombre Dueño:</b> Nombre del dueño de la empresa.<br>
                <b>Teléfono:</b> Número telefónico de la empresa.<br>
                <b>Fax:</b> Fax de la empresa.<br>
                <p align="justify">Una vez llenado todos estos datos, Aceptamos el Ingreso, por último debe hacer clic en el botón   			  				<b>"Ingresar Empresa"</b>, y listo!!!</p>
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
    <h3 align="center"><strong>Ingreso de Empresa</strong></h3>
    <table width="599" border="0" align="center">
      <tr>
        <td width="109">Nombre Empresa*</td>
        <td width="191"><label>
          <input name="nombre" type="text" id="nombre" maxlength="45" />
      <script>document.form1.nombre.focus()</script>
              <script type="text/javascript">  var nombre = new LiveValidation('nombre'); nombre.add(Validate.Presence, { minimum: 6 });</script> 
        </label></td>
        <td width="105">Rut Empresa*</td>
        <td width="176"><label>
          <input name="rut" type="text" id="rut" maxlength="12" />
              <script type="text/javascript">  esrut();</script> 
        </label></td>
      </tr>
      <tr>
        <td>Dirección*</td>
        <td colspan="3"><label>
          <input name="direccion" type="text" id="direccion" size="70" maxlength="100" />
              <script type="text/javascript">  var direccion = new LiveValidation('direccion'); direccion.add(Validate.Presence, { minimum: 6 });</script> 

        </label></td>
      </tr>
      <tr>
        <td>Nombre Dueño*</td>
        <td colspan="3"><label>
          <input name="dueno" type="text" id="dueno" size="70" maxlength="65">
              <script type="text/javascript">  var dueno = new LiveValidation('dueno'); dueno.add(Validate.Presence, { minimum: 6 });</script> 
        </label></td>
      </tr>
      <tr>
        <td>Telefono*</td>
        <td><label>
          <input name="telefono" type="text" id="telefono" />
              <script type="text/javascript">  var telefono = new LiveValidation('telefono'); telefono.add(Validate.Presence, { minimum: 6 });</script> 
        </label></td>
        <td>Fax</td>
        <td><label>
          <input name="fax" type="text" id="fax" />
              <script type="text/javascript">  var fax = new LiveValidation('fax'); fax.add(Validate.Presence, { minimum: 6 });</script> 
        </label></td>
      </tr>
      <tr>
        <td colspan="4" align="center">
		<?php
	    include("conecta.php");
		$conexion=Conectarse();
	     
		?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label>
          <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
          </label></td>
      </tr>
    </table>
    <table width="407" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Acepta Ingreso de Empresa
 			<script>var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
            </label>
        </strong></div></td>
        </tr>
      <tr>
        <td width="201"><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Empresa" />
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
		
	function validaRut($rut){
    if(strpos($rut,"-")==false){
        $RUT[0] = substr($rut, 0, -1);
        $RUT[1] = substr($rut, -1);
    }else{
        $RUT = explode("-", trim($rut));
    }
    $elRut = str_replace(".", "", trim($RUT[0]));
    $factor = 2;
    for($i = strlen($elRut)-1; $i >= 0; $i--):
        $factor = $factor > 7 ? 2 : $factor;
        $suma += $elRut{$i}*$factor++;
    endfor;
    $resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
   if($dv == trim(strtolower($RUT[1]))){
       return true;
   }else{
       return false;
   }
   }
		
		
	if($_POST[button]=="Ingresar Empresa")
	{
		if ($_POST[nombre]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[rut]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[direccion]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
     				if ($_POST[dueno]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[telefono]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Ingreso al SCS "Sistema de Control de Servicios"");</script>';	
					}else{
					if(validaRut($_POST[rut])==true){
									
					$p_Id="";
					$p_Rut_Empresa=$_POST[rut];
					$p_Nombre_Empresa=$_POST[nombre];
					$p_Nombre_Dueno=$_POST[dueno];
					$p_Direccion=$_POST[direccion];
					$p_Telefono=$_POST[telefono];
					$p_Fax=$_POST[fax];
					$p_Fecha_Ingreso=$_POST[fecha];
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into empresas values('".$p_Id."','".$p_Rut_Empresa."','".$p_Nombre_Empresa."','".         			 	 	      	$p_Nombre_Dueno."','".$p_Direccion."','".$p_Telefono."','".$p_Fax."','".$p_Fecha_Ingreso."','".$p_Modificacion_Usuario."','".        $p_Fecha_Modificacion."')";	
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
		
		if (@!mysql_query($sql)){ 
		echo '<script>alert("No puede realizar el Registro, pues el Rut '.$_POST[rut].', ya existe en la Base de Datos. No se puede    	Duplicar este Dato.");</script>';
		}else{
		echo '<script>alert("La Empresa '.$p_N_Guia_pro.', ha sido Registarda en el Sistema.");</script>';
		}
		
		}else{
        echo '<script>alert("El Rut no es Valido, Ingrese Nuevamente");</script>';
		}
			
					}
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