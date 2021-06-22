<!DOCTYPE html>
 <html lang="es">
        <head>
            <meta charset="utf8">
            <!-- Ajax -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <!-- /Ajax -->
                <!-- Bootstrap 4 -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
                <!--/Bootstrap 4-->
                <link rel="stylesheet" type="text/css" href="../../header.css">
                <link rel="stylesheet" type="text/css" href="../../footer.css">
                <link rel="stylesheet" type="text/css" href="datosExtra.css">
                <script src='datosExtra.js' type="text/javascript"></script> 
                <?php
                require '../../fonts.php';
                ?> 
            <title>Contacto</title>
        </head>



        <body>
                <header class="BarraCabecera">
                        <ul>
                                <li>
                                                <img class="logo" src="../../img/logo_fondo.png" alt="Logo">
                                </li>
                                <li>
                                                <h1 class="nombre_empresa">Verduleria del abuelo</h1> 
                                </li>
                        </ul>
                        <div class="barra_idioma"> 
                                <?php
                                        require '../../pages/buscador/barra_buscadora.php';
                                ?>
                        </div> 

                        <nav>
                                <ul>
                                        
                                        <li class="parent"><a href="../../index.php">Inicio</a></li>
                                        <li class="parent"><a href="../../pages/list_shop/list_shop.php">Productos</a>
                                                <ul>
                                                        <li><a href="#">Verduras</a></li>
                                                        <li><a href="#">Frutas</a></li>
                                                        <li><a href="#">No perecederos</a></li>
                                                </ul>
                                        </li>
                                        <li class="parent"><a href="#">Servicios</a>
                                        <ul>
                                                <li><a href="../../pages/servicioDomicilio/servicioDomicilio.php">Servicio a domicilio</a></li>
                                                <li><a href="#">Enviar email</a></li>
                                        </ul>
                                        </li>
                                        <li class="parent"><a href="../../pages/quienesSomos/quienesSomos.php">Datos de contacto</a></li>
                                        
                                </ul>
                        </nav>
                </header>

                <div class="cuerpoDePagina">

                <!--<aside class="aside_izq">
                        <div>
                                <h3>Menú</h3>
                                <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus eros ut consequat lobortis. 
                                                Vivamus tristique leo neque, sed vehicula tortor fermentum eu. Donec aliquam nisl sem, nec semper 
                                                erat ultrices quis. Ut pharetra egestas quam et faucibus. Proin ac tortor a enim convallis finibus
                                                        tempor elementum arcu. Donec molestie malesuada erat at varius. Ut sed congue eros, a egestas mauris. 
                                                        Donec in erat vel massa blandit interdum fringilla eget nulla. 
                                </p>
                        </div>
                        <div>
                                        <img src="img/publicidad.jpg" alt="publicidad">
                        </div>
                                
                </aside>-->

                <section class="main">
                                <section class="articles">
                                        <article style="overflow: hidden;">
                                                <div style="display: inline-block;">
                                                        <h1 style="float: left;">Enviar un email</h1>
                                                        <img src="../../img/send_email.gif" alt="imagen" style="float: right;width: 80px;">
                                                </div>                                                                
                                                <div>
                                                        <form method="post" name="myemailform" action="form-to-email.php">
                                                        Nombre: <br><input type="text" name="name">
                                                        <br><br>
                                                        Tu correo electrónico:   <br> <input type="text" name="email">
                                                        <br><br>
                                                        Mensaje:  <br><textarea name="message" style="width: 100%; height: 13rem;"></textarea>
                                                        <br><br>
                                                        <input type="submit" value="Enviar!" class="btn btn-danger">
                                                        </form>
                                                </div>
                                        </article>
                                </section>
                        
                </section>

                <!-- <aside class="aside_der">
                                <div>
                                                <h3>Menú de navegación</h3><br>
                                                <p>
                                                <ul>
                                                                                <li>-Inicio</li>
                                                <li><font color=red;>-Quienes somos</font></li>
                                                <li>-Portafolios</li>
                                                <li>-Contáctanos</li>								
                                                                                </ul>
                                                </p><br><br><br>
                                </div>
                        <div>
                                        <h3>Menú</h3>
                                        <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus eros ut consequat lobortis. 
                                                        Vivamus tristique leo neque, sed vehicula tortor fermentum eu. Donec aliquam nisl sem, nec semper 
                                                        erat ultrices quis. Ut pharetra egestas quam et faucibus. Proin ac tortor a enim convallis finibus
                                                                tempor elementum arcu. Donec molestie malesuada erat at varius. Ut sed congue eros, a egestas mauris. 
                                                                Donec in erat vel massa blandit interdum fringilla eget nulla. 
                                        </p>
                        </div>
                        <div>
                                <img src="img/publicidad.jpg" alt="publicidad">
                        </div>
                        
                </aside> -->

                <?php
                        require '../../footer.php';
                ?>
        </body>

</html>