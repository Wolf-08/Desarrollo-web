<?php 
  $conn= mysqli_connect("localhost","root","root","gdlweb","3307");
//agregar siempre el puerto
  if($conn->connect_error){
    //Se verifica que se pueda hacer la conexion a la 
    //base de datos
    echo $error-> $conn->connect_error;
  }
?>