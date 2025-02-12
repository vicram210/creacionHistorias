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

    <div class="align-items-center justify-content-center">
        <a href="index.php">
            <img src="logo.png" alt="" class="logo">
        </a>
    </div>

    <div class="container">
        <div class="left-section">
            <img src="imagen-iniciar-sesion.png" alt="Ilustración de equipo trabajando">
        </div>
        <div class="right-section">
            <h2>Inicia sesión</h2>
            <form>
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Introduce tu email">
                
                <div class="d-flex justify-content-between align-items-center password mt-4">
                    <div>
                        <label for="password">Contraseña</label>
                    </div>    
                    
                    <div class="forgot-password">
                        <a href="#">¿Olvidada?</a>
                    </div>
                </div>
                    
                <input type="password" id="password" placeholder="Introduce tu contraseña">
                
                
                
                <button type="submit">Iniciar sesión</button>
                
                <p class="register">¿Eres Nuevo? <a href="registro.php">Regístrate</a></p>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php
    //Quiero que cuando alguien se inicie sesión, se compruebe si el correo y la contraseña coinciden con los guardados en el archivo de texto creado llamado "usuarios.txt"
    //Para ello, primero debo comprobar si se ha enviado el formulario

    if(isset($_POST['email']) && isset($_POST['password'])){
        //Si se ha enviado el formulario, guardo los datos en el archivo de texto
        $email = $_POST['email'];
        $password = $_POST['password'];

        //Abro el archivo de texto en modo lectura
        $archivo = fopen("usuarios.txt", "r");

        //Leo el archivo de texto línea a línea
        while(!feof($archivo)){
            $linea = fgets($archivo);
            $datos = explode(";", $linea);

            //Compruebo si el correo y la contraseña coinciden
            if($datos[0] == $email && $datos[1] == $password){
                echo "¡Bienvenido!";
                break;
            }
        }

        fclose($archivo);
    }
    ?>
</body>
</html>