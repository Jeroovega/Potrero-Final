<?php
if(!empty($_POST["nombre_producto"]) && !empty($_POST["precio_producto"]) && !empty($_POST["descripcion_producto"])){
    $conexion = mysqli_connect("localhost:3307", "root", "", "proyecto_integrador");

$query= 'UPDATE productos SET nombre_producto = "'.$_POST["nombre_producto"].'", precio_producto = "'.$_POST["precio_producto"].'", descripcion_producto = "'.$_POST["descripcion_producto"].'" WHERE id_producto = '.$_GET["id"].'';
$resultado = mysqli_query($conexion, $query);

if($resultado){
    header("Location: ./admin.php");
} else{ 
    echo "Error al editar el producto";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStore - Agregar Juego</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/admin.css">
    <style>
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">LPGS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./productos.php">Menú - Producto</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./admin.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="text-center mb-4 text-light">Editar Juego</h1>

    <form method="post" action="">
        <div class="mb-3">
            <label for="nombre_producto" class="form-label text-light">Nombre</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
        </div>
        <div class="mb-3">
            <label for="precio_producto" class="form-label text-light">Precio</label>
            <input type="text" class="form-control" id="precio_producto" name="precio_producto" required>
        </div>
        <div class="mb-3">
            <label for="descripcion_producto" class="form-label text-light">Descripción</label>
            <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" required>
        </div>
        <button type="submit" class="btn btn-primary">Editar Juego</button>
        <a href='./admin.php' class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
