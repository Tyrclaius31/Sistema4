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
        <h3>Eliminar Registro de Camiones</h3>
        <p align="justify">Esta opción nos permite eliminar el registro del camión del sistema.</p><br>
        <p align="justify">Primero seleccionamos el camión y presionamos el botón <b>"Buscar"</b>. 
        Luego el sistema nos arroja la información del camión junto con un cuadro de texto, en donde debemos colocar el motivo de la eliminación.<br><br>
        Señalamos el motivo de la eliminación, ingresamos la Clave de Permiso, por último presionamos el botón <b>"Eliminar"</b>, y listo!!! </p>
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
            <?php 
              if($_SESSION['Cargo']=='SUPERVISOR' || $_SESSION['Cargo']=='ADMINISTRADOR'){  ?>
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
              if($_SESSION['Cargo']=='SECRETARIA' || $_SESSION['Cargo']=='Secretaria' || $_SESSION['Cargo']=='secretaria'){  ?>
                <li><a href="camion.informe.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
                <?php
              } 
              if($_SESSION['Cargo']=='SUPERVISOR' || $_SESSION['Cargo']=='ADMINISTRADOR'){  
              ?>
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
              <form id="form1" name="form1" method="post" action="">
                <h3 align="center"><strong>Eliminar Registro Camión </strong></h3>   
                <p align="center"><strong>Seleccione Camión</strong>
                <?php
                  include("conecta.php");
                  $conexion = Conectarse();
                  $result = mysqli_query($conexion, "SELECT * FROM camiones WHERE Estado ='ACTIVO'");
                  if ($row = mysqli_fetch_array($result)){ 
                    echo '<select name="nombre" id="select">';
                    do{
                      echo '<option value='.$row["Id"].'>'.$row["Nombre"].'</option>';		  
                    } while ($row = mysqli_fetch_array($result)); 
                    echo '</select>';
                  }
                  ?>
                  <script>document.form1.nombre.focus()</script>
                  <label>
                    <input type="submit" name="button2" id="button2" value="Buscar" />
                    <br />
                  </label>
                </p>
                <?php
                  if ($_POST['button2'] == "Buscar"){
                    $sql = "SELECT * FROM camiones WHERE Id =".$_POST['nombre'];
                    $respuesta=mysqli_query($conexion, $sql);
                    if(mysqli_num_rows($respuesta)>0){
                      echo "";
                      $registro=mysqli_fetch_row($respuesta);
                    ?>
                      <table width="560" border="0" align="center">
                        <tr>
                          <td width="116">Marca
                            <input name="id" type="hidden" id="id" value="<?php echo $registro[0];?>" /></td>
                          <td width="173"><label>
                            <input name="marca" type="text" disabled="disabled" id="marca" value="<?php echo $registro[1];?>" size="25"/>
                          </label></td>
                          <td width="76">Modelo</td>
                          <td width="177"><label>
                            <input name="modelo" type="text" disabled="disabled" id="modelo" value="<?php echo $registro[2];?>" size="25"/>
                          </label></td>
                        </tr>
                        <tr>
                          <td>Patente</td>
                          <td><label>
                            <input name="ano" type="text" disabled="disabled" id="ano" value="<?php echo $registro[9];?>" size="25" maxlength="100"/>
                          </label></td>
                          <td>Nombre</td>
                          <td><input name="nombre" type="text" disabled="disabled" id="nombre" value="<?php echo $registro[10];?>" size="25" maxlength="25"/></td>
                        </tr>
                        <tr>
                          <td>Fecha Ingreso</td>
                          <td><input name="textfield5" type="text" disabled="disabled" id="textfield5" value="<?php echo $registro[12];?>" size="25" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Motivo</td>
                          <td><input name="estado" type="hidden" id="estado" value="DESACTIVO" />
                          <input name="nick" type="hidden" value="<?php echo "".$_SESSION['Nick'].""; ?>" />
                          <input type="hidden" name="salida" id="salida" value="<?php echo date('Y-m-d'); ?>"/></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="4" align="center">
                            <label>
                              <textarea name="motivo" id="motivo" cols="45" rows="5"></textarea>
                              <script type="text/javascript">  
                                var motivo = new LiveValidation('motivo'); motivo.add(Validate.Presence);
                              </script> 
                            </label>
                          </td>
                        </tr>
                      </table>
                      <table width="200" border="0" align="center">
                        <tr>
                          <td align="center"><strong>Clave Permiso</strong></td>
                          <td><label>
                            <input name="clave" type="password" id="clave" size="10" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="center">
                            <label>
                              <input type="submit" name="button" id="button" value="Eliminar Camión" />
                              </label>
                            </div></td>
                          <td>
                          <a href="javascript:location.reload()">
                          <input type="submit" name="button3" id="button3" value="Limpiar" />
                          </a>
                          </td>
                        </tr>
                      </table>
                    </form>
                    <?php
                    }
                  }
            if($_POST['button']=="Limpiar"){};
            if($_POST['button']=="Eliminar Camión"){
              echo '<script>alert("Al Eliminar un Camión, se denota que el tal fue Vendido. especificar esto en el Motivo.");</script>';
              $sql = "SELECT * FROM usuarios WHERE Clave_Permiso =".$_POST['clave'];
              $respuesta=mysqli_query($conexion, $sql);

              if($p_Clave_Permiso == $respuesta){
                if($_POST['motivo'] == ""){
                  echo '<script>alert("No puede Eliminar sin tener un Motivo...");</script>';
                } else{ if($_POST['clave']==""){
                    echo '<script>alert("No puede Eliminar los Datos del Camión '.$_POST['nombre'].', si no ingresa la CLAVE PERMISO.");</script>';
                  } else{
                    $sql = "UPDATE camiones 
                            SET Estado='".$_POST['estado']."', Motivo='".$_POST['motivo']."', Eliminar_Usuario='".$_POST['nick']."',Fecha_Salida='".$_POST['salida']."' 
                            WHERE Id='".$_POST['id']."' ";
                    echo '<script>alert("El Camión a sido Eliminado");</script>';			
                    $respuesta = mysqli_query($conexion, $sql);
                  }
                }
              } else{
                echo '<script>alert("Clave Permiso ERRÓNEA");</script>';
              }
            }
          ?>
          </div>
        </div>
    </div>
    <script type="text/javascript">
      swfobject.registerObject("FlashID");
    </script>
  </body>
</html>