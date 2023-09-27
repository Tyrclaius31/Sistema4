<?php
  session_start();
    if (!(isset($_SESSION['Id'])))
    {
      $_SESSION = array();
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
<link href="css/stylehome.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="contenedorgeneral_configuraradm">
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
        <?php 
          if($_SESSION['Cargo']=='SUPERVISOR' || $_SESSION['Cargo']=='ADMINISTRADOR'){?>
            <li><a href="administracion.php" title="Administración del Sitio">Administración</a></li>
          <?php 
          }
          ?>    
      </ul> 
    </div>
  <div id="usuario">
    <table width="315" border="0" align="center">
      <tr>
        <td width="182">Usuario: <?php echo "".$_SESSION['Nick']." - ".$_SESSION['Cargo']."";?></td>
        <td width="72" align="center"><a href="configurar.php">Configurar</a></td>
        <td width="47" align="center"><a href="index.php" target="_parent">
          <input type="submit" name="button" id="button" value="Salir">
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
      <?php
      }
      ?>
  </div>

  <!--TODO: Parte del flash - Por modificar -->
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
  <div id="cuerpoleft_configurar">
    <form id="form1" name="form1" method="post" action="">
      <div align="center">
        <h4><strong>Clave Acceso</strong> 
          <label>
            <input name="clave1" type="password" id="clave1" size="10" />
            </label>
          <label>
            <input type="submit" name="button" id="button" value="Aceptar" />
            </label>
          <?php
            include("conecta.php");
            $conexion = Conectarse();

            if($_POST['button']=="Aceptar"){
              $sql="SELECT * FROM usuarios WHERE Clave=".$_POST['clave1'];
              $respuesta=mysqli_query($conexion, $sql);
              //TODO: Error por que no recibe nada de base de datos, debido a la falta de ingreso del usuario.
              if(mysqli_num_rows($respuesta) > 0){
                echo "";
                $registro=mysqli_fetch_row($respuesta);
              ?>
                <h4>
                  <table width="281" border="0">
                    <tr>
                      <td width="113">Nombre</td>
                      <td width="158"><label>
                        <input name="nombre" type="text" disabled="disabled" id="nombre" value="<?php echo $registro[4];?>" size="35" readonly="readonly"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Cargo</td>
                      <td><label>
                        <input name="cargo" type="text" disabled="disabled" id="cargo" value="<?php echo $registro[5];?>" size="35" readonly="readonly"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Nick</td>
                      <td><input name="nick" type="text" disabled="disabled" id="nick" value="<?php echo $registro[1];?>" size="35" readonly="readonly"/></td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td><input name="id" type="hidden" id="id" value="<?php echo $registro[0];?>" /></td>
                    </tr>
                  </table>
                  <table width="322" border="0">
                    <tr>
                      <td colspan="2" align="center">Configurar Clave Permiso</td>
                    </tr>
                    <tr>
                      <td width="149">Ingrese Clave Nueva
                        <input name="cla" type="hidden" id="cla" value="<?php echo $registro[2];?>" />
                        <input name="clap" type="hidden" id="clap" value="<?php echo $registro[3];?>" /></td>
                      <td width="163"><label>
                        <input name="clave" type="password" id="clave" size="15" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Reingrese Clave </td>
                      <td><label>
                        <input name="clave_nueva" type="password" id="clave_nueva" size="15" />
                      </label></td>
                    </tr>
                    <tr>
                      <td><input type="submit" name="button4" id="button4" value="Modificar Clave Permiso" /></td>
                      <td><input type="submit" name="button3" id="button3" value="Limpiar" /></td>
                    </tr>
                  </table>
                </h4>
              <?php
              };
            };
            if($_POST['button3']=="Limpiar"){return;};
            if($_POST['button4']=="Modificar Clave Permiso"){
              if($_POST['clave']!=$_POST['clave_nueva']){
                echo '<script>alert("No puede Modificar la CLave Permiso, pues las claves no coninciden.");</script>';
              } else{
                $sql= "UPDATE usuarios SET Clave_Permiso='".$_POST['clave_nueva']."' WHERE Id='".$_POST['id']."' ";
                $respuesta = mysqli_query($conexion, $sql);
                echo '<script>alert("La Modificacion se Realizo con exito.");</script>';
              };
            };
            ?>
        </h4>
      </div>
    </form>
  
  </div>
</div>
<script type="text/javascript">
  swfobject.registerObject("FlashID");
</script>
</body>
</html>