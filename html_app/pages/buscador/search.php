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
                <link rel="stylesheet" type="text/css" href="../../shop.css">
				<script src='../../shop.js' type="text/javascript"></script> 
				<?php
                require '../../fonts.php';
                ?> 
                
            <title>Buscar productos</title>
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
								echo '
								<form method="post" action="../../pages/buscador/search.php?go" id="searchform">
									<input type="text" name="name"  class="buscador" placeholder="'.$_POST['name'].'">
									<input type="submit" name="submit" value="Buscar!" class="btn btn-success" style="box-shadow: 5px; margin-bottom: 5px;">
								</form>
								';
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
													<article style=" list-style: none; padding: 10px; overflow: hidden; margin-left: 5%;"> 
													<?php
														if(isset($_POST['submit'])){
														if(isset($_GET['go'])){
														if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
														$name=$_POST['name'];

														//connect to the database
														//$db=mysql_connect("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error()); 
														$mydb= new PDO('mysql:host=localhost; dbname=proyecto_tienda_online', 'root', '');
														//-select the database to use
														//$mydb=mysql_select_db("proyecto_tienda_online");

														//-query the database table
														$sql="SELECT idFrutas,fruta_desc,cant_existencia,precio,nombre,imagen FROM frutas WHERE fruta_desc LIKE '%" . $name . "%' OR nombre LIKE '%" . $name ."%'";

														//-run the query against the mysql query function
														//$result=mysql_query($sql);
														$result = $mydb->Query($sql);
														//-count results

														//$numrows=mysql_num_rows($result);
														$numrows= $result->rowCount();
														echo "<p>" .$numrows . " resultados para " . stripslashes($name) . "</p>"; 

														//-create while loop and loop through result set
														while($row=$result->fetch()){

															/*$frutaDesc =$row['fruta_desc'];
															$LastName=$row['nombre'];
															$ID=$row['idFrutas'];
																
														//-display the result of the array

														echo "<ul>\n"; 
														echo "<li>" . "<a href=\"detallesProducto.php?id=$ID\">"  .$FirstName . " " . $LastName . "</a></li>\n";
														echo "</ul>";*/

														echo '
														<form action="../../pages/detallesProducto/detallesProducto.php" method="post">
														<li style="float:left"> <div class="card" style="width: 17rem; margin: 10px; box-shadow: 0px 1px 1px rgba(0,0,0,0.5);">
														<img class="card-img-top" src="'.$row['imagen'].'" alt="Card image cap" style="height: 13rem; overflow: hidden;">
														<div class="card-body">
														<h4 class="card-title">' .$row['nombre']. '</h4>
														<p class="card-text">' .$row['fruta_desc']. '</p>
														<ul style="list-style: none;">

														<input type="hidden" name="idFrutas" value="'.$row['idFrutas'].'">
														<!-- <input type="hidden" name="fruta_desc" value="'.$row['fruta_desc'].'">
														<input type="hidden" name="cant_existencia" value="'.$row['cant_existencia'].'">
														<input type="hidden" name="precio" value="'.$row['precio'].'">
														<input type="hidden" name="nombre" value="'.$row['nombre'].'">
														<input type="hidden" name="imagen" value="'.$row['imagen'].'"> -->
																

																<li><input type="submit" class="btn btn-primary" value="Ver producto"></li>
																<li><p href="#" class="btn btn-light" style="position: absolute; right: 0; top: 1%; right: 1%;">MX $'.$row['precio'].'</p></li>
														
														</ul>
														</div>
														</div>
														</li>
														</form>
														';


														}
														}
														else{
														echo "<p>Porfavor, ingresa algo para buscar</p>";
														}
														}
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