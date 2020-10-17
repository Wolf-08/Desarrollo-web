<?php 
  $conn=new mysqli('localhost','root','root','gdlweb');

  if($conn->connect_error){
    //Se verifica que se pueda hacer la conexion a la 
    //base de datos
    echo $error -> conn->connect_error;
  }
?>