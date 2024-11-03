<?php
 include 'conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insertar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>.:INSERTAR:.</title>

    
</head>
<body>
    <form method="post">
        <div>
            <label for ="">Id</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for ="">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for ="">Apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div>
            <input type="submit" value="Guardar regristro" name ="Guardar">
            <button class="btn btn-warning"><a href="index.php">Cancelar</a></button>
        </div>
    </form>
</body>
</html> 
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['Guardar']) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $sql = "INSERT INTO Alumno(id, nombre, apellidos) VALUES (?,?,?)";
            $params =array($id, $nombre, $apellidos);

            $stmt = sqlsrv_query($conn, $sql, $params);
            if ($stmt){
                echo "Registrado Correctamente";
            } else {
                echo "No se pudo insertar el registro";
            }

            echo "$id | $nombre | $apellidos";

        }
    } else {
        echo "No se hizo nada";
    }

?>