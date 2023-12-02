<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStore</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="./estilos/productos.css" rel="stylesheet">
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
                    <a class="nav-link" href="./admin.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4 text-light">Bienvenido a La Plata - GameStore</h1>
    <p class="text-light">En esta página podrás encontrar los mejores juegos para tu consola favorita.</p>
    <h2 class="mb-4 text-light">Lista de Juegos</h2>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha de Lanzamiento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conexion = mysqli_connect("localhost:3307", "root", "", "proyecto_integrador");

            $query = "SELECT * FROM productos";
            $resultado = mysqli_query($conexion, $query);

            while($unaFila = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>".$unaFila["nombre_producto"]."</td>";
                echo "<td>$".$unaFila["precio_producto"]."</td>";
                echo "<td>".$unaFila["descripcion_producto"]."</td>";
                echo "</tr>";
            }

            mysqli_close($conexion);
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
