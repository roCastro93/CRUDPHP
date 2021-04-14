<?php

include("db.php");

if(isset($_POST['save_task'])){
  $nombre = $_POST['nombre'];
  $rut = str_replace(array('-','.'), '', $_POST['Rut']);
  $title = $_POST['title'];
  $description  = $_POST['description'];
  
  $query = "INSERT INTO task(nombre, Rut, title, description) VALUES ('$nombre','$rut','$title', '$description')";
  $resultado= mysqli_query($conn, $query);

  if(!$resultado) {
      die("query fallo");
  }
  $_SESSION['message'] = 'Tarea guarda exitosamente';
  $_SESSION['message_type'] = 'success';
   header("Location: index.php");
}
?>