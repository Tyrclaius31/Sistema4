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
				<h3>Registro de Trabajadores</h3>
                 <p align="justify">Este formulario es para registrar un nuevo trabajador en la empresa, es necesario 			   				  				 llenar todos los campos del registro. Para registrar un trabajador deberá llenar los siguientes datos:</p>
            	<br>
                <b>Nombre:</b>  Nombre del trabajador.<br>
                <b>RUT:</b>  Cédula de Identidad del trabajador.<br>
                <b>Dirección:</b>  Dirección del trabajador.<br>
                <b>Teléfono Contacto:</b>  Teléfono del trabajador, prioritariamente Celular.<br>
                <b>Teléfono Contacto 2:</b>  Segundo teléfono de contacto del trabajador o telefono Fijo.<br>
                <b>Fecha Nacimiento:</b>  Fecha de nacimiento del trabajador Día, Mes, Año.<br>
                <b>Cargo:</b>  Tipo de cargo que desempeñara en la empresa.<br>
                <b>Licencia:</b>  Tipo de licencia de conducir, si el cargo es chofer.<br>
                <b>Descripción Trabajo:</b>  Lo que el empleado realizara en la empresa.<br>
                <b>Turno:</b>  Tipo de turno laboral Diurno o Nocturno.<br>
                <br>
                <p align="justify">Una vez llenado todos estos datos, Aceptamos el Ingreso, por último debe hacer clic en el botón   			  				<b>"Ingresar Trabajador"</b>, y listo!!!</p>
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
    
    <h3><center> Trabajadores</center></h3>
      <ul>
        <li><a href="trabajadores.registro.php" title="Registrar Nuevo Trabajador">-  Registrar</a></li>
        <li><a href="trabajadores.buscar.php" title="Buscar Datos de Trabajador"><b>-  Buscar</b></a></li>
        <li><a href="trabajadores.modificar.php" title="Modificar Datos de Trabajador">-  Modificar</a></li>
        <li><a href="trabajadores.eliminar.php" title="Eliminar a Trabajador (Despedido)">-  Eliminar</a></li>
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
    <div id="contenido">
    
    <form id="form1" name="form1" method="post" action="">
      <table width="571" border="0" align="center">
        <tr>
          <td colspan="4" align="center"><h3>Ingreso Trabajador</h3></td>
          </tr>
        <tr>
          <td width="124">Nombre*</td>
          <td width="154"><label>
            <input name="nombre" type="text" id="nombre" maxlength="45" />
            <script>document.form1.nombre.focus()</script>
            <script type="text/javascript">  var nombre = new LiveValidation('nombre'); nombre.add(Validate.Presence);</script> 
            </label></td>
          <td width="121">Rut*</td>
          <td width="154"><label>
            <input name="rut" type="text" id="rut" maxlength="12" />
              <script type="text/javascript">  var rut = new LiveValidation('rut'); rut.add(Validate.Presence);</script> 
            </label></td>
          </tr>
        <tr>
          <td>Dirección*</td>
          <td colspan="3"><label>
            <input name="direccion" type="text" id="direccion" size="65" maxlength="100" />
              <script type="text/javascript">  var direccion = new LiveValidation('direccion'); direccion.add(Validate.Presence);</script> 
            </label></td>
          </tr>
        <tr>
          <td>Telefono Contacto*</td>
          <td><label>
            <input name="tel1" type="text" id="tel1" />
              <script type="text/javascript">  var tel1 = new LiveValidation('tel1'); tel1.add(Validate.Presence);</script> 
            </label></td>
          <td>Telefono Contacto 2</td>
          <td><label>
            <input name="tel2" type="text" id="tel2" />
              <script type="text/javascript">  var tel2 = new LiveValidation('tel2'); tel2.add(Validate.Presence);</script> 
            </label></td>
          </tr>
        <tr>
          <td>Fecha Nacimiento*</td>
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
                <option>1990</option>
                <option>1989</option>
                <option>1988</option>
                <option>1987</option>
                <option>1986</option>
                <option>1985</option>
                <option>1984</option>
                <option>1983</option>
                <option>1982</option>
                <option>1981</option>
                <option>1980</option>
                <option>1979</option>
                <option>1978</option>
                <option>1977</option>
                <option>1976</option>
                <option>1975</option>
                <option>1974</option>
                <option>1973</option>
                <option>1972</option>
                <option>1971</option>
                <option>1970</option>
                <option>1969</option>
                <option>1968</option>
                <option>1967</option>
                <option>1966</option>
                <option>1965</option>
                <option>1964</option>
                <option>1963</option>
                <option>1962</option>
                <option>1961</option>
                <option>1960</option>
                <option>1959</option>
                <option>1958</option>
                <option>1957</option>
                <option>1956</option>
                <option>1955</option>
                <option>1954</option>
                <option>1953</option>
                <option>1952</option>
                <option>1951</option>
                <option>1950</option>
              </select>
            </label></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Cargo*</td>
          <td><input name="cargo" type="text" id="cargo" value="Chofer" readonly="readonly" /></td>
          <td>Licencia*</td>
          <td><input type="text" name="licencia" id="licencia" />
              <script type="text/javascript">  var licencia = new LiveValidation('licencia'); licencia.add(Validate.Presence);</script> 
          </td>
          </tr>
        <tr>
          <td>Descripción Trab.*</td>
          <td><input name="descripcion" type="text" id="descripcion" />
              <script type="text/javascript">  var descripcion = new LiveValidation('descripcion'); descripcion.add(Validate.Presence);</script> 
          </td>
          <td>Turno*</td>
          <td><select name="turno" id="turno">
            <option>DIURNO</option>
            <option>NOCTURNO</option>
          </select>
            <?php
	    include("conecta.php");
		$conexion=Conectarse();
	     
		?></td>
          </tr>
      </table>
    <table width="571" border="0" align="center">
      <tr>
        <td colspan="2"><input name="contratado" type="hidden" id="contratado" value="CONTRATADO" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <textarea name="textfield9" cols="50" rows="4" readonly="readonly" id="textfield9">Al ser el Trabajador Ingresado al Sistema 
de Control de Gestión "SCG" se denota que ya 
éste a sido previamente Contratado por la 
Empresa ASETRANS Ltda., y a ACEPTADO
los términos del Contrato y todo lo que
esto implíca. </textarea>
          </label>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Acepta Ingreso 
 			<script>var checkbox = new LiveValidation('checkbox'); checkbox.add( Validate.Acceptance ); </script> </label>
        </strong></div></td>
      </tr>
      <tr>
        <td width="227"><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Trabajador" />
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
		
	function validaRut($rut){
    if(strpos($rut,"-")==false){
        $RUT[0] = substr($rut, 0, -1);
        $RUT[1] = substr($rut, -1);
    }else{
        $RUT = explode("-", trim($rut));
    }
    $elRut = str_replace(".", "", trim($RUT[0]));
    $factor = 2;
    for($i = strlen($elRut)-1; $i >= 0; $i--):
        $factor = $factor > 7 ? 2 : $factor;
        $suma += $elRut{$i}*$factor++;
    endfor;
    $resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
   if($dv == trim(strtolower($RUT[1]))){
       return true;
   }else{
       return false;
   }
}

	
	if($_POST[button]=="Ingresar Trabajador")
	{
		if ($_POST[nombre]== "") {
    	echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
		}else{
			if ($_POST[rut]== "") {
    		echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
			}else{
    			if ($_POST[direccion]== "") {
    			echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
				}else{
     				if ($_POST[tel1]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[cargo]== "") {
    				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';
					}else{
					if ($_POST[descripcion]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';	
					}else{
					if ($_POST[turno]== "") {
					echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Ingreso al SCS "Sistema de Control de Servicios"");</script>';	
					}else{
					if(validaRut($_POST[rut])==true){
				
					$p_Id="";
					$p_Rut_Operador=$_POST[rut];
					$p_Nombre_Operador=$_POST[nombre];
					$p_Direccion_Operador=$_POST[direccion];
					$p_Fono_Contacto=$_POST[tel1];
					$p_Fono_Contacto2=$_POST[tel2];
					$p_Dia=$_POST[dia];
					$p_Mes=$_POST[mes];
					$p_Ano=$_POST[ano];
					$p_Cargo_Operador=$_POST[cargo];
					$p_Licencia=$_POST[licencia];
					$p_Descripcion=$_POST[Descripcion];
					$p_Turno_Operador=$_POST[turno];
					$p_Fecha_Ingreso=$_POST[fecha];
					$p_Estado=$_POST[contratado];
					$p_Motivo="";
					$p_Eliminar_Usuario="";
					$p_Fecha_Salida="";
					$p_Modificacion_Usuario="";
					$p_Fecha_Modificacion="";
		
		$sql="insert into n_operador values('".$p_Id."','".$p_Rut_Operador."','".$p_Nombre_Operador."','".         			 	 	       	$p_Direccion_Operador."','".$p_Fono_Contacto."','".$p_Fono_Contacto2."','".$p_Dia."','".$p_Mes."','".$p_Ano."','".				     	$p_Cargo_Operador."','".$p_Licencia."','".$p_Descripcion."','".$p_Turno_Operador."','".$p_Fecha_Ingreso."','".$p_Estado."','".      	$p_Motivo."','".$p_Eliminar_Usuario."','".$p_Fecha_Salida."','".$p_Modificacion_Usuario."','".$p_Fecha_Modificacion."')";
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("asetrans",$conexion);
		mysql_query($sql,$conexion);		
		
		if (@!mysql_query($sql)){ 
		echo '<script>alert("No puede realizar el Registro, pues el Rut '.$_POST[rut].', ya existe en la Base de Datos. No se puede Duplicar este Dato.");</script>';
		}else{
		echo '<script>alert("El Trabajador '.$p_Nombre_Operador.' ha sido Registardo en el Sistema.");</script>';
		}
		
		}else{
        echo '<script>alert("El Rut no es Valido, Ingrese Nuevamente");</script>';
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