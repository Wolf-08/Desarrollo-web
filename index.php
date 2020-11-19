<?php include_once 'includes/templates/header.php';?>
<section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi minus, maiores aliquam debitis velit deleniti, dolor magni nihil accusamus fugiat sapiente voluptatem mollitia perferendis quasi repellendus quidem, soluta eum! Consequuntur.

        </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4"> 
                <source src="video/video.webm" type="video/webm"> 
                <source src="video/video.ogv" type="video/ogv"> 
                    
                </video>
            <!--Contenedor Video-->
        </div>
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
    <?php
        try{
          //Traemos el archivo que genera la conexion
          //a la base de datos
          require_once('includes/funciones/conexion.php');
          $sql =" SELECT * FROM `categoria_evento` ";
          //todo el código sql va en esta variable
          $resultado = $conn->query($sql);
          //En resultado se guarda el resultado del query 
          //que se genera con la base 
        }catch(Exception $e){
          //Muestra el error en caso de que falle  
          //la base de datos
          echo $e->getMessage();

        }

    ?>
                     <nav class="menu-programa">
                     <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){ ?>
                     <?php $categoria= $cat['cat_evento']; ?>
                     
                        <a href="#<?php echo strtolower($caegoria); ?>"> 
                        <i class="fa <?php echo $cat['icono']?>" aria-hidden="true"></i><?php echo $caegoria ?> </a>
                        
                    
                    <?php } ?>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CCS3 y JavaScript</h3>
                            <p><i class="far fa-clock"></i> 16:00 hrs</p>
                            <p> <i class="far fa-calendar-alt"></i>18 de Dic</p>
                            <p><i class="fas fa-user"></i>Jose Alejandro Montecillo</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Response Web Design</h3>
                            <p><i class="far fa-clock"></i> 16:30 hrs</p>
                            <p> <i class="far fa-calendar-alt"></i>18 de Dic</p>
                            <p><i class="fas fa-user"></i>Jose Alejandro Montecillo</p>
                        </div>
                        <a href="#" class="boton float-right">Ver todo</a>
                    </div>
                    <!--Talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser Frelancer</h3>
                            <p><i class="far fa-clock"></i> 16:00 hrs</p>
                            <p> <i class="far fa-calendar-alt"></i>18 de Dic</p>
                            <p><i class="fas fa-user"></i>Jose Alejandro Montecillo</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Como vender tu marca </h3>
                            <p><i class="far fa-clock"></i> 16:30 hrs</p>
                            <p> <i class="far fa-calendar-alt"></i>18 de Dic</p>
                            <p><i class="fas fa-user"></i>Jose Alejandro Montecillo</p>
                        </div>
                        <a href="#" class="boton float-right">Ver todo</a>
                    </div>
                    <!--Talleres-->
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Programa en 10 min</h3>
                            <p><i class="far fa-clock"></i> 16:00 hrs</p>
                            <p> <i class="far fa-calendar-alt"></i>18 de Dic</p>
                            <p><i class="fas fa-user"></i>Jose Alejandro Montecillo</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologias del futuro</h3>
                            <p><i class="far fa-clock"></i> 16:30 hrs</p>
                            <p> <i class="far fa-calendar-alt"></i>18 de Dic</p>
                            <p><i class="fas fa-user"></i>Jose Alejandro Montecillo</p>
                        </div>
                        <a href="#" class="boton float-right">Ver todo</a>
                    </div>
                    <!--Talleres-->
                </div>
            </div>
        </div>
    </section>
    <!--programa-->
    <!-- Invitados -->
    <?php include_once 'includes/templates/invitados.php';?>
    <!-- Invitados -->
    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>
                    Invitados
                </li>
                <li>
                    <p class="numero"></p>
                    Talleres
                </li>
                <li>
                    <p class="numero"></p>
                    Dias
                </li>
                <li>
                    <p class="numero"></p>
                    Conferencias
                </li>
            </ul>
        </div>
    </div>
    <section class="precion seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>

                            <li><i class="fas fa-check"></i>Todas las conferencias</li>

                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>

                            <li><i class="fas fa-check"></i>Todas las conferencias</li>

                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="#" class="boton">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>

                            <li><i class="fas fa-check"></i>Todas las conferencias</li>

                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div id="mapa" class="mapa"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial ">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, veritatis a. Molestias aperiam eveniet nihil, voluptatum architecto pariatur provident dolorem maiores eligendi reprehenderit ab odio, atque officiis labore. Sit, tene</p>
                    <footer class="info-testimonial clearfix">
                        <img src="/img/testimonial.jpg" alt="ImagenTestimonial">
                        <cite>
                        Rolando Aponto Escobedo <span>Diseñador en @prisma</span>
                    </cite>
                    </footer>
                </blockquote>
            </div>
            <!--Fin Del testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, veritatis a. Molestias aperiam eveniet nihil, voluptatum architecto pariatur provident dolorem maiores eligendi reprehenderit ab odio, atque officiis labore. Sit, tene</p>
                    <footer class="info-testimonial clearfix">
                        <img src="/img/testimonial.jpg" alt="ImagenTestimonial">
                        <cite>
                        Rolando Aponto Escobedo <span>Diseñador en @prisma</span>
                    </cite>
                    </footer>
                </blockquote>
            </div>
            <!--Fin Del testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, veritatis a. Molestias aperiam eveniet nihil, voluptatum architecto pariatur provident dolorem maiores eligendi reprehenderit ab odio, atque officiis labore. Sit, tene</p>
                    <footer class="info-testimonial clearfix">
                        <img src="/img/testimonial.jpg" alt="ImagenTestimonial">
                        <cite>
                        Rolando Aponto Escobedo <span>Diseñador en @prisma</span>
                    </cite>
                    </footer>
                </blockquote>
            </div>
            <!--Fin Del testimonial-->
        </div>
    </section>
    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate</p>
            <h3>GDLWebCamp</h3>
            <a href="#" class="boton transparente">Registro</a>
        </div>
    </div>
    <!--Newsletter-->
    <section class="seccion">
        <h2>Faltan
        </h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id='dias' class="numero"></p> Dias
                </li>
                <li>
                    <p id='horas' class="numero"></p> Horas
                </li>
                <li>
                    <p id='minutos' class="numero"></p> Minutos
                </li>
                <li>
                    <p id='segundos' class="numero"></p> Segundos
                </li>
            </ul>
        </div>
    </section>
    <?php include_once 'includes/templates/footer.php';?>
  