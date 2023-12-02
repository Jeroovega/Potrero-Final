<?php

$idProducto = $_GET["id"];

$conexion = mysqli_connect("localhost:3307", "root", "", "proyecto_integrador");

$query = "DELETE FROM productos WHERE id_producto = $idProducto";
$result = mysqli_query($conexion, $query);

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStore - Eliminar Juego</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="./estilos/eliminar.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mb-4 text-light">¡Se eliminó el juego!</h1>
    <a href='./admin.php' class="btn btn-primary">Volver a Admin</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
