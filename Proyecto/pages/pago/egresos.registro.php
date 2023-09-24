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
        <td width="47" align="center"><a href="../../index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir" />
        </a>
        <?php
		if($_POST[button]=="Salir")
		{
			session_destroy();
		}
		?>
        </td>
      </tr>
    </table>
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
    <div id="contenido">
    
    <form id="form1" name="form1" method="post" action="">
      <table width="571" border="0" align="center">
        <tr>
          <td colspan="4" align="center"><h3>Registro de Egresos</h3></td>
          </tr>
        <tr>
          <td width="124">N° Boleta/Factura</td>
          <td><label>
            <input name="boleta" type="text" id="boleta" size="15" />
            <script>document.form1.boleta.focus()</script>
          <script> var boleta = new LiveValidation('boleta'); boleta.add( Validate.Numericality, { onlyInteger: true} ); boleta.add(Validate.Presence);</script>

          </label></td>
          <td>Razón*</td>
          <td><input name="razon" type="text" id="razon" size="23" maxlength="100" /></td>
                <script type="text/javascript">  var razon = new LiveValidation('razon'); razon.add(Validate.Presence);</script> 

          </tr>
        <tr>
          <td valign="top">Descripción*</td>
          <td colspan="3"><label>
            <textarea name="descripcion" id="descripcion" cols="50" rows="5"></textarea>
            <script type="text/javascript">  var descripcion = new LiveValidation('descripcion'); descripcion.add(Validate.Presence);</script> 
          </label></td>
          </tr>
        <tr>
          <td>Fecha del Egreso*</td>
          <td colspan="2"><label>
            <select name="dia" id="dia">
              <option selected="selected">Dia:</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              </select>
            </label>
            <label>
              <select name="mes" id="mes">
                <option selected="selected">Mes:</option>
                <option value="01">Enero</option>
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
              </label>
            <label>
              <select name="ano" id="ano">
                <option selected="selected">Año:</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
              </select>
            </label></td>
          <td width="189">&nbsp;</td>
        </tr>
        <tr>
          <td>Valor*</td>
          <td width="154"><input name="valor" type="text" id="valor" size="15" />
          <script> var valor = new LiveValidation('valor'); valor.add( Validate.Numericality, { onlyInteger: true} ); valor.add(Validate.Presence);</script>
          </td>
          <td width="86">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table>
    <table width="571" border="0" align="center">
      <tr>
        <td colspan="2"><?php
	    include("conecta.php");
		$conexion=Conectarse();
	     
		?></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Acepta Registro 
 			<script> var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
            </label>
          </strong></div></td>
      </tr>
      <tr>
        <td width="227" align="right"><div align="center">
          <input type="submit" name="button" id="button" value="Registrar Egreso" />
        </div></td>
        <td width="233"><div align="center">
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
	            $dia = date("d"); $año = date ("Y"); return $semanaReturn." ".$año."-".$mesReturn."-".$dia; }
				
?>
    <input type="hidden" name="fecha" id="fecha" value="<?=fecha() ?>" />
  </form>
    <?php
	if($_POST[button]=="Registrar Egreso")
	{
		if ($_POST[razon]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[descripcion]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[valor]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
					if ($_POST[checkbox]== "")
					{
					echo '<script>alert("Debe Aceptar en Registro del Egreso.");</script>';
					}else{
     								
					$p_N_Boleta=$_POST[boleta];
					$p_Fecha_Ingreso=$_POST[fecha];
					$p_Dia=$_POST[dia];
					$p_Mes=$_POST[mes];
					$p_Ano=$_POST[ano];
					$p_Razon=$_POST[razon];
					$p_Descripcion=$_POST[descripcion];
					$p_Costo=$_POST[valor];
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into egresos values('".$p_N_Boleta."','".$p_Fecha_Ingreso."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".				     	$p_Razon."','".$p_Descripcion."','".$p_Costo."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);
		
					if (@!mysql_query($sql)){ 
					echo '<script>alert("No puede realizar el Registro, pues la Boleta/Factura '.$_POST[boleta].', ya existe en la      				Base de Datos. No se puede Duplicar este Dato.");</script>';
					}else{
					echo '<script>alert("La Boleta/Factura N°'.$p_N_Boleta.' ha sido Registrada en el Sistema.");</script>';
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