<?php
    session_start();
    if(!(isset($_SESSION["Id"]))){
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
    <title>Asetrans - Asignación</title>
    <link href="../../css/stylemcontenido.css" rel="stylesheet" type="text/css" />
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
          <h3>Asignar Camión a Trabajador</h3>
          <p align="justify">Esta opción nos permite asignar un camión a un trabajador en particular para comenzar con las faenas de transporte.</p><br>
                  <p align="justify">Primero seleccionamos el nombre del camión y luego el nombre del trabajador y presionamos el botón   				<b>"Aceptar"</b>, Al momento de presionar el botón Aceptar nos aparece la información del camión y del trabajador para la asignación.	Luego de chequear que los datos estén correctos, Aceptamos la Asignación. Para que quede efectiva la Asignación presionamos el botón <b>"Aceptar Asignación"</b>, y listo!!!</p>
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
          if($_SESSION['Cargo']=='SUPERVISOR' or $_SESSION['Cargo']=='ADMINISTRADOR'){?>
            <li><a href="../../administracion.php" title="Administración del Sitio">Administración</a></li>
            <?php 
          } ?>
      </ul>
    </div>
    <div id="usuario">
      <table width="315" border="0" align="center">
        <tr>
          <td width="182">Usuario: <?php echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
          <td width="72" align="center"><a href="../../configurar.php">Configurar</a></td>
          <td width="47" align="center"><a href="index.php" target="_parent">
            <input type="submit" name="button" id="button" value="Salir"></a>
          </td>
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
            <?php if($_SESSION['Cargo']=='SECRETARIA' or $_SESSION['Cargo']=='Secretaria' || $_SESSION['Cargo']=='secretaria'){?>
              <li><a href="camion.informe.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
              <?php
            } 
            if ($_SESSION['Cargo']=='SUPERVISOR' || $_SESSION['Cargo']=='ADMINISTRADOR'){?>
              <li><a href="camion.informeadm.php" title="Informe de Camiones en Asetrans">- Informe</a></li>
            <?php }?>
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
    </div>
    <div id="contenido">      
      <form id="form1" name="form1" method="post" action="">
        <h3 align="center"><strong>Asignación de Camión </strong></h3>
        <table width="465" border="0" align="center">
          <tr>
            <td width="46"><strong>Camión</strong>
              <label></label></td>
            <td width="86">
              <?php
                include("conecta.php");
                $conexion=Conectarse();
                $result=mysqli_query($conexion, "SELECT * FROM camiones WHERE Estado = 'ACTIVO'");
                if ($row = mysqli_fetch_array($result)){ 
                  echo '<select name="nombre" id="select">';
                  do{
                      echo '<option value='.$row["Id"].'>'.$row["Nombre"].'</option>';		  
                    } while ($row = mysqli_fetch_array($result)); 
                  echo '</select>';
                }
              ?>
              <script>document.form1.nombre.focus()</script>
            </td>
            <td width="67"><strong>Trabajador</strong></td>
            <td width="159">
              <?php
                $result = mysqli_query($conexion, "SELECT * FROM n_operador WHERE Estado='CONTRATADO'");
                if ($row = mysqli_fetch_array($result)){ 
                  echo '<select name="nombre1" id="select">';
                  do {
                      echo '<option value='.$row["Rut_Operador"].'>'.$row["Nombre_Operador"].'</option>';		  
                  } while ($row = mysqli_fetch_array($result)); 
                  echo '</select>';
                }
              ?>
            </td>
            <td width="85"><input type="submit" name="button2" id="button2" value="Aceptar" />
          <?php
            if($_POST['button2']=="Aceptar"){
              $sql= "SELECT a.Id,a.Marca, a.Modelo, a.Ano, a.Nombre, a.Traccion,b.Id, b.Rut_Operador, b.Nombre_Operador, b.Fono_Contacto 
                    FROM camiones a, n_operador b 
                    WHERE a.Id =".$_POST['nombre']." AND b.Rut_Operador=".$_POST['nombre1'];
              $respuesta = mysqli_query($conexion, $sql);
              if(mysqli_num_rows($respuesta)>0){
                echo "";
                $registro=mysqli_fetch_row($respuesta);
                ?>
                </td>
              </tr>
              </table><!-- Cierra tag de linea 135 -->
                <table width="560" border="0" align="center">
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3"><strong>- Información Camión</strong></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="134">Marca
                      <input name="id" type="hidden" id="id" value="<?php echo $registro[0];?>" /></td>
                    <td width="165"><label>
                      <input name="marca" type="text" id="marca" value="<?php echo $registro[1];?>" size="25" readonly="readonly"/>
                    </label></td>
                    <td width="87">Modelo</td>
                    <td width="156"><label>
                      <input name="modelo" type="text" id="modelo" value="<?php echo $registro[2];?>" size="25" readonly="readonly"/>
                    </label></td>
                  </tr>
                  <tr>
                    <td>Patente</td>
                    <td><label>
                      <input name="patente" type="text" id="patente" value="<?php echo $registro[5];?>" size="25" maxlength="100" readonly="readonly"/>
                    </label></td>
                    <td>Nombre</td>
                    <td><input name="nombre" type="text" id="nombre" value="<?php echo $registro[4];?>" size="25" maxlength="25" readonly="readonly"/></td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3"><strong>- Información Trabajador</strong></td>
                    <td><input name="id2" type="hidden" id="id2" value="<?php echo $registro[6];?>" /></td>
                  </tr>
                  <tr>
                    <td>Nombre</td>
                    <td><label>
                      <input name="nom" type="text" id="nom" value="<?php echo $registro[8];?>" size="25" readonly="readonly" />
                    </label></td>
                    <td>Rut</td>
                    <td><label>
                      <input name="rut" type="text" id="rut" value="<?php echo $registro[7];?>" size="25" readonly="readonly" />
                    </label></td>
                  </tr>
                  <tr>
                    <td>Telefono</td>
                    <td><label>
                      <input name="telefono" type="text" id="telefono" value="<?php echo $registro[9];?>" size="25" readonly="readonly" />
                    </label></td>
                    <td>Fecha Asig.</td>
                    <td><label>
                      <input name="textfield4" type="text" id="textfield4" value="<?php echo date("Y-m-d"); ?>" size="25" readonly="readonly" />
                    </label>          
                      <input name="estado" type="hidden" id="estado" value="ACTIVO" /></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="center">&nbsp;</td>
                  </tr>
                  </table>
                  <table width="200" border="0" align="center">
                    <tr>
                      <td>
                        <div align="center">
                          <label>
                            <input type="submit" name="button" id="button" value="Aceptar Asignación" />
                          </label>
                        </div>
                      </td>
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
            if($_POST['button']=="Aceptar Asignación"){
              /*?> if($sql="select Id from asignacion_camiones where Id_Camion=".$_POST['id'])
              {
                echo '<script>alert("El Camión '.$_POST[nombre].' ya a sido Asignado a un Trabajador");</script>';

              }else{
                  if($sql="select Id from asignacion_camiones where Id_Trabajador=".$_POST['id2'])
                  {
                    echo '<script>alert("El Trabajador '.$_POST[nom].' ya a sido Asignado a un Camión.");</script>';

                  }else{  <?php */
              $p_Id = "";
              $p_Id_Camion = $_POST['id'];
              $p_Id_Trabajador = $_POST['id2'];
              $p_Marca_Ca = $_POST['marca'];
              $p_Modelo_Ca = $_POST['modelo'];
              $p_Nombre_Ca = $_POST['nombre'];
              $p_Patente_Ca = $_POST['patente'];
              $p_Rut_Tra = $_POST['rut'];
              $p_Nombre_Tra = $_POST['nom'];
              $p_Fecha_Asignacion = date("Y-m-d");
              $p_Estado = $_POST['estado'];
              $p_Fecha_Modificacion = "";
              $sql = "INSERT INTO asignacion_camiones 
                      VALUES('".$p_Id."','".$p_Id_Camion."','".$p_Id_Trabajador."','".$p_Marca_Ca."','".$p_Modelo_Ca."','".$p_Nombre_Ca."','".$p_Patente_Ca."','".$p_Rut_Tra."','".$p_Nombre_Tra."','".$p_Fecha_Asignacion."','".$p_Estado."','".$p_Fecha_Modificacion."')";
              echo '<script>alert("El Camión '.$_POST['nombre'].' fue asignado al trabajador '.$_POST['nom'].' exitosamente.");</script>';
              require("conecta.php");
              $conexion = Conectarse();
              mysqli_query($conexion, $sql);
            ?>
            <?php
            };
            ?>   
      </div>
    </div>
    <script type="text/javascript">
      swfobject.registerObject("FlashID");
    </script>
  </body>
</html>