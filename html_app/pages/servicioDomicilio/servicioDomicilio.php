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
                <link rel="stylesheet" type="text/css" href="servicioDomicilio.css">
                <script src='servicioDomicilio.js' type="text/javascript"></script> 
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
                                                <li><a href="#">Servicio a domicilio</a></li>
                                                <li><a href="../../pages/datosExtra/datosExtra.php">Enviar email</a></li>
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
                                                <h1>Servicio a domicilio</h1> 
                                                <br>
                                                <br>
                                                
                                                <h3>Disponibles para llevar los productos hasta tu hogar!</h3>
                                                <br><br>
                                                <div>
                                                        <p>
                                                                Puedes llamarnos al siguiente número si vives en Guadajalara, Jalisco para que te entregemos rápida y personalmente tus productos: <br>
                                                                36-57-58-93 <br> <br>
                                                                Al llamar recibirás el tiempo de entrega estimado para la llegada. <br>
                                                                El precio por envío depende de la distancia de nuestra tienda física, aunque normalmente no superará los $150 MX. <br>
                                                                La compra mínima para poder usar este servicio es de 10 kg. <br><br>
                                                                Haz clic <a href="../../pages/quienesSomos/quienesSomos.php">aquí</a> o en el botón de "Datos de contacto" para ver más datos sobre nuestra ubicación.
                                                        </p>
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