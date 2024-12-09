<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire de préférences</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h1 class="h3">Formulaire de préférences</h1>
            </div>
            <div class="card-body">
                <form action="edit.php" method="post">
                    <div class="mb-3">
                        <label for="animal" class="form-label">Animal préféré :</label>
                        <input type="text" class="form-control" id="animal" name="animal" placeholder="entrer un animal" required>
                    </div>
                    <div class="mb-3">
                        <label for="couleur" class="form-label">Couleur préférée :</label>
                        <input type="text" class="form-control" id="couleur" name="couleur" placeholder="entrer votre couleur" required>
                    </div>
                    <button type="submit" class="btn btn-success">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
