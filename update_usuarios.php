<?php
include('connection.php');
include('menu.php');
$con = connection();


$id_usuario = $_GET['id_usuario'];

$sql = "SELECT * FROM usuarios WHERE id_usuario= '$id_usuario'";
$query =mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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

            <div class="usuarios_form">
                <form action="edit_usuarios.php" method="POST">
                    <h1 class="text-center text-primary mb-4">Editar Usuarios</h1>
                    
                    <div class="mb-3">
                        <label class="form-label">ID </label>
                        <input type="hidden" name="id_usuario" placeholder="id_usuario" value="<?= $row['id_usuario'] ?>">
                        <input type="text" class="form-control" value="<?= $row['id_usuario'] ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control" value="<?= $row['usuario'] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="text" id="contrasena" name="contraseña" placeholder="Contraseña" class="form-control" value="<?= $row['contraseña'] ?>">
                    </div>

                                <input type="submit" value="Actualizar " class="btn btn-primary w-100 mt-3">
                </form>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>