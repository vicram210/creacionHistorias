<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryPath 📖</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/CSSindex.css">
    <link rel="shortcut icon" href="./imagenes/logo2.png">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center  background-storypath">
        <div class="margin-title">
            <h1><span class="color-story">Story</span><span class="color-path">Path</span>📖</h1>
            <p class="color-grey">Crea, comparte y juega historias interactivas donde tus decisiones cambian el final!!!</p>
            
            <div class="d-flex gap-5 mt-5">
                <a href="login.php" class="btn iniciar-sesion">Iniciar Sesion</a>
                <a href="registro.php" class="btn registrarse">Registrarse</a>
            </div>
            
        </div>

        <div>
            <img src="./imagenes/logo.png" alt="StoryPath" class="d-block w-100 h-100">
        </div>
        
    </div>
    
    <div class="text-center p-5"> 
        <h2>Secciones</h2>
        <div class="d-flex gap-5 mt-5 justify-content-center align-items-center">
            <div>
                <a href="catalogo.php">
                <img src="./imagenes/historias-populares.png" class="w-50" alt="">
                </a>
            </div>
            <div>
                <img src="./imagenes/crear-historia.png" class="w-50" alt="">
            </div>
            <div>
                <a href="catalogo.php">
                <img src="./imagenes/jugar-historia.png" class="w-50" alt="">
                </a>
            </div>
            <div>
                <img src="./imagenes/ajustes.png" class="w-50" alt="">
            </div>
        </div>

    </div>

    <div class="text-center p-5">
        <h2>Historias Destacadas</h2>
        <p>Las mejores historias creadas por la comunidad!!</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="./imagenes/abuela.jpg" class="d-block w-100 h-100" alt="Historia 1">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./imagenes/perro.jpg" class="d-block w-100 h-100" alt="Historia 2">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./imagenes/gato.jpg" class="d-block w-100 h-100" alt="Historia 3">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="./imagenes/raton.jpg" class="d-block w-100 h-100" alt="Historia 4">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./imagenes/leon.jpg" class="d-block w-100 h-100" alt="Historia 5">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./imagenes/rana.jpg" class="d-block w-100 h-100" alt="Historia 6">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agrega más carousel-item según sea necesario -->
            </div>

        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>