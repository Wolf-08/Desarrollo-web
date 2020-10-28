<?php include_once 'includes/templates/header.php';?>
  
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
                  <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'];?>">
                    <img src=" img/<?php echo $invitados['url_imagen']?>" alt="Invitado">
                    <p><?php echo $invitados['nombre_invitado']. "" . $invitados['apellido_invitado'] ?></p>
                  </a>
                </div>
            </li>   
            <div style="display:none;">
              <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'];?>">
                  <h2> <?php echo $invitados['nombre_invitado'] ." ". $invitados['apellido_invitado']; ?></h2>             
                  <img src=" img/<?php echo $invitados['url_imagen']?>" alt="Invitado">
                  <p><?php echo $invitados['descripcion']; ?> </p>             
              </div>
            </div>
            
          <?php } ?>
          </ul>
    </section>
        <?php
        //Siempre cerrar la base de datos
        $conn->close();
        ?>
    <?php include_once 'includes/templates/footer.php'; ?>