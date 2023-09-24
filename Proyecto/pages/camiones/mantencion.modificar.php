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
				<h3>Modificar Registro de Manteciones</h3>
                 <p align="justify">Esta opción permite modificar las Mantenciones realizadas en una determinada fecha.<br><br>Para esto, debe seleccionar la Patente del Camión y la Fecha en que se realizó la mantención, luego seleccionar el botón <b>"Buscar"</b> y aparecerá el detalle de la mantención seleccionada. Sólo se puede modificar la especificación de la mantención.<br><br>Para esto se debe tener la Clave Permiso.</p>       
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
    
    <h3><center> Camiones</center></h3>
      <ul>
        <li><a href="camion.registro.php" title="Registrar Nuevo Camión">- Registrar</a></li>
        <li><a href="camion.buscar.php" title="Buscar Datos de Camión"><b>- Buscar</b></a></li>
        <li><a href="camion.modificar.php" title="Modificar Datos de Camión">- Modificar</a></li>
        <li><a href="camion.eliminar.php" title="Eliminar Camión">- Eliminar</a></li>
		<? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
       	 <li><a href="camion.informe.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
         <? } 
         if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
      	 <li><a href="camion.informeadm.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
	  	 <? } ?>
        <li><a href="#" title=""></a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="camion.asignar.php" title="Asignar Camión a Trabajador">- Asignar</a></li>
        <li><a href="camion.modasignar.php" title="Modificar Asignación">- Mod. Asignación</a></li>
        <li><a href="camion.verasignar.php" title="Ver Asignaciones Actuales">- Ver Asignaciones</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="#" title=""><b></b></a></li>
      </ul>
    
    <h3><center>Mantención</center></h3>
      <ul>
         <li><a href="mantencion.registro.php" title="Registrar Nueva Mantención">- Ingresar Mant.</a></li>
         <li><a href="mantencion.listar.php" title="Listar Datos de Mantención">- Listar Mant.</a></li>
         <li><a href="mantencion.modificar.php" title="Modificar Datos de Mantención">- Modificar Mant.</a></li>
      </ul>
    
    </div>
    <div id="contenido">
    
    <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong>Modificar Registro de Mantención</strong></h3>   
    <p align="center"><strong>Seleccione Camión</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from mantencion");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="nombre" id="select">';
			do {
       			echo '<option value='.$row["Id"].'>'.$row["Patente_Ca"].' - '.$row["Fecha_Ingreso"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
	?>
      <script>document.form1.nombre.focus()</script>
      <label>
        <input type="submit" name="button2" id="button2" value="Buscar" />
        <br />
      </label>
    </p>
    
    <?php
	
	if($_POST[button2]=="Buscar")
	{
		$sql="select a.Nombre_Ca, a.Modelo_Ca, a.Patente_Ca, a.Nombre_Tra, a.Rut_Tra, b.Descripcion, b.Fecha_Ingreso, b.Patente_Ca,      	b.Id from asignacion_camiones a, mantencion b where b.Id =".$_POST['nombre']." and a.Patente_Ca=b.Patente_Ca";
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    
    <table width="560" border="0" align="center">
      <tr>
        <td width="116">Camión
          <input name="id" type="hidden" id="id" value="<? echo $registro[8];?>" />
          <input name="camionn" type="hidden" id="camionn" value="<? echo $registro[0];?>" /></td>
        <td width="173"><label>
          <input name="camion" type="text" disabled="disabled" id="camion" value="<? echo $registro[0];?>" size="25"/>
        </label></td>
        <td width="76">Modelo</td>
        <td width="177"><label>
          <input name="modelo" type="text" disabled="disabled" id="modelo" value="<? echo $registro[1];?>" size="25" readonly="readonly"/>
        </label></td>
      </tr>
      <tr>
        <td>Patente</td>
        <td><label>
          <input name="patente" type="text" disabled="disabled" id="patente" value="<? echo $registro[2];?>" size="25" maxlength="100" readonly="readonly"/>
        </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Nombre Chofer</td>
        <td><input name="chofer" type="text" disabled="disabled" id="chofer" value="<? echo $registro[3];?>" size="25" maxlength="100" readonly="readonly"/></td>
        <td>Rut</td>
        <td><input name="rut" type="text" disabled="disabled" id="rut" value="<? echo $registro[4];?>" size="25" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Detalle Mantención</td>
        <td colspan="3" rowspan="2"><label>
          <textarea name="detalle" id="detalle" cols="45" rows="5"> <? echo $registro[5];?></textarea>
      <script type="text/javascript">  var detalle = new LiveValidation('detalle'); detalle.add(Validate.Presence);</script> 
        </label></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Fecha Ingreso</td>
        <td><label>
          <input name="fecha" type="text" disabled="disabled" id="fecha" value="<? echo $registro[6];?>" size="25" />
        </label></td>
        <td>&nbsp;</td>
        <td><input name="modificar" type="hidden" id="modificar" value="<? echo date("Y-m-d"); ?>" /></td>
      </tr>
    </table>
    <table width="200" border="0" align="center">
      <tr>
        <td align="center"><strong>Clave Permiso</strong></td>
        <td><label>
          <input name="clave" type="password" id="clave" size="10" />
        </label></td>
      </tr>
      <tr>
        <td><div align="center">
          <label>
            <input type="submit" name="button" id="button" value="Modificar" />
            </label>
          </div></td>
        <td>
        <a href="javascript:location.reload()">
        <input type="submit" name="button3" id="button3" value="Limpiar" />
        </a>
        </td>
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
		
		if($_POST[detalle]=="")
		{
			echo '<script>alert("No puede Modificar estos datos si existen campos de texto en blanco.");</script>';
		}else{
			if($_POST[clave]=="")
			{
				echo '<script>alert("No puede Modificar los datos de la Mantención del Camión '.$_POST[camion].', si no ingresa la CLAVE PERMISO.");</script>';
			}else{
				$sql="update mantencion set Descripcion='".$_POST[detalle]."' WHERE Id='".$_POST[id]."' ";
			
				$respuesta=mysql_query($sql,$conexion);
				echo '<script>alert("La Modificacion en el Camión '.$_POST[camionn].', se Realizo con exito.");</script>';
		}
		}
		}else{
			echo '<script>alert("Clave Permiso ERRÓNEA");</script>';
		}
	}
?></div>
  </div>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>