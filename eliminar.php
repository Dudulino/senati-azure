<?php
include 'conexion.php';

?>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "DELETE FROM Alumno WHERE id = $id";
    $stmt = sqlsrv_query($conn, $sql);

    if($stmt) {
        echo "Eliminado correctamente";
    } else {
        echo "No se puede eliminar";
    }

 }

 ?>