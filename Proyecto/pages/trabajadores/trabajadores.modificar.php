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
<script type="text/javascript" src="../../css/js/live_validation.js"></script>
</head>
<body>
<div id="apDiv5"><strong><a href='#' class='osx'><img src="../../images/interrogacion.jpg" width="19" height="19" /></a></strong></div>

	<!-- modal content -->
		<div id="osx-modal-content">
			<div id="osx-modal-title"><h2 align="center"><b>Ayuda Auxiliar para Sistema de Gestión</b></h2></div>
			<div class="close"><a href="#" class="simplemodal-close">x</a></div>
			<div id="osx-modal-data">
				<h3>Modificar Registro de Trabajadores</h3>
                 <p align="justify">Esta opción nos permite modificar los datos del trabajador, como por ejemplo: el cambio de domicilio o el cambio de número telefónico.
</p>
                <br>
                <p align="justify">Primero seleccionamos al trabajador y presionamos el botón <b>"Buscar"</b>. Luego el sistema nos arrogara el resultado de la búsqueda del trabajador con todos sus datos. 
    El sistema solo nos deja modificar la información como el Nombre, Dirección o N° Telefónico, ya que el RUT no es modificable.
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
    
    <h3><center> Trabajadores</center></h3>
      <ul>
        <li><a href="trabajadores.registro.php" title="Registrar Nuevo Trabajador">- Registrar</a></li>
        <li><a href="trabajadores.buscar.php" title="Buscar Datos de Trabajador"><b>- Buscar</b></a></li>
        <li><a href="trabajadores.modificar.php" title="Modificar Datos de Trabajador">- Modificar</a></li>
        <li><a href="trabajadores.eliminar.php" title="Eliminar a Trabajador (Despedido)">- Eliminar</a></li>
		<? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="trabajadores.listar.php" title="Listar Información de los Trabajadores">- Listar Trab.</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="trabajadores.listaradm.php" title="Listar Información de los Trabajadores">- Listar Trab.</a></li>
        <li><a href="trabajadores.eliminados.php" title="Trabajadores Eliminados">- Eliminados</a></li>
        <li><a href="trabajadores.reincorporacion.php" title="Reincorporar Trabajador">- Reincorporación</a></li>
		<? } ?>    
      </ul>
    
    </div>
    <div id="contenido" align="center">
    

  <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong> Modificar Datos Trabajador</strong></h3>
    <h3 align="center"><strong>Seleccione al Trabajador</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from n_operador where Estado='CONTRATADO' and Cargo_Operador='Chofer'");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="nombre" id="select">';
			do {
       			echo '<option value='.$row["Rut_Operador"].'>'.$row["Nombre_Operador"].'</option>';		  
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
		$sql="select * from n_operador where Rut_Operador =".$_POST['nombre']." and Cargo_Operador='Chofer'";
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    
    <table width="630" border="0" align="center">
      <tr>
        <td width="127">Nombre</td>
        <td width="166"><label>
          <input name="nombre1" type="text" id="nombre1" value="<? echo $registro[2];?>" size="25"/>
              <script type="text/javascript">  var nombre1 = new LiveValidation('nombre1'); nombre1.add(Validate.Presence);</script> 
        </label></td>
        <td width="141">Rut
        <input name="rut1" type="hidden" id="rut1" value="<? echo $registro[1];?>"></td>
        <td width="178"><label>
          <input name="rut" type="text" disabled id="rut" value="<? echo $registro[1];?>" size="25" maxlength="12"/>
        </label></td>
      </tr>
      <tr>
        <td>Dirección</td>
        <td colspan="3"><label>
          <input name="direccion" type="text" id="direccion" value="<? echo $registro[3];?>" size="80" maxlength="100"/>
              <script type="text/javascript">  var direccion = new LiveValidation('direccion'); direccion.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Fono Contacto</td>
        <td><input name="telefono" type="text" id="telefono" value="<? echo $registro[4];?>" size="25" maxlength="25"/>
              <script type="text/javascript">  var telefono = new LiveValidation('telefono'); telefono.add(Validate.Presence);</script> 
        </td>
        <td>Fono Contacto 2</td>
        <td><input name="telefono2" type="text" id="telefono2" value="<? echo $registro[5];?>" size="25" maxlength="25"/>
              <script type="text/javascript">  var telefono2 = new LiveValidation('telefono2'); telefono2.add(Validate.Presence);</script> 
        </td>
      </tr>
      <tr>
        <td>Licencia</td>
        <td><label>
          <input name="licencia" type="text" id="licencia" value="<? echo $registro[10];?>" size="25" />
              <script type="text/javascript">  var textfield2 = new LiveValidation('textfield2'); textfield2.add(Validate.Presence);</script> 
        </label></td>
        <td>Cargo</td>
        <td><input name="cargo" type="text" id="cargo" value="<? echo $registro[9];?>" size="25" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>Descripción</td>
        <td><input name="zona" type="text" id="zona" value="<? echo $registro[11];?>" size="25" />
              <script type="text/javascript">  var zona = new LiveValidation('zona'); zona.add(Validate.Presence);</script> 
        </td>
        <td>Turno</td>
        <td><input name="textfield" type="text" disabled id="textfield" value="<? echo $registro[12];?>" size="25" /></td>
      </tr>
      <tr>
        <td>Fecha Ingreso</td>
        <td><input name="textfield3" type="text" disabled id="textfield3" value="<? echo $registro[13];?>" size="25" /></td>
        <td>Estado</td>
        <td>
        <input name="textfield4" type="text" disabled id="textfield4" value="<? echo $registro[14];?>" size="25" />
        <input name="modificar" type="hidden" id="modificar" value="<? echo date("Y-m-d"); ?>" />
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
		
		if($_POST[nombre1]=="" or $_POST[direccion]=="" or $_POST[telefono]=="" or $_POST[cargo]=="" or $_POST[zona]=="")
		{
			echo '<script>alert("No puede Modificar estos datos si existen campos de texto en blanco.");</script>';
		}else{
			if($_POST[clave]=="")
			{
				echo '<script>alert("No puede Modificar los datos de '.$_POST[nombre1].', si no ingresa la CLAVE PERMISO.");</script>';
			}else{
				$sql="update n_operador set Nombre_Operador='".$_POST[nombre1]."',Direccion_Operador='".$_POST[direccion]   			     			."',Fono_Contacto='".$_POST[telefono]."',Fono_Contacto2='".$_POST[telefono2]."',Cargo_Operador='".$_POST[ 			    			cargo]."',Licencia='".$_POST[licencia]."',Descripcion='".$_POST[zona]."',Modificacion_Usuario='".$_POST[nick].         		"',Fecha_Modificacion='".$_POST[modificar]."' WHERE Rut_Operador='".$_POST[rut1]."' ";
			
				$respuesta=mysql_query($sql,$conexion);
				echo '<script>alert("La Modificación en '.$_POST[nombre1].', se Realizo con éxito.");</script>';
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