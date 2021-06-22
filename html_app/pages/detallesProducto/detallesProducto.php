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
                <link rel="stylesheet" type="text/css" href="detallesProducto.css">
                <script src='detallesProducto.js' type="text/javascript"></script> 
                <?php
                require '../../fonts.php';
                ?> 
                
            <title>Shop</title>
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
                                                        <li><a href="#">Especiales</a></li>
                                                </ul>
                                        </li>
                                        <li class="parent"><a href="#">Servicios</a>
                                        <ul>
                                                <li><a href="../../pages/servicioDomicilio/servicioDomicilio.php">Servicio a domicilio</a></li>
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
                                                        <?php
                                                        
                                                        try {
                                                                $conexion = new PDO('mysql:host=localhost; dbname=proyecto_tienda_online', 'root', '');
                                                                $result = $conexion->Query('Select * from Frutas where idFrutas LIKE '.$_POST['idFrutas'].'');

                                                                foreach ($result as $res) {
                                                                        echo '
                                                                        <form action="../../pages/detallesProducto/detallesProducto.php" method="post">
                                                                        
                                                                        <img class="card-img-top" src="'.$res['imagen'].'" alt="Card image cap" style="float: left;height: 13rem; width: 20rem; overflow: hidden;">
                                                                        <div class="card-body" style="float: left;">
                                                                          <h4 class="card-title">' .$res['nombre']. '</h4>
                                                                          <p class="card-text">' .$res['fruta_desc']. '</p>
                                                                          <ul style="list-style: none;">

                                                                          <input type="hidden" name="idFrutas" value="'.$res['idFrutas'].'">
                                                                          <input type="hidden" name="fruta_desc" value="'.$res['fruta_desc'].'">
                                                                          <input type="hidden" name="cant_existencia" value="'.$res['cant_existencia'].'">
                                                                          <input type="hidden" name="precio" id="precio" value="'.$res['precio'].'">
                                                                          <input type="hidden" name="nombre" value="'.$res['nombre'].'">
                                                                          <input type="hidden" name="imagen" value="'.$res['imagen'].'">
                                                                                

                                                                                
                                                                                <li><p href="#" class="btn btn-light" >MX $'.$res['precio'].' kg</p></li>
                                                                                <li><p class="btn btn-light">Total: $<span id="precioFinal">0</span> MX</p></li>

                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon" id="btnGroupAddon">Cantidad a ordenar</span>
                                                                                        <input type="number" class="form-control" placeholder="0" aria-label="Input group example" aria-describedby="btnGroupAddon" id="cantidadOrdenada">
                                                                                        <span class="input-group-addon" id="btnGroupAddon">kg</span>
                                                                                </div>

                                                                                
                                                                        </ul>
                                                                                
                                                                        </div>
                                                                        <input type="submit" class="btn btn-primary" value="Añadir al carrito" style="float: right;">
                                                                        
                                                                        </form>
                                                                        ';
                                                                }
                                                                
                                                        } catch (PDOException $e) {

                                                        }
                                                        ?>
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

                </div>
        </body>

</html>