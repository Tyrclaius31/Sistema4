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
<!-- IMPRIMIR-->

		<style type="text/css">
		@media print {
			#contenido { width:810px; font-size: 18px; display:block}
			#menugeneral {display:none}
			#apDiv3 { visibility:visible;}
			#animacion {display:none}
			#manulateral {display:none}
			#usuario {display:none}
			#tira {display:none}
			#apDiv4 {visibility:visible; width:810px; font-size: 18px; display:block}
}
        </style>
<script>
function impre(num) {
	document.getElementById(num).className="apDiv4";
	print();
	document.getElementById(num).className="contenido";
	document.getElementById(num).className="menugeneral";
	document.getElementById(num).className="animacion";
	document.getElementById(num).className="manulateral";
	document.getElementById(num).className="usuario";
	document.getElementById(num).className="tira";
}
</script>
</head>
</head>
<body>

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
    
    <h3><center> Liquidaciones</center></h3>
      <ul>
        <li><a href="liquidacion.chofer.php" title="Liquidaciones Chofer">- Liquid. Chofer</a></li>
        <li><a href="liquidacion.vitacora.php" title="Vitácora de Liquidaciones">- Bitácora Liquid.</a></li>
        <li><a href="liquidacion.buscar.php" title="Buscar Liquidación">- Buscar Liquid.</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="anticipo.registro.php" title="Registrar Anticipo">- Reg. Anticipo</a></li>
        <? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="anticipo.listar.php" title="Listar Anticipos">- Listar Registro</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="anticipo.listaradm.php" title="Listar Anticipos">- Listar Registro</a></li>
		<? } ?>
        <li><a href="anticipo.listar.anual.php" title="Listar Anticipos  anuales">- Registro Anual</a></li>
      </ul>
     
    </div>
    <div id="contenido" align="center">
    

  <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong>Registro Anticipo</strong></h3>
    
    <div id="tira">
    <h3 align="center"><strong>Seleccione al Trabajador</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from asignacion_camiones where Estado='ACTIVO'");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="nombre" id="select">';
			do {
       			echo '<option value='.$row["Id"].'>'.$row["Nombre_Tra"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
	?>
            <script>document.form1.nombre.focus()</script>
      <label>
        <input type="submit" name="button2" id="button2" value="Buscar"/>
        <br />
      </label></h3>
    </div>
    <?php
	
	if($_POST[button2]=="Buscar")
	{
		$sql="select * from asignacion_camiones where Id =".$_POST['nombre'];
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    <div id="tira">
    
    <table width="630" border="0" align="center">
      <tr>
        <td width="127">Nombre</td>
        <td width="166"><label>
          <input name="nombre1" type="text" id="nombre1" value="<? echo $registro[8];?>" size="25" readonly="readonly"/>
        </label></td>
        <td width="141">Rut
        <input name="rut1" type="hidden" id="rut1" value="<? echo $registro[7];?>"></td>
        <td width="178"><label>
          <input name="rut" type="text" id="rut" value="<? echo $registro[7];?>" size="25" maxlength="12" readonly="readonly"/>
        </label></td>
      </tr>
      <tr>
        <td>Camión a Cargo</td>
        <td><input name="camion_cargo" type="text" id="camion_cargo" value="<? echo $registro[3]; echo ' - '; echo $registro[4];?>" size="25" maxlength="50" readonly="readonly"/></td>
        <td>Patente</td>
        <td><input name="pat" type="text" id="pat" value="<? echo $registro[6];?>" size="25" maxlength="25" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Nombre Camion</td>
        <td><label>
          <input name="nombre_camion" type="text" id="nombre_camion" value="<? echo $registro[5];?>" size="25" readonly="readonly" />
        </label></td>
        <td>Fecha Asignación</td>
        <td><input name="fecha_asig" type="text" id="fecha_asig" value="<? echo $registro[9];?>" size="25" readonly="readonly" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Monto Anticipo</strong></td>
        <td><input name="monto" type="text" id="monto" size="25" />
          <script> var monto = new LiveValidation('monto'); monto.add( Validate.Numericality, { onlyInteger: true});  monto.add(Validate.Presence);</script>
        </td>
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
        <td colspan="2" align="center">
          
          <a href="#" onClick="impre('apDiv4');return false">Imprimir<img src="../../images/impresora.jpg" width="16" height="15" /></a>
          
        </td>
        </tr>
      <tr>
        <td align="center"><label>
          <input type="submit" name="button" id="button" value="Registrar">
          </label></td>
        <td><div align="center">
        <a href="javascript:location.reload()">
          <input type="submit" name="button" id="button" value="Limpiar" />
        </a>
          </div></td>
        </tr>
    </table>
    </div>
  </form>
  
  <?
// Obtenemos y traducimos el nombre del día
$dia=date("l");
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Miércoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="Sabado";
if ($dia=="Sunday") $dia="Domingo";

// Obtenemos el número del día
$dia2=date("d");

// Obtenemos y traducimos el nombre del mes
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";

// Obtenemos el año
$ano=date("Y");

// Imprimimos la fecha completa
//echo "$dia $dia2 de $mes de $ano";
?> 
  
    <div id="apDiv3"><img src="../../images/logo.png" alt="" width="227" height="71" /></div>
  
<div id="apDiv4">
  <p align="justify">Yo <? echo $registro[8];?>, RUT <? echo $registro[7];?>, teniendo a cargo el Camión <? echo $registro[3]; echo ' - '; echo $registro[4];?>, Patente <? echo $registro[6];?>, recibí conforme la suma de $_____________, el día <? echo "$dia $dia2 de $mes del $ano";?>, como Anticipo por parte de la Empresa Asetrans Ltda.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="549" border="0">
    <tr>
      <td colspan="3" align="right">_______________________</td>
    </tr>
    <tr>
      <td width="342" align="right">&nbsp;</td>
      <td width="1" align="right">&nbsp;</td>
      <td width="192" align="center"><b><? echo $registro[8];?></b></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="right">&nbsp;</td>
      <td align="center"><b><? echo $registro[7];?></b></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
  <?php
 		}
	}
	
	
	if($_POST[button]=="Limpiar")
	{
		
		
	}
	
	if($_POST[button]=="Registrar")
	{
		$monto=$_POST[monto];
		
	$sql="select * from usuarios where Clave_Permiso =".$_POST['clave'];
		$respuesta=mysql_query($sql,$conexion);
		
		if($p_Clave_Permiso==$respuesta)
		{	
		
		if($_POST[monto]=="")
		{
			echo '<script>alert("No puede Modificar estos datos si existen campos de texto en blanco.");</script>';
		}else{
			if($_POST[clave]=="")
			{
			echo '<script>alert("No puede Registrar el Anticipo, si no ingresa la CLAVE PERMISO.");</script>';
			}else{
					$p_Id="";
					$p_Rut_Tra=$_POST[rut];
					$p_Nombre_Tra=$_POST[nombre1];
					$p_Camion=$_POST[pat];
					$p_Mes=date("m");
					$p_Ano=date("Y");
					$p_Fecha=date("Y-m-d");
					$p_Monto=$_POST[monto];
				
					$sql="insert into anticipo values('".$p_Id."','".$p_Rut_Tra."','".$p_Nombre_Tra."','".         			 	 	      	     		$p_Camion."','".$p_Mes."','".$p_Ano."','".$p_Fecha."','".$p_Monto."')";	
					$conexion=mysql_connect("localhost","root","");
					mysql_select_db("asetrans",$conexion);
					mysql_query($sql,$conexion);
					
					$p_Id="";
					$p_Fecha_Ingreso=date("Y-m-d");
					$p_Dia=date("d");
					$p_Mes=date("m");
					$p_Ano=date("Y");
					$p_Razon="Anticipo";
					$p_Descripcion="Se le Dio Anticipo a ".$_POST[nombre1]."";
					$p_Costo=$_POST[monto];
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
					$sql2="insert into egresos values('".$p_Id."','".$p_Fecha_Ingreso."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".				     				$p_Razon."','".$p_Descripcion."','".$p_Costo."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
					echo '<script>alert("El Anticipo de $'.$p_Monto.' a '.$p_Nombre_Tra.', ha sido Registardo en el Sistema.");        			</script>';
					$conexion=mysql_connect("localhost","root","");
					mysql_select_db("asetrans",$conexion);
					mysql_query($sql2,$conexion);

							
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