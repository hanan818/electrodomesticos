<?php
include('connection.php');
include('menu.php');
$con = connection();


$id_producto = $_GET['id_producto'];

$sql = "SELECT * FROM producto WHERE id_producto= '$id_producto'";
$query =mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* Fondo gris claro consistente con el dashboard */
        body {
            background-color: #f8f9fa; 
            min-height: 100vh;
        }
        .main-content {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
        <div class="card p-4 shadow-lg mx-auto" style="max-width: 500px;">

            <div class="tipo_form">
                <form action="edit_producto.php" method="POST">
                    <h1 class="text-center text-primary mb-4">Editar Producto</h1>
                    
                    <div class="mb-3">
                        <label class="form-label">ID </label>
                        <input type="hidden" name="id_producto" placeholder="id_producto" value="<?= $row['id_producto'] ?>">
                        <input type="text" class="form-control" value="<?= $row['id_producto'] ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" value="<?= $row['nombre'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" id="precio" name="precio" placeholder="Precio" class="form-control" value="<?= $row['precio'] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" id="stock" name="stock" placeholder="Stock" class="form-control" value="<?= $row['stock'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="id_tipo" class="form-label">id_tipo</label>
                        <select id="id_tipo" name="id_tipo" class="form-control" required>
                            <?php 
                                $queryTipos = mysqli_query($con, "SELECT id_tipo FROM tipo_producto");
                                while($tipo = mysqli_fetch_assoc($queryTipos)){
                                    $selected = ($row['id_tipo'] == $tipo['id_tipo']) ? 'selected' : '';
                                        echo "<option value='{$tipo['id_tipo']}' $selected>{$tipo['id_tipo']}</option>";
                                }
                            ?>
                        </select>
                        <label for="id_usuario" class="form-label">id_usuario</label>
                        <select id="id_usuario" name="id_usuario" class="form-control" required>
                            <?php 
                                $queryusuario = mysqli_query($con, "SELECT id_usuario FROM usuarios");
                                while($usuario = mysqli_fetch_assoc($queryusuario)){
                                    $selected = ($row['id_usuario'] == $usuario['id_usuario']) ? 'selected' : '';
                                        echo "<option value='{$usuario['id_usuario']}' $selected>{$usuario['id_usuario']}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    
                                <input type="submit" value="Actualizar " class="btn btn-primary w-100 mt-3">
                </form>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>