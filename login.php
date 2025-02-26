<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSSlogin.css">
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
                <h2 class="text-center">Iniciar Sesión</h2>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']); // SIN cifrar
            $file = "usuarios.txt";

            if (!file_exists($file)) {
                echo "<script>alert('No hay usuarios registrados.'); window.location='registro.php';</script>";
                exit();
            }

            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                list($existing_email, $existing_password) = explode('|', $line);
                
                // Verificar si el correo existe y la contraseña es exacta
                if ($email === $existing_email && $password === $existing_password) {
                    $_SESSION['email'] = $email;
                    echo "<script>alert('Inicio de sesión exitoso.'); window.location='index.php';</script>";
                    exit();
                }
            }

            echo "<script>alert('Correo o contraseña incorrectos.'); window.location='index.php';</script>";
        }
    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>