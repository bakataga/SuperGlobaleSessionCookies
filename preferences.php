<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Confirmation des préférences</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="h3">Vos préférences</h1>
            </div>
            <div class="card-body">
                <p class="mb-2"><strong>Animal préféré :</strong> <?php echo isset($_COOKIE['animal']) ? $_COOKIE['animal'] : 'Non défini'; ?></p>
                <p class="mb-4"><strong>Couleur préférée :</strong> <?php echo isset($_COOKIE['couleur']) ? $_COOKIE['couleur'] : 'Non défini'; ?></p>
                <button class="btn btn-primary" onclick="window.location.href='index.php';">Replay</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
