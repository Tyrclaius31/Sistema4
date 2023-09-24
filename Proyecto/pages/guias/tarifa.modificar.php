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
				<h3>Modificar Registro de Tarifas</h3>
                 <p align="justify">Esta opción nos permite modificar los datos los datos de las tarifas ya realizadas como por ejemplo, el origen, el destino y la tarifa o valor.</p>
                <br>
                <p align="justify">Primero seleccionamos el Origen - Destino a modficar, y presionamos el botón <b>"Buscar"</b>. Luego el sistema nos arrogara el resultado de la búsqueda de la tarifa correspondiente con todos sus datos. 
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
    <h3 align="center"><strong> Modificar Datos de Tarifas</strong></h3>
    <h3 align="center"><strong>Seleccione Origen - Destino</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from tarifa where Estado='ACTIVO'");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="nombre" id="select">';
			do {
       			echo '<option value='.$row["Id"].'>'.$row["Origen"]." - ".$row["Destino"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
	?>
      <script>document.form1.nombre.focus()</script>
      <label>
        <input type="submit" name="button2" id="button2" value="Buscar" />
        <br />
      </label>
    </h3>
    
    <?php
	
	if($_POST[button2]=="Buscar")
	{
		$sql="select * from tarifa where Id=".$_POST['nombre'];
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    
    <table width="630" border="0" align="center">
      <tr>
        <td width="113">Nombre Empresa
          <input name="id1" type="hidden" id="id1" value="<? echo $registro[0]; ?>" /></td>
        <td width="205"><label>
          <input name="nombre1" type="text" id="nombre1" value="<? echo $registro[1];?>" size="25"/>
          <script> var nombre1 = new LiveValidation('nombre1'); nombre1.add(Validate.Presence);</script>
        </label></td>
        <td width="90">Calidad Madera</td>
        <td width="204"><input name="calidad" type="text" id="calidad" value="<? echo $registro[4];?>" size="25"/>
          <script> var calidad= new LiveValidation('calidad'); calidad.add(Validate.Presence);</script>
        </td>
      </tr>
      <tr>
        <td>Origen</td>
        <td><input name="origen" type="text" id="origen" value="<? echo $registro[2];?>" size="25"/>
          <script> var origen = new LiveValidation('origen'); origen.add(Validate.Presence);</script>
        </td>
        <td>Destino</td>
        <td><input name="destino" type="text" id="destino" value="<? echo $registro[3];?>" size="25" />
          <script> var destino = new LiveValidation('destino'); destino.add(Validate.Presence);</script>
        </td>
      </tr>
      <tr>
        <td>Tarifa</td>
        <td><label>
          <input name="tarifa" type="text" id="tarifa" value="<? echo $registro[5];?>" size="25" />
          <script> var tarifa = new LiveValidation('tarifa'); tarifa.add( Validate.Numericality ); tarifa.add(Validate.Presence);</script>
        </label></td>
        <td>Estado</td>
        <td><input name="estado" type="text" id="estado" value="<? echo $registro[7];?>" size="25" />
                  <script> var estado = new LiveValidation('estado'); estado.add( Validate.Inclusion, { within: [ 'ACTIVO' , 'DESACTIVO' ] } );  estado.add(Validate.Presence);</script>

        </td>
      </tr>
      <tr>
        <td>Fecha Ingreso</td>
        <td><input name="textfield3" type="text" disabled id="textfield3" value="<? echo $registro[6];?>" size="25" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="modificar" type="hidden" id="modificar" value="<? echo date("Y-m-d"); ?>" />
        <input name="nick" type="hidden" value="<? echo "".$_SESSION['Nick'].""; ?>" /></td>
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
		
		if($_POST[nombre1]=="" or $_POST[origen]=="" or $_POST[destino]=="" or $_POST[tarifa]=="" or $_POST[estado]=="")
		{
			echo '<script>alert("No puede Modificar estos datos si existen campos de texto en blanco.");</script>';
		}else{
			if($_POST[clave]=="")
			{
				echo '<script>alert("No puede Modificar los datos de '.$_POST[nombre1].', si no ingresa la CLAVE PERMISO.");</script>';
			}else{
				$sql="update tarifa set Empresa='".$_POST[nombre1]."',Origen='".$_POST[origen]   			     			.            	"',Destino='".$_POST[destino]."',Calidad_Madera='".$_POST[calidad]."',Tarifa='".$_POST[tarifa]."',Estado='".$_POST[       			estado]."',Modificacion_Usuario='".$_POST[nick]."',Fecha_Modificacion='".$_POST[modificar]."' WHERE       			     			Id='".$_POST[id1]."' ";
			
				$respuesta=mysql_query($sql,$conexion);
				echo '<script>alert("La Modificacion en '.$_POST[nombre1].', se Realizo con exito.");</script>';
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