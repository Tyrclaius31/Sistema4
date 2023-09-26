<?php
 	// session_start();
  //  if (!isset($_SESSION["Id"]))
  //   {
  //     $_SESSION = array();
  //     session_destroy();
	//   echo '<SCRIPT>alert("No se ha iniciado Session, Favor Registrarse.");
  //   	location.href=("index.php");</SCRIPT>';
  //     exit;
  //   }  
	
	// $fecha1= mktime(0,0,0,date("m"),date("d"),date("Y"));
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asetrans - Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body>
<div id="apDiv7">
<ul>
       <li><a href="pages/adm/petroleo.php" title="">Petróleo Anual</a></li>
       <li><a href="pages/adm/egresos.php" title="">Egresos Anual</a></li>
       <li><a href="pages/adm/produccion.php" title="">Producción Anual</a></li>
       <li><a href="pages/adm/fletes.php" title="">Fletes Anual</a></li>
</ul>
</div>
<div id="contenedorgeneralll">
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
	<?php if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){  ?>
      <li><a href="administracion.php" title="Administración del Sitio">Administración</a></li>
	<?php } ?>    </ul>
  </div>
  <div id="usuario">
    <table width="315" border="0" align="center">
      <tr>
        <td width="182">Usuario: <?php echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
        <td width="72" align="center"><a href="configurar.php">Configurar</a></td>
        <td width="47" align="center"><a href="index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir" />
        </a></td>
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
    <?php
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
  <div id="cuerpoleftgrafico">
    <div id="manulateral">
    
    <h3><center> Administración</center></h3>
      <ul>
        <li><a href="pages/adm/adm.registro.php" title="Registrar Nuevo Personal Adm.">- Registrar Adm.</a></li>
        <li><a href="pages/adm/adm.modificar.php" title="Modificar Datos de Personal">- Modificar Adm.</a></li>
         <li><a href="pages/adm/adm.listar.php" title="Listar Información del Personal Adm.">- Listar Adm.</a></li>
        <li><a href="pages/adm/adm.eliminar.php" title="Eliminar a Personal (Despedido)">- Eliminar Adm.</a></li>
        <li><a href="pages/adm/adm.listareliminados.php" title="Listar Información de Personal Eliminado">- Eliminados</a></li>
        <li><a href="pages/adm/adm.reincorporar.php" title="Reincorporar Personal Eliminado">- Reincorporación</a></li>
        <li><a href="#" title="">_______________</a></li>
        <li><a href="estadisticas.php" title="Estadísticas y Gráficos">Estadísticas</a></li>

      </ul>
    
    </div>
    
    <div id="contenidografico">
    
    
    <!--contenido-->
    
    </div>
  </div>
  
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>