<?php 
 	// session_start();
  //  if (!isset($_SESSION["Id"]))
  //   {
  //     $_SESSION = array();
  //     session_destroy();
	//   echo '<SCRIPT>alert("No se ha iniciado Session, Favor Registrarse.");
  //   	location.href=("../../index.php");</SCRIPT>';
  //     exit;
  //   }  
	
	// $fecha1= mktime(0,0,0,date("m"),date("d"),date("Y"));
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asetrans</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />

<script src="../../Scripts/swfobject_modified.js" type="text/javascript"></script>

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
				<h3>Estadísticas Anual de Fletes de Ocación</h3>
                 <p align="justify">Esta opción permite mostrar las estadísticas del año en cuanto a los Fletes de Ocación realizados. En primera instancia muestra un gráfico de barras, en el cuál se puede ver lo que se ganó durante el año seleccionado. Como segunda opción se despliega un gráfico circular, en el cual se puede observar en porcentajes lo detallado en el gráfico anterior.<br></p>      
                          <p align="center"><h5><img src="../../images/log.png"/></h5></p>   
 
  </div>
</div>

<div id="apDiv7">
<ul>
       <li><a href="petroleo.php" title="">Petróleo Anual</a></li>
       <li><a href="egresos.php" title="">Egresos Anual</a></li>
       <li><a href="produccion.php" title="">Producción Anual</a></li>
       <li><a href="fletes.php" title="">Fletes Anual</a></li>
</ul>
</div>
<div id="contenedorgeneralll">
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
      <?php  if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){  ?>
      <li><a href="../../administracion.php" title="Administración del Sitio">Administración</a></li>
	  <?php  } ?>
    </ul>
  </div>
  <div id="usuario">
    <table width="315" border="0" align="center">
      <tr>
        <td width="182">Usuario: <?php  echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
        <td width="72" align="center"><a href="../../configurar.php">Configurar</a></td>
        <td width="47" align="center"><a href="../../index.php" target="_parent">
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
		window.location="../../index.php";
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
  <div id="cuerpoleftgrafico">
    <div id="manulateral">
    
    <h3><center> Administración</center></h3>
      <ul>
        <li><a href="adm.registro.php" title="Registrar Nuevo Personal Adm.">- Registrar Adm.</a></li>
        <li><a href="adm.modificar.php" title="Modificar Datos de Personal">- Modificar Adm.</a></li>
         <li><a href="adm.listar.php" title="Listar Información del Personal Adm.">- Listar Adm.</a></li>
        <li><a href="adm.eliminar.php" title="Eliminar a Personal (Despedido)">- Eliminar Adm.</a></li>
        <li><a href="adm.listareliminados.php" title="Listar Información de Personal Eliminado">- Eliminados</a></li>
        <li><a href="adm.reincorporar.php" title="Reincorporar Personal Eliminado">- Reincorporación</a></li>
        <li><a href="#" title="">_______________</a></li>
        <li><a href="../../estadisticas.php" title="Estadísticas y Gráficos">Estadísticas</a></li>

      </ul>
    
    </div>
    
    <div id="contenidografico">
    
    <form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h3><strong>Estadísticas Anual de Fletes de Ocación</strong></h3>
    <div id="tira">
    <table width="270" border="0">
      <tr>
        <td width="93"><h4>Seleccione Año </h4></td>
        <td width="72"><label>
          <select name="ano" id="ano">
            <option selected="selected">2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            </select>
      <script>document.form1.ano.focus()</script>
        </label></td>
        <td width="91"><label>
          <input type="submit" name="button" id="button" value="Buscar" />
        </label></td>
      </tr>
    </table>
    </div>
    <?php
	include("conecta.php");
	$conexion=Conectarse();
	include "../../graficos/FusionCharts.php";
	include "../../graficos/Functions.php";
	
	if($_POST['button']=="Buscar")
	{
		$sql="select sum(Total) from fletes_ocacion where Mes ='01' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio1 = $registro[0];
				}
		
		$sql="select sum(Total) from fletes_ocacion where Mes ='02' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio2 = $registro[0];
				}
		
		$sql="select sum(Total) from fletes_ocacion where Mes ='03' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio3 = $registro[0];
				}
		
		$sql="select sum(Total) from fletes_ocacion where Mes ='04' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio4 = $registro[0];
				}
				
		$sql="select sum(Total) from fletes_ocacion where Mes ='05' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio5 = $registro[0];
				}
				
		$sql="select sum(Total) from fletes_ocacion where Mes ='06' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio6 = $registro[0];
				}
				
		$sql="select sum(Total) from fletes_ocacion where Mes ='07' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio7 = $registro[0];
				}
		
		$sql="select sum(Total) from fletes_ocacion where Mes ='08' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio8 = $registro[0];
				}
		
		$sql="select sum(Total) from fletes_ocacion where Mes ='09' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio9 = $registro[0];
				}
		
		$sql="select sum(Total) from fletes_ocacion where Mes ='10' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio10 = $registro[0];
				}
				
		$sql="select sum(Total) from fletes_ocacion where Mes ='11' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio11 = $registro[0];
				}
				
		$sql="select sum(Total) from fletes_ocacion where Mes ='12' and Ano=".$_POST['ano'];
				$respuesta=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($respuesta)>0)
				{
					$registro=mysqli_fetch_row($respuesta);
					$intTotalAnio12 = $registro[0];
				}
	
		$strXML = "";
		$strXML = "<chart caption = 'Grafico FLETES' bgColor='#FFFFFF' yAxisName='Nivel en Pesos' numberPrefix='$' 		        formatNumberScale='0' baseFontSize='9' showValues='1' xAxisName='Meses' decimals='1' enableSlicingMovement='1'
		showpercentvalues= '1' rotatevalues='1'>";
			
		$strXML .= "<set label = 'Ene' value ='".$intTotalAnio1."' color='2CD6E9'/>";
		$strXML .= "<set label = 'Feb' value ='".$intTotalAnio2."' color='FFFFFF'/>";
		$strXML .= "<set label = 'Mar' value ='".$intTotalAnio3."' color='EA1000'/>";
		$strXML .= "<set label = 'Abr' value ='".$intTotalAnio4."' color='0D0DFF'/>";
		$strXML .= "<set label = 'May' value ='".$intTotalAnio5."'  color='FFBA00'/>";
		$strXML .= "<set label = 'Jun' value ='".$intTotalAnio6."'  color='949494'/>";
		$strXML .= "<set label = 'Jul' value ='".$intTotalAnio7."'  color='02FFFF'/>";
		$strXML .= "<set label = 'Ago' value ='".$intTotalAnio8."'  color='74E800'/>";
		$strXML .= "<set label = 'Sep' value ='".$intTotalAnio9."'  color='C96603'/>";
		$strXML .= "<set label = 'Oct' value ='".$intTotalAnio10."' color='BC189F'/>";
		$strXML .= "<set label = 'Nov' value ='".$intTotalAnio11."'  color='FB7D00'/>";
		$strXML .= "<set label = 'Dic' value ='".$intTotalAnio12."' color='22BD0E'/>";
		$strXML .= "</chart>";
		
		echo renderChartHTML("../../graficos/Column3D.swf", "",$strXML, "ejemplo", 425, 247, false);
 		echo renderChartHTML("../../graficos/Pie3D.swf", "",$strXML, "ejemplo", 300, 200, false);
	
	}
	?>
    
    </div>
  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>