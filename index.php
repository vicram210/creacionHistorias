<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSSindex.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center  background-storypath">
        <div>
            <h1><span class="color-story">Story</span><span class="color-path">Path</span></h1>
            <p>Crea, comparte y juega historias interactivas donde tus decisiones cambian el final!!!</p>

            <a href="login.php" class="btn btn-outline-light">Iniciar Sesion</a>
            <a href="register.php" class="btn btn-outline-secondary">Registrarse</a>
        </div>

        <div>
            <img src="logo.png" alt="StoryPath" class="d-block w-100 h-100">
        </div>
        
    </div>
    
    <div class="mt-5 text-center p-5"> 
        <h2>Secciones</h2>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>

    <div class="mt-5 text-center p-5">
        <h2>Historias Destacadas</h2>
        <p>Las mejores historias creadas por la comunidad!!</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="mario.jpg" class="d-block w-100 h-100" alt="Historia 1">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="cult of the lamb.jpeg" class="d-block w-100 h-100" alt="Historia 2">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="minecraft.jpg" class="d-block w-100 h-100" alt="Historia 3">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="miedo.jpg" class="d-block w-100 h-100" alt="Historia 4">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="nemo.jpg" class="d-block w-100 h-100" alt="Historia 5">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="mates.jpeg" class="d-block w-100 h-100" alt="Historia 6">
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