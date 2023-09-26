<!DOCTYPE html>
<html>
<head>
    <title>Lista de Películas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        
        <h1 class=>Lista de Películas</h1>

        <div class="row justify-content-center vh-100">
            <?php
            foreach ($movies as $movie):
            ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="<?= $movie['portada'] ?>" class="card-img-top rounded w-75 mx-auto mt-4" style="height: 280px; object-fit: cover;" alt="peli">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie['nombre'] ?></h5>
                        <p class="card-text"><?= $movie['director'] ?></p>
                        <a class="btn btn-primary" href="index.php?action=view&id=<?= $movie['id'] ?>">
                    Detalles</a>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</body>
</html>
