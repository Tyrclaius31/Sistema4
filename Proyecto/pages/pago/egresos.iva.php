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
    <h3 align="center"><strong>Informe de Pago - Impuesto al Valor Agregado</strong>    </h3>
    <table width="376" border="0">
      <tr>
        <td width="95"><h4>Seleccione </h4></td>
        <td width="104"><select name="mes" id="mes">
          <option value="01" selected="selected">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
          </select>
          <script>document.form1.mes.focus()</script>
          </td>
        <td width="104"><select name="ano" id="ano">
          <option selected="selected">2010</option>
          <option>2011</option>
          <option>2012</option>
          <option>2013</option>
          </select></td>
        <td width="55"><label>
          <input type="submit" name="button2" id="button2" value="Buscar" />
          </label></td>
        </tr>
    </table>
    <h3 align="center"><strong> </strong>
      <?php
	include("conecta.php");
	$conexion=Conectarse();
	
	if($_POST[button2]=="Buscar")
	{
		$sql="select sum(Valor_Iva) from guia where Mes=".$_POST[mes]." and Ano=".$_POST[ano];
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
	?>
    </h3>
    <table width="267" border="0" align="center">
      <tr>
        <td width="127">Debito Fiscal</td>
        <td width="130"><input name="razon" type="text" disabled="disabled" id="razon" value="<? echo $registro[0];?>" size="15" maxlength="12"/>
        <?
		$debito=$registro[0];
		} 
		$sql="select sum(Valor_Iva) from egresos_iva where Mes=".$_POST[mes]." and Ano=".$_POST[ano];
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
			echo "";
			$registro=mysql_fetch_row($respuesta);
		?>
        </td>
        </tr>
      <tr>
        <td>Credito Fiscal</td>
        <td>     
          <input name="textfield3" type="text" disabled id="textfield3" value="<? echo $registro[0];?>" size="15" /></td>
        </tr>
      <tr>
        <td><strong>Total</strong></td>
        <td><label>
        <?
		$credito=$registro[0];
		}
			$pagar=$debito-$credito;
		?>
        
          <input name="textfield" type="text" disabled="disabled" id="textfield" value="<? echo $pagar;?>" size="15" />
        </label></td>
        </tr>
      <tr>
        <td colspan="2">
          
          <?
	if($pagar<0){
		$remanente=$pagar*-1;
	?>
          <p align="center"><b>Este Mes hay un REMANENTE de $<? echo $remanente;?></b></p>
          <?
	}
	?>
          
          </td>
      </tr>
    </table>
    <table width="200" border="0" align="center">
      <tr>
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