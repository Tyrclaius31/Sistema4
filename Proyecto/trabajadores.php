<?
 	session_start("Id");
    if (!(session_is_registered("Id")))
    {
      session_unset();
      session_destroy();
	  echo '<SCRIPT>alert("No se ha iniciado Session, Favor Registrarse.");
    	location.href=("index.php");</SCRIPT>';
      exit;
    }  
	
	$fecha1= mktime(0,0,0,date("m"),date("d"),date("Y"));
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asetrans - Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<!--GALERIA-->

<script type="text/javascript" src="css/js/jquery.min.js" ></script> 
<script type="text/javascript" src="css/js/jquery.ui-min.js" ></script> 
<script type="text/javascript"> 
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 15000, true);
	});
</script> 

<script>
function getMensaje(){
var aFrases=new Array();
aFrases[0]="Dé un apoyo y crédito sincero a los demás para contribuir a un proyecto. Céntrese en soluciones, y abóquese a las situaciones problemáticas como una oportunidad para crecer y aprender.";
aFrases[1]="No abuse de los recreos, las horas del almuerzo, la licencia por enfermedad y otros de los privilegios proporcionados por su empleador. Sea conservador al usar los recursos de la compañía.";
aFrases[2]="Llegar temprano al trabajo, y quedarse hasta tarde en caso de necesitar finalizar un trabajo, es algo que se valora mucho. Termine todas sus asignaciones a tiempo.";
aFrases[3]="Si se presenta un problema inesperado que impide que usted acabe una tarea o un proyecto, hable con la gente afectada. Su jefe y sus compañeros de trabajo apreciarán su sinceridad.";
aFrases[4]="Haga un esfuerzo para entender a su ambiente, a su empleador y a sus compañeros de trabajo. Sea tolerante con los otros y sus formas de vida.";
aFrases[5]="Muestre respeto por los demás y por su empleador, siendo consciente de las actitudes y hábitos personales que pueden llegar a molestarlos, como pueden ser mascar chicle, fumar, hablar mucho, o hacer llamadas telefónicas personales.";
aFrases[6]="Tómese un tiempo para escuchar a los demás y para ofrecer su ayuda cuando sea apropiado. Intente insertarse en todos los grupos. Acepte la crítica constructiva de sus pares.";
aFrases[7]="Hacer simplemente lo que la compañía espera de usted no es suficiente. Fije por separado nuevos y mayores objetivos para su trabajo.";
aFrases[8]="Busque maneras de hacer las tareas del trabajo más eficientemente, de modo que ambos, usted y sus compañeros de trabajo, sean más productivos.";
aFrases[9]="Aprenda todo lo posible sobre su trabajo y cómo sus responsabilidades contribuyen a la productividad total de la empresa. Ofrézcase voluntariamente para ayudar y enseñar a otros.";
return(aFrases[Math.floor(Math.random() * aFrases.length)]);
}
</script>
</head>
<body>
<div id="apDiv8">

<div id="featured" > 
		  <ul class="ui-tabs-nav"> 
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/image1-small.jpg" alt="" /><span>Ejercicios Ergonómicos</span></a></li> 
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/image3-small.jpg" alt="" /><span>Estadísticas</span></a></li> 
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/image4-small.jpg" alt="" /><span>Sentarse Correctamente</span></a></li> 
			
	      </ul> 
 
	    <!-- First Content --> 
	    <div id="fragment-1" class="ui-tabs-panel" style=""> 
			<img src="images/image1.jpg" width="250" height="130" alt="" /> 
			 <div class="info" > 
				<h2><a href="#" >Ejercicios de Ergonomía</a></h2> 
				<p>Ejercicios Practicos para evitar lesiones o acciedented en el trabajo.</p> 
			 </div> 
	    </div> 
  
	    <!-- Third Content --> 
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style=""> 
			<img src="images/image3.jpg" width="250" height="130" alt="" /> 
			 <div class="info" > 
				<h2><a href="#" >Estadísticas</a></h2> 
				<p>Sólo para el Administrador. Vé el Crecimiento Anual de la empresa.</p> 
	         </div> 
	    </div> 
 
	    <!-- Fourth Content --> 
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style=""> 
			<img src="images/image4.jpg" width="250" height="130" alt="" /> 
			 <div class="info" > 
				<h2><a href="#" >Sentarse Correctamente</a></h2> 
				<p>Evita lesiones lumbares. Una buena Postura, mejorará tu salud.</p> 
	         </div> 
	    </div> 
		
		
 
		</div> 
	</div> 

<div id="apDiv9">
<b>Concejos para el éxito en el Trabajo</b><br />
<p align="justify"><script>
document.write(getMensaje());
</script></p>

</div>
</div>


<div id="contenedorgeneral">
  <div id="menugeneral">
    <ul>
       <li><a href="principal.php" title="">Home</a></li>
      <li><a href="trabajadores.php" title="Categoria SudMenu 'Trabajadores'">Trabajadores</a></li>
      <li><a href="camiones.php" title="Categoria SudMenu 'Camiones'">Camiones</a></li>
      <li><a href="guias.php" title="Categoria SudMenu 'Guías'">Guías</a></li>
      <li><a href="produccion.php" title="Categoria SudMenu 'Producción'">Producción</a></li>
      <li><a href="petroleo.php" title="Categoria SudMenu 'Petróleo'">Petróleo</a></li>
      <li><a href="pago.php" title="Categoria SudMenu 'Liquidaciones y Anticipos'">Liquidaciones</a></li>
      <li><a href="egresos.php" title="Categoria SudMenu 'Pago de Cuentas'">Egresos</a></li>
	<? if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){  ?>
      <li><a href="administracion.php" title="Administración del Sitio">Administración</a></li>
	<? } ?>    </ul>
  </div>
<div id="usuario">
    <table width="315" border="0" align="center">
      <tr>
        <td width="182">Usuario: <? echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
        <td width="72" align="center"><a href="configurar.php">Configurar</a></td>
        <td width="47" align="center"><a href="index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir" /></a>
        </td>
      </tr>
    </table>
    <?php
	if($_POST['button']=="Salir")
		{
		session_destroy();
			
	?>
		<script type="text/javascript">
		window.location="index.php";
		</script>
    <?
		}
	?>
	</div>
	<div id="animacion">
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="595" height="95">
      <param name="movie" value="asetrans.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="7.0.70.0" />
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="asetrans.swf" width="595" height="95">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="7.0.70.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
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
        <li><a href="pages/trabajadores/trabajadores.registro.php" title="Registrar Nuevo Trabajador">- Registrar</a></li>
        <li><a href="pages/trabajadores/trabajadores.buscar.php" title="Buscar Datos de Trabajador"><b>- Buscar</b></a></li>
        <li><a href="pages/trabajadores/trabajadores.modificar.php" title="Modificar Datos de Trabajador">- Modificar</a></li>
        <li><a href="pages/trabajadores/trabajadores.eliminar.php" title="Eliminar a Trabajador (Despedido)">- Eliminar</a></li>
       	<? if($_SESSION['Cargo']=='SECRETARIA' or $_SESSION['Cargo']=='Secretaria'){  ?>
        <li><a href="pages/trabajadores/trabajadores.listar.php" title="Listar Información de los Trabajadores">- Listar Trab.</a></li>
        <? } 
       	if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){  ?>
        <li><a href="pages/trabajadores/trabajadores.listaradm.php" title="Listar Información de los Trabajadores">- Listar Trab.</a></li>
        <li><a href="pages/trabajadores/trabajadores.eliminados.php" title="Trabajadores Eliminados">- Eliminados</a></li>
        <li><a href="pages/trabajadores/trabajadores.reincorporacion.php" title="Reincorporar Trabajador">- Reincorporación</a></li>
		<? } ?>
      </ul>
    
    </div>
    
    <div id="contenido"></div>
  </div>
  <div id="cuerporight">
    <div id="atajos">
    
    <ul>
        <li><a href="pages/trabajadores/trabajadores.registro.php" title="Registrar Nuevo Trabajador">- Registro Trabajador</a></li>
        <li><a href="pages/trabajadores/trabajadores.modificar.php" title="Modificar Datos del Trabajador">- Modificar Trabajador</a></li>
        <li><a href="#" title="Ingresar Nueva Guía de Petróleo">- Ingreso Petróleo</a></li>
        <li><a href="#" title="Ingreso Guía de Producción">- Ingreso Guías</a></li>
        <li><a href="http://www.google.com/calendar" title="Calendario de Notas" target="_blank">- Calendario/Agenda On-line</a></li>
    </ul>
    
    </div>
    <div id="links">
    <ul>
    
    <li><a href="http://www.arauco.cl/default.asp" target="_blank" title="www.Arauco.cl">- Arauco.cl</a></li>
    <li><a href="http://www.kaufmann.cl" target="_blank" title="www.Kaufmann.cl">- Kaufmann.cl</a></li>
    <li><a href="http://www.chileautos.cl" target="_blank" title="www.Chileautos.cl">- Chileautos.cl</a></li>
     <li><a href="http://www.sii.cl" target="_blank" title="www.Sii.cl">- Sii.cl</a></li>
    <li><a href="http://www.hotmail.com" target="_blank" title="www.Hotmail.com">- Hotmail.cl</a></li>
    
    
    </ul>
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