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
</head>
<body>
<div id="apDiv5"><strong><a href='#' class='osx'><img src="../../images/interrogacion.jpg" width="19" height="19" /></a></strong></div>

	<!-- modal content -->
		<div id="osx-modal-content">
			<div id="osx-modal-title"><h2 align="center"><b>Ayuda Auxiliar para Sistema de Gestión</b></h2></div>
			<div class="close"><a href="#" class="simplemodal-close">x</a></div>
			<div id="osx-modal-data">
				<h3>Reincorporación de Trabajadores Área Administrativa</h3>
                 <p align="justify">Esta opción permite reintegrar a la empresa a los trabajadores del área administrativa que fueron despedidos anteriormente.</p><br>
                <p align="justify">Primero seleccionamos al trabajador a reintegrar, (la base de datos guarda los datos de las personas eliminadas del sistema), y presionamos el botón <b>"Buscar"</b>. Luego el sistema nos arroja la información del trabajador a reintegrar. Al igual que en la Modificación y Eliminación de trabajadores, el Administrador y el Supervisor son los únicos que pueden reincorporar algún personal a la empresa.<br>
	Aceptamos la reincorporación, insertamos la clave de permiso, y presionamos el botón <b>"Reincorporar"</b>, y listo!!!
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
    
    <h3><center> Administración</center></h3>
      <ul>
       <li><a href="adm.registro.php" title="Registrar Nuevo Personal Adm.">- Registrar Adm.</a></li>
        <li><a href="adm.modificar.php" title="Modificar Datos de Personal">- Modificar Adm.</a></li>
         <li><a href="adm.listar.php" title="Listar Información del Personal Adm.">- Listar Adm.</a></li>
        <li><a href="adm.eliminar.php" title="Eliminar a Personal (Despedido)">- Eliminar Adm.</a></li>
        <li><a href="adm.listareliminados.php" title="Listar Información de Personal Eliminado">- Eliminados</a></li>
        <li><a href="adm.reincorporar.php" title="Reincorporar Personal Eliminado">- Reincorporación</a></li>
        <li><a href="#" title="">_______________</a></li>
        <li><a href="../../estadisticas.php" title="Estadísticas y Gráficos">Estadísticas</a></li>
      </ul>
    
    </div>
    <div id="contenido" align="center">
     
    
    <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong> Reincorporar a Personal Adm.</strong></h3>
    <h3 align="center"><strong>Seleccione al Trabajador</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	
	$fecha1= mktime(0,0,0,date("m"),date("d"),date("Y"));
	  
	  	$result=mysql_query("select * from n_operador where Estado='DESPEDIDO' and Descripcion='Administrativo'");
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
		$sql="select * from n_operador where Rut_Operador =".$_POST['nombre']." and Estado='DESPEDIDO'";
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    
    <table width="630" border="0" align="center">
      <tr>
        <td width="102">Nombre</td>
        <td width="215"><label>
          <input name="nombre1" type="text" id="nombre1" value="<? echo $registro[2];?>" size="25" readonly="readonly"/>
        </label></td>
        <td width="119">Rut
        <input name="rut1" type="hidden" id="rut1" value="<? echo $registro[1];?>"></td>
        <td width="176"><label>
          <input name="rut" type="text" id="rut" value="<? echo $registro[1];?>" size="25" maxlength="12" readonly="readonly"/>
        </label></td>
      </tr>
      <tr>
        <td>Dirección</td>
        <td colspan="3"><label>
          <input name="direccion" type="text" id="direccion" value="<? echo $registro[3];?>" size="80" maxlength="100"/>
        </label></td>
      </tr>
      <tr>
        <td>Fono Contacto</td>
        <td><label>
          <input name="telefono" type="text" id="telefono" value="<? echo $registro[4];?>" size="25" maxlength="25"/>
        </label></td>
        <td>Cargo</td>
        <td><input name="cargo" type="text" id="cargo" value="<? echo $registro[9];?>" size="25" /></td>
      </tr>
    </table>
    <table width="630" border="0" align="center">
      <tr>
        <td width="101" height="21">Estado</td>
        <td width="215"><input name="textfield3" type="text" id="textfield3" value="<? echo $registro[14];?>" size="25"></td>
        <td width="121">Fecha Ingreso</td>
        <td width="175"><input name="horario" type="text" id="horario" value="<? echo $registro[13];?>" size="25"></td>
        </tr>
    </table>
    <table width="630" border="0" align="center">
      <tr>
        <td width="193" align="right" bgcolor="#262626"><strong>Nick</strong></td>
        <td width="101" align="right" bgcolor="#262626"><strong>
          <label>
            <input name="nick2" type="text" id="nick" size="15" />
          </label>
        </strong></td>
        <td width="50" bgcolor="#262626"><strong>Clave</strong></td>
        <td width="268" bgcolor="#262626"><strong>
          <label>
            <input name="clave2" type="text" id="clave2" size="15" />
          </label>
        </strong></td>
      </tr>
    </table>
    <table width="382" border="0" align="center">
      <tr>
        <td width="70" align="center">&nbsp;</td>
        <td colspan="2"><input name="contratado" type="hidden" id="contratado" value="CONTRATADO">
          <input name="entrada" type="hidden" id="entrada" value="<? echo date("Y-m-d"); ?>">
          <input name="nick" type="hidden" value="<? echo "".$_SESSION['Nick'].""; ?>" />
          <input type="hidden" name="prueba" id="prueba" /></td>
        </tr>
      <tr>
        <td colspan="3" align="center"><strong>
          <label>
            <input type="checkbox" name="checkbox" id="checkbox" />
            </label>
          Aceptar Reincorporación</strong></td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><strong>Clave Permiso</strong></td>
        <td><input name="clave" type="password" id="clave" size="10"></td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td width="143"><div align="center">
          <input type="submit" name="button" id="button" value="Reincorporar">
          </div></td>
        <td width="155">
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
	
	if($_POST[button]=="Reincorporar")
	{
		$nombre=$_POST[nombre1];
		
		echo '<script>alert("Al Reincorporar un Trabajdor del SCS se denota que éste a sido Recontratado por la Empresa.");</script>';
		
	$sql="select * from usuarios where Clave_Permiso =".$_POST['Clave'];
		$respuesta=mysql_query($sql,$conexion);
		
		if($p_Clave_Permiso==$respuesta)
		{	
		
		if($_POST[checkbox]=="")
		{
			echo '<script>alert("No puede Realizar este proceso, si no Acepta la Reincorporación");</script>';
		}else{
			if($_POST[clave]=="")
			{
				echo '<script>alert("No puede Eliminar los Datos de '.$_POST[nombre1].', si no ingresa la CLAVE PERMISO.");</script>';
			}else{
				
			$sql="update n_operador set Fecha_Ingreso='".$_POST[entrada]."',Motivo='".$_POST[prueba]."',Eliminar_Usuario='".$_POST[nick   			]."',Estado='".$_POST[contratado]."',Fecha_Salida='".$_POST[prueba]."' WHERE Rut_Operador='".$_POST[rut1]."' ";
			$respuesta=mysql_query($sql,$conexion);
			
			$sql="update usuarios set Nick='".$_POST[nick2]."',Clave='".$_POST[clave2]."' WHERE Nombre='".$_POST[nombre1]."' ";
			echo '<script>alert("El Trabajador a sido Reincorporado a ASETRANS Ltda.");</script>';			
			$respuesta=mysql_query($sql,$conexion);
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