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

<!-- CALENDARIOS -->

<link rel="STYLESHEET" type="text/css" href="../../css/dhtmlxcalendar.css">
<script>
window.dhx_globalImgPath = "../../images/imgs/";
</script>
<script type="text/javascript" src="../../css/js/dhtmlxcommon.js"></script>
<script type="text/javascript" src="../../css/js/dhtmlxcalendar.js"></script>
<script>
var mCal;
window.onload = function() {
    mCal = new dhtmlxCalendarObject(['pagar']);
}
</script>

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
				<h3>Registro de Guía de Petróleo</h3>
                 <p align="justify">Este formulario nos permite ingresar al sistema las guías de petróleo al momento de su adquisición, es necesario llenar todos los campos del registro. Para registrar una Guía deberá llenar los siguientes datos:</p>
            	<br>
                <b>Nº Guía:</b> Numero identificador de la guía.<br>
                <b>Rut Proveedor:</b> Numero identificador de la empresa proveedora de petróleo.<br>
                <b>Proveedor:</b> Nombre de la empresa proveedora de petróleo.<br>
                <b>Lugar o Recinto:</b> Lugar de carga de petróleo.<br>
                <b>Nombre:</b> Nombre de la persona que retira el petróleo.<br>
                <b>Rut:</b> Rut de la persona que retira el petróleo.<br>
                <b>Cantidad:</b> Cantidad de litros de petróleo.<br>
                <b>Detalle:</b> Detalle del petróleo.<br>
                <b>Valor Unitario:</b> Valor sin I.V.A del petróleo.<br>
                <b>Valor Total:</b> Valor más el I.V.A del petróleo.<br>
                <br>
                <p align="justify">Luego de esto ingresamos la fecha a pagar la guía, Aceptamos el ingreso y presionamos el botón   			  				<b>"Ingresar Guía"</b>, y listo!!!</p>
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
    
    <h3><center> Petróleo</center></h3>
      <ul>
        <li><a href="petroleo.registro.php" title="Ingrear Guía de Petróleo">- Ingresar Guía</a></li>
        <li><a href="petroleo.buscar.php" title="Buscar Guía">- Buscar</a></li>
        <li><a href="petroleo.especifico.php" title="Informe Exacto de gasto entre fechas">- Infor. Especifico</a></li>
        <li><a href="petroleo.mensual.php" title="Informe Mensual de Guías">- Infor. Mensual</a></li>
        <li><a href="petroleo.anual.php" title="Informe Anual Petróleo">- Informe Anual</a></li>
      </ul>
    
    </div>
    <div id="contenido">
    
    <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong>Ingreso Guía Petróleo</strong></h3>
    <table width="540" border="0" align="center">
      <tr>
        <td width="109">N° Guía*</td>
        <td width="144"><label>
          <input name="guia" type="text" id="guia" maxlength="45" />
      	  <script>document.form1.guia.focus()</script>
          <script> var guia = new LiveValidation('guia'); guia.add( Validate.Numericality, { onlyInteger: true}); guia.add(Validate.Presence);</script>
        </label></td>
        <td width="106">Rut Proveedor*</td>
        <td width="163"><label>
          <input name="rut1" type="text" id="rut1" maxlength="12" />
              <script type="text/javascript">  var rut1 = new LiveValidation('rut1'); rut1.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Proveedor*</td>
        <td colspan="3"><label>
          <input name="proveedor" type="text" id="proveedor" size="69" maxlength="100" />
              <script type="text/javascript">  var proveedor = new LiveValidation('proveedor'); proveedor.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Lugar o Recinto*</td>
        <td colspan="3"><label>
          <input name="lugar" type="text" id="lugar" size="69" maxlength="65">
              <script type="text/javascript">  var lugar = new LiveValidation('lugar'); lugar.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Nombre*</td>
        <td><label>
          <input name="nombre" type="text" id="nombre" />
              <script type="text/javascript">  var nombre = new LiveValidation('nombre'); nombre.add(Validate.Presence);</script> 
        </label></td>
        <td>Rut*</td>
        <td><label>
          <input name="rut2" type="text" id="rut2" />
              <script type="text/javascript">  var rut2 = new LiveValidation('rut2'); rut2.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td colspan="4" align="center"><?php
	    include("conecta.php");
		$conexion=Conectarse();
	     
		?>
          <p><strong>DETALLE DE COMPRA</strong></p></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><strong>Cantidad</strong></td>
        <td bgcolor="#CCCCCC"><strong>Detalle</strong></td>
        <td bgcolor="#CCCCCC"><strong>Valor Unitario</strong></td>
        <td bgcolor="#CCCCCC"><strong>Valor Total</strong></td>
      </tr>
      <tr>
        <td><label>
          <input name="cantidad" type="text" id="cantidad" size="15">
        </label></td>
        <td><label>
          <input name="detalle" type="text" id="detalle" size="20">
        </label></td>
        <td><label>
          <input name="valor" type="text" id="valor" size="15">
        </label></td>
        <td><label>
          <input name="total" type="text" id="total" size="20">
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="cantidad1" type="text" id="cantidad1" size="15">
        </label></td>
        <td><label>
          <input name="detalle1" type="text" id="detalle1" size="20">
        </label></td>
        <td><label>
          <input name="valor1" type="text" id="valor1" size="15">
        </label></td>
        <td><label>
          <input name="total1" type="text" id="total1" size="20">
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="cantidad2" type="text" id="cantidad2" size="15">
        </label></td>
        <td><label>
          <input name="detalle2" type="text" id="detalle2" size="20">
        </label></td>
        <td><label>
          <input name="valor2" type="text" id="valor2" size="15">
        </label></td>
        <td><label>
          <input name="total2" type="text" id="total2" size="20">
        </label></td>
      </tr>
      <tr>
        <td><label>
          <input name="cantidad3" type="text" id="cantidad3" size="15">
        </label></td>
        <td><label>
          <input name="detalle3" type="text" id="detalle3" size="20">
        </label></td>
        <td><label>
          <input name="valor3" type="text" id="valor3" size="15">
        </label></td>
        <td><label>
          <input name="total3" type="text" id="total3" size="20">
          <input name="impago" type="hidden" id="impago" value="IMPAGO" />
        </label></td>
      </tr>
    </table>
    <table width="428" border="0" align="center">
      <tr>
        <td width="76">Fecha a Pagar</td>
        <td width="181"><label>
          <input name="pagar" type="text" id="pagar" size="15" />
              <script type="text/javascript">  var pagar = new LiveValidation('pagar'); pagar.add(Validate.Presence);</script> 
        <img src="../../images/images.jpg" width="20" height="20" />
        </label></td>
        <td width="157"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Acepta Ingreso Guía
            <script>var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
        </strong></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Guía" />
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
  </form>


<?php
		
	if($_POST[button]=="Ingresar Guía")
	{
		if ($_POST[guia]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[rut1]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[proveedor]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
     				if ($_POST[lugar]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[nombre]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[rut2]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';	
					}else{
					if ($_POST[cantidad]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
					if ($_POST[pagar]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Ingreso al SCS "Sistema de Control de Servicios"");</script>';	
					}else{
									
					$p_Id="";
					$p_N_Guia=$_POST[guia];
					$p_Rut_Proveedor=$_POST[rut1];
					$p_Proveedor=$_POST[proveedor];
					$p_Lugar=$_POST[lugar];
					$p_Nombre_Retira=$_POST[nombre];
					$p_Rut_Retira=$_POST[rut2];
					$p_Cantidad=$_POST[cantidad];
					$p_Detalle=$_POST[detalle];
					$p_Valor_Unitario=$_POST[valor];
					$p_Valor_Total=$_POST[total];
					$p_Fecha=$_POST[fecha];
					$p_Dia=date(d);
					$p_Mes=date(m);
					$p_Ano=date(Y);
					$p_Fecha_a_Pagar=$_POST[pagar];
					$p_Estado="IMPAGO";
					$p_Fecha_Pago="";
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into petroleo values('".$p_Id."','".$p_N_Guia."','".$p_Rut_Proveedor."','".         			 	 	      	     	$p_Proveedor."','".$p_Lugar."','".$p_Nombre_Retira."','".$p_Rut_Retira."','".$p_Cantidad."','".$p_Detalle."','".	 	  		    	$p_Valor_Unitario."','".$p_Valor_Total."','".$p_Fecha."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".$p_Fecha_a_Pagar."','".			 		$p_Estado."','".$p_Fecha_Pago."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";	
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
		
		$sql1="insert into n_guia value('".$p_Id."','".$p_N_Guia."')";
		echo '<script>alert("La Guía de Petróleo N°'.$p_N_Guia.' a sido Registarda en el Sistema.");</script>';
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql1,$conexion);
		
		if($_POST[cantidad1]==""){}else{
			
					$p_Id="";
					$p_N_Guia=$_POST[guia];
					$p_Rut_Proveedor=$_POST[rut1];
					$p_Proveedor=$_POST[proveedor];
					$p_Lugar=$_POST[lugar];
					$p_Nombre_Retira=$_POST[nombre];
					$p_Rut_Retira=$_POST[rut2];
					$p_Cantidad=$_POST[cantidad1];
					$p_Detalle=$_POST[detalle1];
					$p_Valor_Unitario=$_POST[valor1];
					$p_Valor_Total=$_POST[total1];
					$p_Fecha=$_POST[fecha];
					$p_Dia=$dia;
					$p_Mes=$mesReturn;
					$p_Ano=$ano;
					$p_Fecha_a_Pagar=$_POST[pagar];
					$p_Estado="IMPAGO";
					$p_Fecha_Pago="";
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into petroleo values('".$p_Id."','".$p_N_Guia."','".$p_Rut_Proveedor."','".         			 	 	      	     	$p_Proveedor."','".$p_Lugar."','".$p_Nombre_Retira."','".$p_Rut_Retira."','".$p_Cantidad."','".$p_Detalle."','".	 	  		    	$p_Valor_Unitario."','".$p_Valor_Total."','".$p_Fecha."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".$p_Fecha_a_Pagar."','".$p_Estado."','".        $p_Fecha_Pago."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
			
			}
			
			if($_POST[cantidad2]==""){}else{
			
					$p_Id="";
					$p_N_Guia=$_POST[guia];
					$p_Rut_Proveedor=$_POST[rut1];
					$p_Proveedor=$_POST[proveedor];
					$p_Lugar=$_POST[lugar];
					$p_Nombre_Retira=$_POST[nombre];
					$p_Rut_Retira=$_POST[rut2];
					$p_Cantidad=$_POST[cantidad2];
					$p_Detalle=$_POST[detalle2];
					$p_Valor_Unitario=$_POST[valor2];
					$p_Valor_Total=$_POST[total2];
					$p_Fecha=$_POST[fecha];
					$p_Dia=$dia;
					$p_Mes=$mesReturn;
					$p_Ano=$ano;
					$p_Fecha_a_Pagar=$_POST[pagar];
					$p_Estado="IMPAGO";
					$p_Fecha_Pago="";
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into petroleo values('".$p_Id."','".$p_N_Guia."','".$p_Rut_Proveedor."','".         			 	 	      	     	$p_Proveedor."','".$p_Lugar."','".$p_Nombre_Retira."','".$p_Rut_Retira."','".$p_Cantidad."','".$p_Detalle."','".	 	  		    	$p_Valor_Unitario."','".$p_Valor_Total."','".$p_Fecha."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".$p_Fecha_a_Pagar."','".$p_Estado."','".           		  		$p_Fecha_Pago."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
			
			}
		
		if($_POST[cantidad3]==""){}else{
			
					$p_Id="";
					$p_N_Guia=$_POST[guia];
					$p_Rut_Proveedor=$_POST[rut1];
					$p_Proveedor=$_POST[proveedor];
					$p_Lugar=$_POST[lugar];
					$p_Nombre_Retira=$_POST[nombre];
					$p_Rut_Retira=$_POST[rut2];
					$p_Cantidad=$_POST[cantidad3];
					$p_Detalle=$_POST[detalle3];
					$p_Valor_Unitario=$_POST[valor3];
					$p_Valor_Total=$_POST[total3];
					$p_Fecha=$_POST[fecha];
					$p_Dia=$dia;
					$p_Mes=$mesReturn;
					$p_Ano=$ano;		
					$p_Fecha_a_Pagar=$_POST[pagar];
					$p_Estado="IMPAGO";
					$p_Fecha_Pago="";
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into petroleo values('".$p_Id."','".$p_N_Guia."','".$p_Rut_Proveedor."','".         			 	 	      	     	$p_Proveedor."','".$p_Lugar."','".$p_Nombre_Retira."','".$p_Rut_Retira."','".$p_Cantidad."','".$p_Detalle."','".	 	  		    	$p_Valor_Unitario."','".$p_Valor_Total."','".$p_Fecha."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".$p_Fecha_a_Pagar."','".$p_Estado."','".        $p_Fecha_Pago."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
			
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