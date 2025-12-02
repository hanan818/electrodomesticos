<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Electrodomesticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .navbar-custom {
            background-color: #ffffff; /* Fondo blanco */
            border-bottom: 1px solid #0d6efd; /* Línea inferior sutil (como en el ejemplo) */
            padding-top: .75rem;
            padding-bottom: .75rem;
        }
        .navbar-custom .nav-link {
            color: #394046ff; /* Texto gris por defecto */
            font-weight: 500;
            margin-right: 2rem;
            padding-bottom: 0.8rem;
            position: relative;
            text-transform: uppercase; /* Para que luzca como en el ejemplo */
        }
        /* Estilo para simular la línea azul activa (activo o al pasar el ratón) */
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: #0d6efd; /* Azul principal */
        }
        .navbar-custom .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 30px; /* Ancho de la línea */
            height: 3px;
            background-color: #ffffffff; /* Color azul de la línea */
            border-radius: 2px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid px-5">
    
    <a class="navbar-brand me-5" href="#">
        <div style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid #ced4da;"></div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSimple" aria-controls="navbarNavSimple" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavSimple">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index_usuarios.php">Usuarios</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index_tipo.php">Tipo de Producto</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index_producto.php">Productos</a>
        </li>
        
      </ul>
      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" style="color: #fd310dff;" href="login.php">CERRAR SESIÓN</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container mt-4">
    <p class="text-muted"></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>