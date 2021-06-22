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
                <link rel="stylesheet" type="text/css" href="quienesSomos.css">
                <script src='quienesSomos.js' type="text/javascript"></script>
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
                                                <li><a href="../../pages/datosExtra/datosExtra.php">Enviar email</a></li>
                                        </ul>
                                        </li>
                                        <li class="parent"><a href="#">Datos de contacto</a></li>
                                        
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
                                                <h1 class="titulo">Datos de contacto</h1>
                                                <div>
                                                        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.58817319873!2d-103.33209778558933!3d20.645636606123748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b23f3338f617%3A0x558a564866ab368d!2sR%C3%ADo+Amarillo+1838%2C+Atlas%2C+44870+Guadalajara%2C+Jal.!5e0!3m2!1ses!2smx!4v1509225705042" width="50%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        <p style="float: right;">
                                                                 Rio Amarillo #1838, cruce con Rio San Juan De Dios<br>
                                                                 Teléfono: (33) 36-57-58-93<br>
                                                                 Colonia Atlas<br>
                                                                 Guadajalara, Jalisco. México.<br>
                                                                 Abierto de Lunes a Sábado de 10 am. a 2 pm. <br>

                                                        </p>
                                                </div>
                                        </article>
                                        <article>
                                                <h1>Preguntas frecuentes</h1>
                                                        <div id="accordion" role="tablist">
                                                                <div class="card">
                                                                <div class="card-header" role="tab" id="headingOne">
                                                                <h5 class="mb-0">
                                                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        ¿Qué es la Verduleria del abuelo y quiénes lo conforman?
                                                                        </a>
                                                                </h5>
                                                                </div>

                                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                                                <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div>
                                                                </div>
                                                                </div>


                                                                <div class="card">
                                                                <div class="card-header" role="tab" id="headingTwo">
                                                                <h5 class="mb-0">
                                                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        ¿Qué tipo de productos puedo comprar?
                                                                        </a>
                                                                </h5>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                                                <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div>
                                                                </div>
                                                                </div>


                                                                <div class="card">
                                                                <div class="card-header" role="tab" id="headingThree">
                                                                <h5 class="mb-0">
                                                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        ¿De donde provienen nuestros productos?
                                                                        </a>
                                                                </h5>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                                                <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div>
                                                                </div>
                                                                </div>
                                                        </div>
                                        </article>
                                        <article id="resultado">
                                                
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