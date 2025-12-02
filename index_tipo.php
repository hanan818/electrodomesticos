<?php
include('connection.php');
include('menu.php'); // Asegúrate de que este archivo contiene el menú

$con = connection();

$sql = "SELECT * FROM tipo_producto";
$query = mysqli_query($con, $sql)
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Productos Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* Fondo gris claro consistente con el dashboard */
        body {
            background-color: #f8f9fa; 
            min-height: 100vh;
        }
        /* Estilos del menú (necesarios si 'menu.php' no los incluye) */
        /* ... (Deberías asegurar que los estilos del menú están en un CSS o en menu.php) ... */
    </style>
</head>
<body>
    
    <div class="container my-5">
        
        <h1 class="mb-4 text-primary">Tipos de Productos</h1>
        
        <div class="card p-4 shadow-sm mb-5 border-primary" style="border-left: 5px solid #0d6efd;">
            <h3 class="card-title text-primary mb-3">➕ Agregar Nuevo Tipo de Producto</h3>
            
            <form action="insert_tipo.php" method="POST" class="row g-3">
                <div class="col-md-5">
                    <input type="text" name="nombre" placeholder="Tipo de producto" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <input type="submit" value="Agregar tipo" class="btn btn-primary w-100">
                </div>
            </form>
        </div>

        <div>
            <h2 class="mb-3">📋 Tipos de productos registrados</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th class="text-center">Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id_tipo']) ?></td>
                            <td><?= htmlspecialchars($row['nombre']) ?></td>
                            <td><?= htmlspecialchars($row['descripcion']) ?></td> 

                            <td>
                                <a href="update_tipo.php?id_tipo=<?= htmlspecialchars($row['id_tipo']) ?>" class="btn btn-sm btn-info text-white me-2">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <a href="delete_tipo.php?id_tipo=<?= htmlspecialchars($row['id_tipo']) ?>" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash-fill"></i> Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>