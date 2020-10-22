<?php include_once 'includes/templates/header.php';?>
    </section>
    <section class="seccion contenedor">
        <h2> Invitados </h2>
        <?php
        try{
          //Traemos el archivo que genera la conexion
          //a la base de datos
          require_once('includes/funciones/conexion.php');
          $sql =" SELECT * FROM invitados ";
          //todo el código sql va en esta variable
          $resultado = $conn->query($sql);
          //En resultado se guarda el resultado del query 
          //que se genera con la base 
          }catch(Exception $e){
          //Muestra el error en caso de que falle  
          //la base de datos
          echo $e->getMessage();} ?>
     <section class="invitados contenedor">
        <h2>Nuestros invitados</h2>
        <ul class="lista-invitados clearfix">
          <?php while ($invitados = $resultado->fetch_assoc()) { ?>
            <li>
                <div class="invitado">
                    <img src=" img/<?php echo $invitados['url_imagen']?>" alt="Inivitado">
                    <p><?php echo $invitados['nombre_invitado']. "" . $invitados['apellido_invitado'] ?></p>
                </div>
            </li>     
          <?php } ?>
          </ul>
    </section>
        <?php
        //Siempre cerrar la base de datos
        $conn->close();
        ?>
    </section>
    <?php include_once 'includes/templates/footer.php'; ?>