<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse 📖</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/CSSregistro.css">
    <link rel="shortcut icon" href="./imagenes/logo2.png">
</head>
<body>
    <div class="menu">
        <a href="index.php">
            <img src="./imagenes/logo.png" alt="" class="logo">
        </a>
    </div>

    <div class="page-container">
        <div class="left-half">
            <img src="./imagenes/imagen-iniciar-sesion.png" alt="" class="w-edit edit">
        </div>
        
        <div class="right-half">
            <div class="edit">
                <h2 class="text-center">Registrarse</h2>
                <form id="registerForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear cuenta</button>
                </form>

                <p id="mensaje" class="text-center mt-3"></p>
            </div>
        </div>
    </div>

    <script src="fetch.js"></script> <!-- Aquí se carga tu archivo de JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>