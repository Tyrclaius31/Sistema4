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
				<h3>Registro de Camiones</h3>
                 <p align="justify">Este formulario es para registrar un nuevo Camión en la empresa, es necesario 			   				  				 llenar todos los campos del registro. Para registrar un Camión deberá llenar los siguientes datos:</p>
            	<br>
                <b>Marca:</b> Marca del camión.<br>
                <b>Modelo:</b> Modelo del Camión.<br>
                <b>Año:</b> Año del modelo del Camión.<br>
                <b>Tipo Camión:</b> Tipo del camión ej. Camión ¾ (tres cuartos).<br>
                <b>Tipo de Cabina:</b> Ej: Cabina simple.<br>
                <b>Color:</b> Color del Camión.<br>
                <b>Kilometraje:</b> Si el camión es usado, se ingresa el número de kilómetros.<br>
                <b>Tipo Motor:</b> Petrolero o Bencinero.<br>
                <b>Patente:</b> Patente del Camión.<br>
                <b>Nombre:</b> Es una designación propia de la empresa ej. Móvil 45<br>
                <b>Escribimos un comentario sobre el ingreso.</b>

                <br>
                <p align="justify">Una vez llenado todos estos datos, Aceptamos el Ingreso, por último debe hacer clic en el botón   			  				<b>"Ingresar Camión"</b>, y listo!!!</p>
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
    <h3 align="center"><strong>Ingreso Camión</strong></h3>
    <table width="540" border="0" align="center">
      <tr>
        <td width="109">Marca*</td>
        <td width="144"><label>
          <input name="marca" type="text" id="marca" maxlength="45" />
      <script>document.form1.marca.focus()</script>
      <script type="text/javascript">  var marca = new LiveValidation('marca'); marca.add(Validate.Presence);</script> 
        </label></td>
        <td width="106">Modelo*</td>
        <td width="163"><label>
          <input name="modelo" type="text" id="modelo" maxlength="12" />
      <script type="text/javascript">  var modelo = new LiveValidation('modelo'); modelo.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Año*</td>
        <td><label>
          <input type="text" name="ano" id="ano" />
      <script type="text/javascript">  var ano = new LiveValidation('ano'); ano.add(Validate.Presence);</script> 
        </label></td>
        <td>Tipo Camión*</td>
        <td><label>
          <input type="text" name="tipocamion" id="tipocamion" />
      <script type="text/javascript">  var tipocamion = new LiveValidation('tipocamion'); tipocamion.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>T. Cabina*</td>
        <td><label>
          <input type="text" name="cabina" id="cabina" />
      <script type="text/javascript">  var cabina = new LiveValidation('cabina'); cabina.add(Validate.Presence);</script> 
        </label></td>
        <td>Color*</td>
        <td><label>
          <input type="text" name="color" id="color" />
      <script type="text/javascript">  var color = new LiveValidation('color'); color.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Kilometraje*</td>
        <td><label>
          <input name="kilometraje" type="text" id="kilometraje" />
          <script> var kilometraje = new LiveValidation('kilometraje'); kilometraje.add( Validate.Numericality); kilometraje.add(Validate.Presence);</script>
        </label></td>
        <td>Tipo Motor*</td>
        <td><label>
          <input name="tipomotor" type="text" id="tipomotor" />
      <script type="text/javascript">  var tipomotor = new LiveValidation('tipomotor'); tipomotor.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#333333">Patente*</td>
        <td bgcolor="#333333"><label>
          <input type="text" name="patente" id="patente" />
      <script type="text/javascript">  var patente = new LiveValidation('patente'); patente.add(Validate.Presence);</script> 
        </label></td>
        <td bgcolor="#333333">Nombre*</td>
        <td bgcolor="#333333"><label>
          <input type="text" name="nombre" id="nombre" />
      <script type="text/javascript">  var nombre = new LiveValidation('nombre'); nombre.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td align="left" valign="top">Comentario</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" align="center" valign="top"><label>
            <textarea name="comentario" id="comentario" cols="37" rows="5"></textarea>
      <script type="text/javascript">  var comentario = new LiveValidation('comentario'); comentario.add(Validate.Presence);</script> 
            <?php
	    include("conecta.php");
		$conexion=Conectarse();
	     
		?>
        </label></td>
        </tr>
    </table>
    <table width="200" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Aceptar Ingreso de Camión
 			<script> var checkbox = new LiveValidation('checkbox'); checkbox.add(Validate.Acceptance); </script> </label>
        </strong></div></td>
      </tr>
      <tr>
        <td><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Camión" />
        </div></td>
        <td><div align="center">
        <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
        </a>
        </div></td>
      </tr>
    </table>
    <?php
		//Funcion Fecha
				function fecha(){ $mes = date("n"); $mesArray = array( 1 => "01", 2 => "02", 3 => "03", 4 => "04", 5 => "05", 6 => "06", 7 => "07", 8 => "08", 9 => "09"                , 10 => "10"    , 11 => "11", 12 => "12" ); 
	            $semana = date("D");  
	            $mesReturn = $mesArray[$mes]; $semanaReturn = $semanaArray[$semana]; 
	            $dia = date("d"); $ano = date ("Y"); return $semanaReturn." ".$ano."-".$mesReturn."-".$dia; }
				
?>
    <input type="hidden" name="fecha" id="fecha" value="<?=fecha() ?>" />
    <input name="estado" type="hidden" id="estado" value="ACTIVO" />
    </form>


<?php
		
	if($_POST[button]=="Ingresar Camión")
	{
		if ($_POST[marca]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[modelo]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[ano]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
     				if ($_POST[tipocamion]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[cabina]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[color]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';	
					}else{
					if ($_POST[kilometraje]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
						if ($_POST[tipomotor]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
						if ($_POST[patente]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
						if ($_POST[nombre]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Registro del Camión");</script>';	
					}else{
							
					$p_Id="";
					$p_Marca=$_POST[marca];
					$p_Modelo=$_POST[modelo];
					$p_Ano=$_POST[ano];
					$p_Tipo=$_POST[tipocamion];
					$p_Cabina=$_POST[cabina];
					$p_Color=$_POST[color];
					$p_Kilometraje=$_POST[kilometraje];
					$p_Tipo_Motor=$_POST[tipomotor];
					$p_Traccion=$_POST[patente];
					$p_Nombre=$_POST[nombre];
					$p_Comentario=$_POST[comentario];
					$p_Fecha_Ingreso=$_POST[fecha];
					$p_Estado=$_POST[estado];
					$p_Motivo="";
					$p_Eliminar_Usuario="";
					$p_Fecha_Salida="";
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
					
					
					$sql="insert into camiones values('".$p_Id."','".$p_Marca."','".$p_Modelo."','".$p_Ano."','".$p_Tipo."','".   	     				$p_Cabina."','".$p_Color."','".$p_Kilometraje."','".$p_Tipo_Motor."','".$p_Traccion."','".$p_Nombre."','".           			$p_Comentario."','".$p_Fecha_Ingreso."','".$p_Estado."','".$p_Motivo."','".$p_Eliminar_Usuario."','".   			   					$p_Fecha_Salida."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
					$conexion=mysql_connect("localhost","root","");
					mysql_select_db("asetrans",$conexion);
					mysql_query($sql,$conexion);
					
					if (@!mysql_query($sql)){ 
					echo '<script>alert("No puede realizar el Registro, pues la Patente '.$_POST[patente].', ya existe en la Base de    				Datos. No se puede Duplicar este Dato.");</script>';
					}else{
					echo '<script>alert("El Camión '.$_POST[marca].' '.$_POST[modelo].' a sido Registrado Exitosamente.");</script>';

					}
					
					}
					}
					}
					}
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