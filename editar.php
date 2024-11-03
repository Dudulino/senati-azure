<?php 

  //include("conexion.php");

?>



<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="editar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

</head>

<body>

<form method="POST">

  <div>

  <label for="">id</label>

  <input type="text" name="id">

  </div>

  <div>

  <label for="">nombre</label>

  <input type="text" name="nombre">

  </div>

  <div>

  <label for="">apellidos</label>

  <input type="text" name="apellidos">

  </div>

  <div>

    <input type="submit" value="actualizar registro" name="actualizar">

    <button class="btn btn-warning"><a href="index.php">cancelar</a></button'>

  </div>



  </form>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if($_POST['actualizar']) {

  $id = $_POST['id'];

  $nombre = $_POST['nombre']; 

  $apellidos = $_POST['apellidos']; 



  $sql= "UPDATE alumno set nombre = "."'"."$nombre"."'".", apellidos ="."'"."$apellidos" . "'". "WHERE id= $id";



  

  $stmt = sqlsrv_query($conn, $sql,);



  if($stmt) {

    echo "actualizado correctamente";



  }else{

    echo "No se pudo actualizar";

  }

  echo "$id | $nombre | $apellidos";

  }

} else {

  echo "ocurrio un error.";

}

?>