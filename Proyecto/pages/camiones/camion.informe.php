<?php
  session_start();
    if (!(isset($_SESSION["Id"]))){
      $_SESSION = array();
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
    <title>Asetrans - Home</title>
    <link href="../../css/stylemcontenido.css" rel="stylesheet" type="text/css" />
    <script src="../../Scripts/swfobject_modified.js" type="text/javascript"></script>
    <!-- IMPRIMIR-->
        <style type="text/css">
          @media print {
            #contenido { width:810px; font-size: 15px; display:block};
            #menugeneral {display:none};
            #apDiv3 { visibility:visible};
            #animacion {display:none};
            #manulateral {display:none};
            #usuario {display:none};
            #tira {display:none};
            #apDiv1 {display:none};
            #apDiv5 {display:none};
            #osx-modal-content {display:none};
          }
        </style>
    <script>
      function impre(num){
        document.getElementById(num).className="contenido";
        print();
        document.getElementById(num).className="menugeneral";
        document.getElementById(num).className="animacion";
        document.getElementById(num).className="manulateral";
        document.getElementById(num).className="usuario";
        document.getElementById(num).className="tira";
      }
    </script>
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
            <h3>Informe de Camiones</h3>
              <p align="justify">Esta opción permite mostrar un listado de los camiones pertenecientes a la empresa.<br><br>
              </p>                                 
              <p align="center"><h5><img src="../../images/log.png"/></h5></p>   
          </div>
    </div>
    <div id="apDiv1"><a href="#" onClick="impre('contenido');return false"><img src="../../images/impresora.jpg" width="16" height="15" /></a></div>
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
            <?php 
              if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){ ?>
                <li><a href="../../administracion.php" title="Administración del Sitio">Administración</a></li>
              <?php 
              } 
              ?>
          </ul>
        </div>
        <div id="usuario">
          <table width="315" border="0" align="center">
            <tr>
              <td width="182">Usuario: <?php echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
              <td width="72" align="center"><a href="../../configurar.php">Configurar</a></td>
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
                window.location="../../index.php";
              </script>
              <?php
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
                  <?php
                    if($_SESSION['Cargo']=='SECRETARIA' || $_SESSION['Cargo']=='Secretaria' || $_SESSION['Cargo']=='secretaria'){ ?>
                      <li><a href="camion.informe.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
                      <?php
                    } 
                    if($_SESSION['Cargo']=='SUPERVISOR' || $_SESSION['Cargo']=='ADMINISTRADOR'){ ?>
                      <li><a href="camion.informeadm.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
                      <?php 
                    } 
                    ?>
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
              <h3><center>Informe de Camiones</center></h3>
              <div align="center"> 
                <font size="1">
                  <?php
                    include ("conecta.php");
                    $conexion = Conectarse();
                    echo "<hr>";
                    echo  "<b><font face='Times New Roman' size='1'><table width='680' border='0' align='center'>
                          <tr><td width='80'>PATENTE</td><td width='80'>MARCA</td><td width='70'>MODELO</td><td width='50'>AÑO</td><td width='130'>TIPO CAMIÓN</td><td width='70'>COLOR</td><td width='100'>NOMBRE</td><td width='100'>FECHA INGRESO</td></tr></table></font></b>";
                    echo "<hr>";
                      $sql = "SELECT * FROM camiones WHERE Estado='ACTIVO'";
                      $respuesta=mysqli_query($conexion, $sql);
                      while ($row=mysqli_fetch_array($respuesta)){
                        echo "<table width='680' border='0' align='center'><tr><td width='80'>".$row["Traccion"]."</td><td width='80'>".$row["Marca"]."</td><td width='70'>".$row["Modelo"]."</td><td width='50'>".$row["Ano"]."</td><td width='130'>".$row["Tipo"]."</td><td width='70'>".$row["Color"]."</td><td width='100'>".$row["Nombre"]."</td><td width='100'>".$row["Fecha_Ingreso"]."</td></tr></table>";
                      }
                    if ($_POST['button']=="Limpiar"){}
                  ?>
                </font>
              </div>
              <div id="apDiv3"><img src="../../images/logo.png" alt="" width="227" height="71" /></div>
          </div>
        </div>
      </div>
    <script type="text/javascript">
      swfobject.registerObject("FlashID");
    </script>
  </body>
</html>