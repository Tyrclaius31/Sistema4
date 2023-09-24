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
				<h3>Modificar Registro de Guías</h3>
                 <p align="justify">Esta opción nos permite modificar una guía en los casos que se haya omitido algún dato o el error en la digitación.</p>
                <br>
                <p align="justify">Primero seleccionamos el N° de Guía y presionamos el botón <b>"Buscar"</b>. Luego el sistema nos arrogara el resultado de la búsqueda con todos sus datos. 
    Esta opción solo nos permite modificar la Hora de Llegada, Hora de Despacho, Cantidad M3 y el Detalle. Solo el Administrador o el Supervisor pueden realizar las modificaciones.
	<br>Realizada la modificación correspondiente necesitamos la clave de permiso del Administrador, porque solo este o el Supervisor pueden realizar las modificaciones correspondientes. Una vez ingresada la Clave Permiso, debe hacer clic en el botón <b>"Modificar"</b>, y listo!!!
</p>
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
    <div id="contenido" align="center">
    

  <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong> Modificar Datos de Guías</strong></h3>
    <h3 align="center"><strong>Seleccione Guía</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from guia");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="guias" id="select">';
			do {
       			echo '<option value='.$row["Id"].'>'.$row["N_Guia_pro"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}	   
	?>
      <script>document.form1.guias.focus()</script>
      <label>
        <input type="submit" name="button2" id="button2" value="Buscar" />
        <br />
      </label>
    </h3>
    
   <?php
	
	if($_POST[button2]=="Buscar")
	{
		$sql="select a.N_Guia_pro, a.Patente_Ca, b.Id, b.N_Guia_pro, b.Empresa, b.Dia, b.Mes, b.Ano, b.Origen, b.Destino,                b.Cantidad_m3, b.Detalle, b.Tarifa, b.Monto_Despacho, b.Hora_Llegada, b.Hora_Despacho from guia_camion a, guia b where b.Id="        .$_POST['guias']." and a.N_Guia_pro=b.N_Guia_pro";
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    
    <table width="629" border="0" align="center">
      <tr>
        <td width="102">N° Guía
          <input name="id2" type="hidden" id="id2" value="<? echo $registro[2]; ?>" />
          <input name="nguia" type="hidden" id="nguia" value="<? echo $registro[3];?>" />
          <input name="tarifac" type="hidden" id="tarifac" value="<? echo $registro[12];?>" /></td>
        <td width="208"><label>
          <input name="nombre1" type="text" disabled id="nombre1" value="<? echo $registro[3];?>" size="25"/>
        </label></td>
        <td width="94">Patente Camión</td>
        <td width="207"><label>
          <input name="rut" type="text" disabled id="rut" value="<? echo $registro[1];?>" size="25" maxlength="12"/>
        </label></td>
      </tr>
      <tr>
        <td>Fecha</td>
        <td><input name="telefono" type="text" disabled id="telefono" value=<? echo $registro[7]; echo - $registro[6]; echo -        $registro[5]; ?> size="25" maxlength="25"/></td>
        <td>Empresa</td>
        <td><input name="telefono2" type="text" disabled id="telefono2" value="<? echo $registro[4];?>" size="25" maxlength="25"/></td>
      </tr>
      <tr>
        <td>Origen</td>
        <td><label>
          <input name="textfield4" type="text" disabled="disabled" id="textfield4" value="<? echo $registro[8];?>" size="25"/>
        </label></td>
        <td>Destino</td>
        <td><input name="cargo" type="text" disabled id="cargo" value="<? echo $registro[9];?>" size="25" /></td>
      </tr>
      <tr>
        <td>Hora Llegada</td>
        <td><label>
          <input name="hllegada" type="text" id="hllegada" value="<? echo $registro[14];?>" size="25" />
          <script type="text/javascript">  var hllegada = new LiveValidation('hllegada'); hllegada.add(Validate.Presence);</script> 
        </label></td>
        <td>Hora Despacho</td>
        <td><label>
          <input name="hdespacho" type="text" id="hdespacho" value="<? echo $registro[15];?>" size="25" />
          <script type="text/javascript">  var hdespacho = new LiveValidation('hdespacho'); hdespacho.add(Validate.Presence);</script> 

        </label></td>
      </tr>
      <tr>
        <td>Cantidad M3</td>
        <td><input name="zona" type="text" id="zona" value="<? echo $registro[10];?>" size="25" />
          <script> var zona = new LiveValidation('zona'); zona.add( Validate.Numericality); zona.add(Validate.Presence); </script>
        </td>
        <td>Detalle</td>
        <td><input name="detalle" type="text" id="detalle" value="<? echo $registro[11];?>" size="25" />
          <script type="text/javascript">  var detalle = new LiveValidation('detalle'); detalle.add(Validate.Presence);</script> 
        </td>
      </tr>
      <tr>
        <td>Tarifa</td>
        <td><input name="textfield2" type="text" disabled id="textfield2" value="<? echo $registro[12];?>" size="25" /></td>
        <td>Monto</td>
        <td><input name="textfield3" type="text" disabled id="textfield3" value="<? echo $registro[13];?>" size="25" /></td>
      </tr>
    </table>
    <table width="200" border="0" align="center">
      <tr>
        <td align="center"><strong>Clave Permiso</strong></td>
        <td><label>
          <input name="clave" type="password" id="clave" size="10">
          </label></td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td align="center"><label>
          <input type="submit" name="button" id="button" value="Modificar">
          </label></td>
        <td><div align="center">
        <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
        </a>
          </div></td>
        </tr>
    </table>
  </form>
  
  <?php
		}
	}
	
	
	if($_POST[button]=="Limpiar")
	{
		
		
	}
	
	if($_POST[button]=="Modificar")
	{
	$sql="select * from usuarios where Clave_Permiso =".$_POST['clave'];
		$respuesta=mysql_query($sql,$conexion);
		
		if($p_Clave_Permiso==$respuesta)
		{	
		
		if($_POST[detalle]=="" or $_POST[zona]=="" or $_POST[hllegada]=="" or $_POST[hdespacho]=="")
		{
			echo '<script>alert("No puede Modificar estos datos si existen campos de texto en blanco.");</script>';
		}else{
			if($_POST[clave]=="")
			{
				echo '<script>alert("No puede Modificar los datos de la Guía '.$_POST[nombre1].', si no ingresa la CLAVE PERMISO.");</script>';
			}else{
				
				$tarifa=$_POST[tarifac];
				$cantidad=$_POST[zona];
				$valor=$tarifa*$cantidad;
				
				$sql="update guia set Hora_Llegada='".$_POST[hllegada]."', Hora_Despacho='".$_POST[hdespacho]."',Cantidad_m3='".      			$_POST[zona]."',Detalle='".$_POST[detalle]."', Monto_Despacho='".$valor."' WHERE Id='".$_POST[id2]."' ";
				$respuesta=mysql_query($sql,$conexion);
				echo '<script>alert("La Modificacion en la Guía N°'.$_POST[nguia].', se Realizo con exito.");</script>';
		}
		}
		}else{
			echo '<script>alert("Clave Permiso ERRÓNEA");</script>';
		}
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