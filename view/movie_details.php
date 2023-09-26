<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Película</title>
</head>
<body>
    <?php if ($movie): ?>
        <h1><?= $movie['nombre'] ?></h1>
        <img src="<?= $movie['portada'] ?>" alt="<?= $movie['nombre'] ?> Portada">
        <p><strong>Género:</strong> <?= $movie['género'] ?></p>
        <p><strong>Director:</strong> <?= $movie['director'] ?></p>
        <p><strong>Actores:</strong>  <?= $movie['actores'] ?></p>
        <p><strong>Sinopsis:</strong> <?= $movie['sinopsis'] ?></p>
    <?php else: ?>
        <p>Película no encontrada.</p>
    <?php endif; ?>
</body>
</html>