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
    
     <h3><center>Egresos s/iva</center></h3>
      <ul>
        <li><a href="egresos.registro.php" title="Registrar Nuevo Egreso">- Reg. Egresos $$</a></li>
        <? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="egresos.listar.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="egresos.modificar.php" title="Modificar Registros">- Mod. Registro</a></li>
        <li><a href="egresos.listaradm.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
		<? } ?>
        <li><a href="egresos.listar.anual.php" title="Listar Datos de Egresos Anuales">- Registro Anual</a></li>
        <li><a href="#" title="">______________</a></li>
      </ul>
      
      <h3><center>Egresos c/iva</center></h3>
      <ul>
        <li><a href="egresos.registro.iva.php" title="Registrar Nuevo Egreso">- Reg. Egresos $$</a></li>
        <? if($_SESSION[Cargo]=='SECRETARIA' or $_SESSION[Cargo]=='Secretaria' or $_SESSION[Cargo]=='secretaria'){  ?>
        <li><a href="egresos.listar.iva.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
        <? } 
       	if($_SESSION[Cargo]=='SUPERVISOR' or $_SESSION[Cargo]=='ADMINISTRADOR'){  ?>
        <li><a href="egresos.modificar.iva.php" title="Modificar Registros">- Mod. Registro</a></li>
        <li><a href="egresos.listaradm.iva.php" title="Listar Datos de Egresos Mensual">- Listar Registro</a></li>
		<? } ?>
        <li><a href="egresos.listar.anual.iva.php" title="Listar Datos de Egresos Anuales">- Registro Anual</a></li>
        <li><a href="#" title="">______________</a></li>
        <li><a href="egresos.petroleo.php" title="Pagar Petroleo">- Pagar Petróleo</a></li>
        <li><a href="egresos.iva.php" title="Pagar IVA">- Pagar IVA</a></li>
      </ul>
    
    </div>
    <div id="contenido" align="center">
    

  <form id="form1" name="form1" method="post" action="">
    <h3 align="center"><strong> Modificar Datos de Egresos</strong></h3>
    <h3 align="center"><strong>Seleccione N° Boleta/Factura</strong>
      
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	  
	  	$result=mysql_query("select * from egresos");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="boleta" id="select">';
			do {
       			echo '<option value='.$row["N_Boleta"].'>'.$row["N_Boleta"].'</option>';		  
			} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
		}
	   
	?>
      <script>document.form1.boleta.focus()</script>
      <label>
        <input type="submit" name="button2" id="button2" value="Buscar" />
        <br />
      </label>
      <?php
	
	if($_POST[button2]=="Buscar")
	{
		$sql="select * from egresos where N_Boleta =".$_POST['boleta'];
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    </h3>
    <table width="574" border="0" align="center">
      <tr>
        <td width="127">N° Boleta/Factura</td>
        <td width="130"><label>
          <input name="nboleta" type="text" disabled="disabled" id="nboleta" value="<? echo $registro[0];?>" size="15"/>
          <input name="boleta1" type="hidden" id="boleta1" value="<? echo $registro[0];?>" />
        </label></td>
        <td width="60">Razón        </td>
        <td width="239"><label>
          <input name="razon" type="text" id="razon" value="<? echo $registro[5];?>" size="25" maxlength="12"/>
                <script type="text/javascript">  var razon = new LiveValidation('razon'); razon.add(Validate.Presence);</script> 
        </label></td>
      </tr>
      <tr>
        <td>Descripción</td>
        <td colspan="3"><label>
          <textarea name="descripcion" id="descripcion" cols="45" rows="5"> <? echo $registro[6];?> </textarea>
          <script type="text/javascript">  var descripcion = new LiveValidation('descripcion'); descripcion.add(Validate.Presence);</script> 

        </label></td>
      </tr>
      <tr>
        <td>Costo</td>
        <td><input name="costo" type="text" id="costo" value="<? echo $registro[7];?>" size="15" maxlength="25"/>          
		<script> var costo = new LiveValidation('costo'); costo.add( Validate.Numericality, { onlyInteger: true} ); costo.add(Validate.Presence);</script>

        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Fecha Ingreso</td>
        <td><input name="textfield3" type="text" disabled id="textfield3" value="<? echo $registro[1];?>" size="15" /></td>
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
		
		if($_POST[razon]=="" or $_POST[descripcion]=="" or $_POST[costo]=="")
		{
			echo '<script>alert("No puede Modificar estos datos si existen campos de texto en blanco.");</script>';
		}else{
			if($_POST[clave]=="")
			{
				echo '<script>alert("No puede Modificar los datos, si no ingresa la CLAVE PERMISO.");</script>';
			}else{
				$sql="update egresos set Razon='".$_POST[razon]."',Descripcion='".$_POST[descripcion]."',Costo='".$_POST[costo].        		"',Modificacion_Usuario='".$_POST[nick]."',Fecha_Modificacion='".$_POST[modificar]."' WHERE N_Boleta='".$_POST[       			   				boleta1]."' ";
			
				$respuesta=mysql_query($sql,$conexion);
				echo '<script>alert("La Modificación se Realizó con éxito.");</script>';
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