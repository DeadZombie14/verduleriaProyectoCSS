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
                <link rel="stylesheet" type="text/css" href="header.css">
                <link rel="stylesheet" type="text/css" href="footer.css">
                <link rel="stylesheet" type="text/css" href="shop.css">
                <script src='shop.js' type="text/javascript"></script> 
                <?php
                require 'fonts.php';
                ?>
            <title>Shop</title>
        </head>


        <body>
                <header class="BarraCabecera">
                        <ul>
                                <li>
                                                <img class="logo" src="img/logo_fondo.png" alt="Logo">
                                </li>
                                <li>
                                                <h1 class="nombre_empresa">Verduleria del abuelo</h1> 
                                </li>
                        </ul>
                        <div class="barra_idioma"> 
                                <form method="post" action="pages/buscador/search.php?go" id="searchform">
                                        <input type="text" name="name"  class="buscador" placeholder="Buscar productos...">
                                        <input type="submit" name="submit" value="Buscar!" class="btn btn-success boton_buscar" style="box-shadow: 5px; margin-bottom: 5px;">
                                </form>
                                <!--<input type="text" class="buscador" placeholder="Buscar...">-->
                        </div> 

                        <nav>
                                <ul>
                                        
                                        <li class="parent"><a href="#">Inicio</a></li>
                                        <li class="parent"><a href="pages/list_shop/list_shop.php">Productos</a>
                                                <ul>
                                                        <li><a href="#">Verduras</a></li>
                                                        <li><a href="#">Frutas</a></li>
                                                        <li><a href="#">Especiales</a></li>
                                                </ul>
                                        </li>
                                        <li class="parent"><a href="#">Servicios</a>
                                                <ul>
                                                        <li><a href="pages/servicioDomicilio/servicioDomicilio.php">Servicio a domicilio</a></li>
                                                        <li><a href="pages/datosExtra/datosExtra.php">Enviar email</a></li>
                                                </ul>
                                        </li>
                                        <li class="parent"><a href="pages/quienesSomos/quienesSomos.php">Datos de contacto</a></li>
                                        
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
                                        <article>
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                <a href="pages/list_shop/list_shop.php"><h3 class="btn btn-primary">Ver listado de productos</h3></a>
                                                </div>
                                                </div>
                                                <div class="carousel-item">
                                                <a href="#"><img class="d-block w-100" src="img/slide_2.png" alt="Second slide"></a>
                                                </div>
                                                <div class="carousel-item">
                                                        <!--<img class="d-block w-100" src="img/slide_3.png" alt="Third slide" style="height: 80px;">-->
                                                        <div class="titulo_ofertas"><h2>$$$ Productos en rebaja $$$</h2></div>
                                                        <div class="ofertas">       
                                                                <div class="card" style="width: 17rem; margin: 10px; box-shadow: 0px 1px 1px rgba(0,0,0,0.5);">
                                                                        <img class="card-img-top" src="img/jitomates.jpg" alt="Card image cap" style="height: 13rem; overflow: hidden;">
                                                                        <div class="card-body">
                                                                                <h4 class="card-title">Jitomate bola </h4>
                                                                                <p class="card-text">20% descuento en compra de 10kg o más</p>
                                                                                <ul style="list-style: none;">
                                                                                <li><input type="submit" class="btn btn-primary" value="Ver producto"></li>
                                                                        
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                                <div class="card" style="width: 17rem; margin: 10px; box-shadow: 0px 1px 1px rgba(0,0,0,0.5);">
                                                                        <img class="card-img-top" src="img/pina.jpg" alt="Card image cap" style="height: 13rem; overflow: hidden;">
                                                                        <div class="card-body">
                                                                                <h4 class="card-title">Piña </h4>
                                                                                <p class="card-text">Compra al 2 x 1 solo esta semana</p>
                                                                                <ul style="list-style: none;">
                                                                                <li><input type="submit" class="btn btn-primary" value="Ver producto"></li>
                                                                        
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                                <div class="card" style="width: 17rem; margin: 10px; box-shadow: 0px 1px 1px rgba(0,0,0,0.5);">
                                                                        <img class="card-img-top" src="img/mandarinas.jpg" alt="Card image cap" style="height: 13rem; overflow: hidden;">
                                                                        <div class="card-body">
                                                                                <h4 class="card-title">Mandarina </h4>
                                                                                <p class="card-text">20% descuento en compra de 10kg o más</p>
                                                                                <ul style="list-style: none;">
                                                                                <li><input type="submit" class="btn btn-primary" value="Ver producto"></li>
                                                                        
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                                </a>
                                                </div>
                                        </article>
                                        <article>                                                                
                                                <h1>Una excelente oportunidad online</h1>
                                                <p>
                                                Nuestra empresa lleva comprometida desde hace más de 15 años en conseguirle los productos al mejor precio y calidad posibles.
                                                Elegimos personalmente nuestras compras de productores selectos en el mercado de abastos para poder ofrecerle una alta variedad de productos, la idea
                                                es si no lo tenemos, se lo conseguimos. Puedes también optar por comprar tus productos físicamente, en nuestro local. <a href="#">Más información</a>
                                                </p>
                                        </article>
                                        <article>
                                                        <h1>Salud y gusto</h1>
                                                        <p>
                                                                        En general, la fruta es fuente de vitaminas, fibra y minerales. Gran cantidad de frutas de verano aportan buenas dosis de vitamina C, un gran antioxidante, que nos ayuda en la lucha contra los radicales libres y, por tanto, combate naturalmente el envejecimiento.  La fibra nos facilita las digestiones y favorece el mantenimiento de los intestinos. Además, la fruta incluye diversos fitocomponentes positivos para la salud. Por ejemplo, la sandía es rica en licopeno, un colorante natural que también se presenta en otras frutas y verduras rojas y que resulta favorable en la prevención del cáncer y del colesterol.
                                                                        
                                                                        El aporte calórico de la fruta proviene de su contenido en azúcares, especialmente fructosa, sacarosa y glucosa, que son de fácil absorción por el organismo, de fácil digestión y que nos sacian pronto y durante bastante tiempo. Por eso, la fruta es un perfecto tentempié para entre horas. Y un alimento perfecto para las dietas hipocalóricas. Comiendo fruta hacemos salud y mantenemos la línea.                                                                </p>
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

                <footer>
                        <ul>
                                <li><a href="#"><img src="img/fac_icon.png" alt="facebook" class="fac_icon"></a></li>
                                <li><p>Verduleria del abuelo © 2017</p></li>
                                <li><a href="#"><img src="img/gmail_icon.png" alt="gmail" class="gmail_icon"></a></li>
                        </ul>
                </footer>

                </div>
        </body>

</html>