<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo 📖</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/CSScatalogo.css">
    <link rel="shortcut icon" href="./imagenes/logo2.png">

</head>
<body>
    <div class="menu">
        <a href="index.php">
            <img src="./imagenes/logo.png" alt="" class="logo">
        </a>
    </div>

    <div class="container mt-4">
        <div class="row">
            <?php
                $json = file_get_contents("historias.json");
                $historias = json_decode($json, true);
                foreach ($historias as $historia) {
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card custom-card'>";
                    echo "<img src='".$historia['foto']."' class='card-img-top' alt='...'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>".$historia['titulo']."</h5>";
                    echo "<p class='card-text info'><span class='fw-bold'>Creador:</span> ".$historia['autor']."</p>";
                    echo "<p class='card-text'>".$historia['descripcion']."</p>";
                    echo "<p class='card-text info'>".$historia['jugando']." usuarios activos 🟢</p>";
                    echo "<a href='#' class='btn btn-primary button-edit'>Jugar</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>