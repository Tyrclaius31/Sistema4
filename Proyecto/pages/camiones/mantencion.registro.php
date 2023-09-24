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
				<h3>Registro de Mantención</h3>
                 <p align="justify">Este formulario es para registrar la mantención realizada a un Camión, es necesario 			   				  llenar todos los campos del registro. Para esto, deberá llenar los siguientes datos:</p><br>
                <p align="justify">Primero seleccionamos la patente y el nombre del camión, luego la fecha de la mantención (Día, Mes y Año). Después Comentamos la mantención que fue realizada (Descripción de lo que se le hizo al camión). Aceptamos el ingreso de la mantención, presionamos el botón <b>"Ingresar Mantención"</b>, y listo!!!</p>
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
    <h3 align="center"><strong>Ingreso de Mantención</strong></h3>
    <table width="600" border="0" align="center">
      <tr>
        <td width="77">Camión*</td>
        <td width="175">
		<?php
	    include("conecta.php");
		$conexion=Conectarse();
	     		
		  $result=mysql_query("select * from asignacion_camiones where Estado='ACTIVO'");
		if ($row = mysql_fetch_array($result)){ 
			echo '<select name="nombre1" id="select">';
			do {
       			echo '<option value='.$row["Patente_Ca"].'>'.$row["Patente_Ca"].' - '.$row["Nombre_Ca"].'</option>';
			} while ($row = mysql_fetch_array($result)); 
			//echo '<option>'.'Todas'.'</option>';
			echo '</select>';
		}
		  
		  ?>
      <script>document.form1.nombre1.focus()</script>
          </td>
        <td width="64">Fecha*</td>
        <td width="266"><label>
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
      </tr>
      <tr>
        <td align="left" valign="top">Comentario</td>
        <td colspan="3" align="left" valign="top"><textarea name="comentario" id="comentario" cols="45" rows="6"></textarea>
      <script type="text/javascript">  var comentario = new LiveValidation('comentario'); comentario.add(Validate.Presence);</script> 
        </td>
        </tr>
      <tr>
        <td colspan="4" align="center" valign="top"><label>
        </label></td>
        </tr>
    </table>
    <table width="200" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center"><strong>
          <label>
            <input name="checkbox" type="checkbox" id="checkbox" />
            Aceptar Ingreso</label>
        </strong></div></td>
      </tr>
      <tr>
        <td><div align="center">
          <input type="submit" name="button" id="button" value="Ingresar Mantención" />
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
		
	if($_POST[button]=="Ingresar Mantención")
	{
			if ($_POST[comentario]== "") {
				echo '<script>alert("Debe Completar todos los Campos para el Registro");</script>';		
					}else{
     				if ($_POST[checkbox]== "") {
					echo '<script>alert("Debe Aceptar el Registro de la Mantención");</script>';	
					}else{
							
					$p_Id="";
					$p_Patente_Ca=$_POST[nombre1];
					$p_Descripcion=$_POST[comentario];
					$p_Dia=$_POST[dia];
					$p_Mes=$_POST[mes];
					$p_Ano=$_POST[ano];
					$p_Fecha_Ingreso=$_POST[fecha];
									
					$sql="insert into mantencion values('".$p_Id."','".$p_Patente_Ca."','".$p_Descripcion."','".$p_Dia."','".$p_Mes.        			"','".$p_Ano."','".$p_Fecha_Ingreso."')";
					echo '<script>alert("La Manteción al Camion con la Patente '.$_POST[nombre1].', a sido Registrada                  	Exitosamente.");</script>';
					$conexion=mysql_connect("localhost","root","");
					mysql_select_db("asetrans",$conexion);
					mysql_query($sql,$conexion);
					
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