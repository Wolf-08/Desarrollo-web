<?php include_once 'includes/templates/header.php';?>
    </section>
    <section class="seccion contenedor">
        <h2> Calendario de Eventos </h2>
        <?php
        try{
          //Traemos el archivo que genera la conexion
          //a la base de datos
          require_once('includes/funciones/conexion.php');
          $sql =" SELECT evento_id, nombre_evento,fecha_evento,hora_evento,cat_evento,nombre_invitado,apellido_invitado ";
          $sql .=" FROM eventos ";
          $sql .=" INNER JOIN categoria_evento ";
          $sql .=" ON eventos.id_cat_evento= categoria_evento.id_categoria ";
          $sql .=" INNER JOIN invitados";
          $sql .=" ON eventos.invitado_id = invitados.invitado_id ";
          $sql .="ORDER BY evento_id";
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
         <?php
         $calendario = array(); 
        while($eventos = $resultado->fetch_assoc()){ 
          //obtener fecha del evento 
          $fecha = $eventos['fecha_evento'];
          
          $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos ['hora_evento'],
            'categoria' => $eventos['cat_evento'],
            'invitado' => $eventos['nombre_invitado'] ."". $eventos['apellido_invitado'],
          );
          //se agrupan los elementos de la misma fecha
          $calendario [$fecha][]= $evento;
          ?>
        <?php }
        //imprime todos los eventos 
        foreach($calendario as $dia => $lista_eventos){ ?>
          <h3>
          <i class="far fa-calendar-alt"></i>
          <?php echo $dia; ?>
        </h3>
        <?php} ?>
        
          <pre>
            <?php 
            var_dump($calendario)
            ?>
          </pre>

       </div>
        <?php
        //Siempre cerrar la base de datos
        $conn->close();
        ?>

    </section>
    <?php include_once 'includes/templates/footer.php';?>
