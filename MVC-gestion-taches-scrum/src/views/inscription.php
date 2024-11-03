<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/4/cyborg/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Inscription</h1>

    <?php if (isset($_SESSION['message'])): ?>
        <p class="alert alert-danger"><?php echo htmlspecialchars($_SESSION['message']); unset($_SESSION['message']); ?></p>
    <?php endif; ?>

    <form action="index.php?controller=Inscription&action=register" method="POST" class="mt-4">
        <div class="form-group">
            <label for="pseudo">Pseudo:</label>
            <input type="text" id="pseudo" name="pseudo" class="form-control" required maxlength="50">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <input type="submit" value="S'inscrire" class="btn btn-primary">
    </form>

    <a href="index.php?controller=Login&action=index" class="btn btn-link mt-3">Déjà inscrit ? Connectez-vous</a>
</div>
</body>
</html>
