<php?
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
	

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
require 'connect.php';

// Removing notes that are older than an hour:
mysqli_query($link,"DELETE FROM notes WHERE id>3 AND dt<SUBTIME(NOW(),'0 24:0:0')");


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asetrans - Home</title>
<link href="css/stylehome.css" rel="stylesheet" type="text/css" />
  	<script src="css/js/jquerytool.js" type="text/javascript"></script> 
  	<script src="css/js/maintool.js" type="text/javascript"></script>
  	<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css" /> 
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.2.6.css" media="screen" /> 
	<script type="text/javascript" src="css/js/jquery.min.js"></script> 
	<script type="text/javascript" src="css/js/jquery-ui.min.js"></script> 
	<script type="text/javascript" src="css/js/jquery.fancybox-1.2.6.pack.js"></script> 
	<script type="text/javascript" src="css/js/script.js"></script>
    <style type="text/css">
      #apDiv1 {
        position:absolute;
        left:867px;
        top:222px;
        width:170px;
        height:350px;
        z-index:11;
      }
    </style>
</head>
<body>
<div id="apDiv1">
<div id="atajos">
    
    <ul>
       <li><a href="pages/trabajadores/trabajadores.registro.php" title="Registrar Nuevo Trabajador">- Registro Trabajador</a></li>
        <li><a href="pages/trabajadores/trabajadores.modificar.php" title="Modificar Datos del Trabajador">- Modificar Trabajador</a></li>
        <li><a href="pages/petroleo/petroleo.registro.php" title="Ingresar Nueva Guía de Petróleo">- Ingreso Petróleo</a></li>
        <li><a href="pages/guias/guias.registro.php" title="Ingreso Guía de Producción">- Ingreso Guías</a></li>
        <li><a href="http://www.google.com/calendar" title="Calendario de Notas" target="_blank">- Calendario/Agenda On-line</a></li>

    </ul>
    
    </div>
    <div id="links">
    <ul>
    
    <li><a href="http://www.arauco.cl/default.asp" target="_blank" title="www.Arauco.cl" class="screenshot" rel="images/arauco.png">- Arauco</a>.cl</li>
    <li><a href="http://www.kaufmann.cl" target="_blank" title="www.Kaufmann.cl" class="screenshot" rel="images/kaufmann.png">- Kaufmann</a>.cl</li>
    <li><a href="http://www.chileautos.cl" target="_blank" title="www.Chileautos.cl" class="screenshot" rel="images/chileautos.png">- Chileautos</a>.cl</li>
     <li><a href="http://www.sii.cl" target="_blank" title="www.Sii.cl" class="screenshot" rel="images/sii.png">- Sii</a>.cl</li>
    <li><a href="http://www.hotmail.com" target="_blank" title="www.Hotmail.com" class="screenshot" rel="images/hotmail.png">- Hotmail</a>.cl</li>    
    </ul>
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
	<? 
  if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){  ?>
      <li><a href="administracion.php" title="Administración del Sitio">Administración</a></li>
	<? } ?>    </ul>
  </div>
  <div id="usuario">
    <table width="315" border="0" align="center">
      <tr>
        <td width="182">Usuario: <? echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
        <td width="72" align="center"><a href="configurar.php">Configurar</a></td>
        <td width="47" align="center"><a href="index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir" />
        </a></td>
      </tr>
    </table>
    <?php
      if($_POST['button']=="Salir"){
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
    <div id="main"><a id="addButton" class="green-button" href="add_note.html">Notas</a>
      <?php
  include("conecta.php");
  $conexion=Conectarse();
  
  $sql="select * from notes";
		$respuesta=mysql_query($sql,$conexion);
		while($row=mysql_fetch_array($respuesta))
		{
			echo "<div class='note ".$row["color"]."' style='left:200px;top:100px;z-index:1'> 
		".$row["text"]."
		<div class='author'>".$row["name"]."</div> 
	    </div> ";
		}
		
        $sql2="select * from n_operador where Estado='CONTRATADO' and Dia=".date("d")." and Mes=".date("m");
		$respuesta=mysql_query($sql2,$conexion);
		while($row=mysql_fetch_array($respuesta))
		{
			$edad=date("Y")-$row["Ano"];
			echo "<div class='note blue' style='left:200px;top:100px;z-index:1'> 
		<center><b>Aviso de Cumpleaños</b> <br> <br>El Trabajador ".$row["Nombre_Operador"].", hoy cumple ".$edad." años.</center>
		<div class='author'>Sistema</div> 
		</div> ";
		}
		
		$sql="select * from petroleo where Fecha_a_Pagar=".date("Y-m-d");
		$respuesta=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		{
		echo "<div class='note green' style='left:200px;top:100px;z-index:1'> 
		<center><b>Aviso de Vencimiento de Petróleo</b> <br> <br>En 2 días más Vence el Pago de la Quincena de Petróleo.</center>
		<div class='author'>Sistema</div> 
		</div> ";
		}
		
		
	echo $notas;
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