<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    
    <style>
        /* ================================================= */
        /* === 1. ESTILOS GLOBALES Y FONDO (GRADIENTE AZUL) === */
        /* ================================================= */
        body {
            font-family: 'Arial', sans-serif;
            /* Degradado de fondo azul más profesional */
            background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%); /* Azul fuerte a azul cielo */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        /* ================================================= */
        /* === 2. CONTENEDOR PRINCIPAL === */
        /* ================================================= */
        .main-wrapper {
            display: flex;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 1000px; 
            width: 90%;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .main-wrapper:hover {
            transform: translateY(-5px);
        }

        /* ================================================= */
        /* === 3. IMAGEN LATERAL === */
        /* ================================================= */
        .image-side {
            flex: 1;
            /* REEMPLAZA ESTA URL con la de tu imagen.
               Para mantener el esquema azul, intenta usar una imagen con tonos fríos. */
            background-image: url('https://tox.com/_next/image?url=https%3A%2F%2Fhub.tox.com%2Fstoryblok%2Fasset%2F1920x1440%2Fbbda377b8f%2F2024_tox_home_appliances.jpg%3F_hash%3Dm0U%252F77SceDHXpgG8NnPVHnAXa61DleF9SSgaKYPoKmM%253D&w=3840&q=75'); 
            background-size: cover;
            background-position: center;
            min-width: 400px;
        }

        /* ================================================= */
        /* === 4. FORMULARIO DE LOGIN === */
        /* ================================================= */
        .login-side {
            flex: 1;
            padding: 50px 40px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 350px;
        }

        /* Título */
        .login-side h1 {
            color: #333333;
            margin-bottom: 35px;
            font-size: 32px;
            border-bottom: 3px solid #007bff; /* Color azul primario */
            display: inline-block;
            padding-bottom: 5px;
            text-align: center;
            width: 100%;
        }

        /* Grupos de entrada */
        .input-group {
            margin-bottom: 25px; 
            text-align: left;
        }

        /* Etiquetas */
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555555;
            font-size: 16px;
        }

        /* Campos de entrada */
        .input-group input[type="text"],
        .input-group input[type="password"] {
            width: 100%;
            padding: 15px 12px; 
            border: 1px solid #ced4da; 
            border-radius: 8px; 
            box-sizing: border-box;
            font-size: 17px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        /* Efecto al enfocar (Focus) */
        .input-group input:focus {
            border-color: #007bff; /* Azul primario */
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25); /* Sombra de enfoque azul */
            outline: none;
        }

        /* Botón "Entrar" */
        .btn {
            background-color: #007bff; /* Azul primario */
            color: white;
            border: none;
            padding: 15px 25px; 
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.1s;
            margin-top: 20px;
        }

        /* Efecto Hover del Botón */
        .btn:hover {
            background-color: #0056b3; /* Azul ligeramente más oscuro */
        }
        
        /* Efecto Click del Botón */
        .btn:active {
            transform: translateY(1px);
        }

        /* ================================================= */
        /* === 5. MEDIA QUERIES (RESPONSIVIDAD) === */
        /* ================================================= */
        @media (max-width: 850px) {
            .main-wrapper {
                flex-direction: column; 
                max-width: 450px;
                width: 90%;
            }

            .image-side {
                border-radius: 12px 12px 0 0;
                height: 250px; 
                min-width: auto;
            }

            .login-side {
                border-radius: 0 0 12px 12px;
                min-width: auto;
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>
    <div class="main-wrapper">
        <div class="image-side">   
            </div>
        <div class="login-side">
            <h1>INICIAR SESIÓN</h1>
            <form action="ingresar.php" method="POST" >
    <div class="input-group">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" >
    </div>

    <div class="input-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña" >
    </div>
    <button type="submit" class="btn" name="ingresar">INGRESAR</button>
</form>
        </div>
    </div>
</body>
</html>


