<?php include_once 'includes/templates/header.php';?>
    </section>
    <section class="seccion contenedor">
        <h2> Calendario de Eventos </h2>
        <?php
        try{
          //Traemos el archivo que genera la conexion
          //a la base de datos
          require_once('includes/funciones/conexion.php');
          $sql = "SELECT * from eventos"; 
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

        <div class="calendario">
          <?php  //fetch assoc es como arreglo 
          //con el while es para mostrar todos 
          //los registros
          while ($eventos=$resultado->fetch_assoc()){ 
          echo $eventos ['nombre_evento'];
          echo "<br>";   
            
          }
         ?>
       </div>
        <?php
        //Siempre cerrar la base de datos
        $conn->close();
        ?>

    </section>
    <?php include_once 'includes/templates/footer.php';?>
  