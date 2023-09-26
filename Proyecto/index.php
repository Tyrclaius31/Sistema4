<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SCG Version 0.1</title>
        <link rel="stylesheet" type="text/css" href="css/estilo_index.css" media="screen" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="css/js/jquery.colorbox.js"></script>
        <script src="Scripts/swfobject_modified.js"></script>
        <style type="text/css">
            body { font: 12px "Times New Roman", Times, serif; }
            a:link, a:visited { text-decoration: none; color: #416CE5; }
            h2 { font-size: 13px; }
            .hidden { display: none; }
        </style>
    </head>
    <body>

    <div id="contenedorgeneral">
        <div id="menugeneral">
            <ul>
                <li><a href="#" title="Ingreso al Sistema" class="Login">Ingresar</a></li>
            </ul>
            <div class='hidden'>
                <div id='Login' style='padding:10px; background:#fff;'>
                    <form method="post" action="" id="login_form" name="ingreso">
                        <label id="usu"></label>
                        <div align="center">
                            <table width="196" border="0">
                                <tr>
                                    <td width="43"><b>Usuario</b></td>
                                    <td width="143"><input name="username" type="text" class="caja_texto" id="username" value=""> </td>
                                </tr>
                                <tr>
                                    <td><b>Clave</b></td>
                                    <td><input name="password" type="password" class="caja_texto" id="password" value=""></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="right"><input name="Submit" type="submit" class="conectar" id="submit" value="Conectar" style="margin-left:-10px; height:23px"></td>
                                </tr>
                            </table>
                        </div>
                        <label id="cla"></label>
                        <div align="center"></div>
                        <div align="center"></div>
                        <div class="buttondiv">
                            <?php
                            include("conecta.php");
                            $conexion = Conectarse();

                            if (isset($_POST['Submit']) && $_POST['Submit'] == "Conectar") {
                                if (empty($_POST['username']) || empty($_POST['password'])) {
                                    echo '<script>alert("Debe Completar todos los Campos para el Ingreso");</script>';
                                } else {
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];
                                if ($username == 'Admin' && $password == 'leal123') {
                                    echo '<script type="text/javascript">
                                            window.location="Principal.php";
                                        </script>';
                                } else {
                                        $sqld = "SELECT * FROM users WHERE Nick='" . $username . "'";
                                        $resultado = mysqli_query($conexion, $sqld);
                                        if ($resultado && mysqli_num_rows($resultado) > 0) {
                                            $row = mysqli_fetch_assoc($resultado);
                                            if ($row['Clave'] == $password) {
                                                $_SESSION['Id'] = $row['Id'];
                                                $_SESSION['Nick'] = $row['Nick'];
                                                $_SESSION['Clave'] = $row['Clave'];
                                                $_SESSION['Clave_Permiso'] = $row['Clave_Permiso'];
                                                $_SESSION['Nombre'] = $row['Nombre'];
                                                $_SESSION['Cargo'] = $row['Cargo'];
                                                echo '<script type="text/javascript">
                                                        window.location="Principal.php";
                                                    </script>';
                                                $_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");
                                            } else {
                                                echo '<script>alert("La Clave es Incorrecta. Ingrese Nuevamente!!");</script>';
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="cuerpo">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="447" height="188">
                <param name="movie" value="bienvenida.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="7.0.70.0" />
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="bienvenida.swf" width="447" height="188">
                    <!--<![endif]-->
                    <param name="quality" value="high" />
                    <param name="wmode" value="opaque" />
                    <param name="swfversion" value="7.0.70.0" />
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <div>
                        <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                    </div>
                    <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".Login").colorbox({ transition: "elastic", width: "30%", inline: true, href: "#Login" });
        });
        swfobject.registerObject("FlashID");
    </script>
</body>
</html>
