<!DOCTYPE html>
<html>
<head>
    <title>Lista de Películas</title>
</head>
<body>
<?php require 'view/header.php'; ?>
    <div class="container">
        
        <h1 class="mt-4 text-white">Lista de Películas</h1>

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
    <?php require 'view/footer.php'; ?>
</body>
</html>
