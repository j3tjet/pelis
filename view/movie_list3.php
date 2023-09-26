<!DOCTYPE html>
<html>
<head>
    <title>Lista de Películas</title>
</head>
<body>
    <h1>Lista de Películas</h1>
    <ul>
        <?php foreach ($movies as $movie): ?>
            <li>
                <a href="index.php?action=view&id=<?= $movie['id'] ?>">
                    <?= $movie['nombre'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php require 'views/footer.php'; ?>
</body>
</html>
