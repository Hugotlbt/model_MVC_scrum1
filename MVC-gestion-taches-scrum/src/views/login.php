<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.cyborg.css"
</head>
<body>
<div class="container mt-5">
    <h1>Connexion</h1>
    <?php if (isset($user)): ?>
        <p class="alert alert-info ">Bonjour, <?php echo htmlspecialchars($user->getPseudo()); ?> !</p>
        <form action="index.php?controller=Login&action=logout" method="POST">
            <input type="submit" value="Se déconnecter" class="btn btn-danger">
        </form>
    <?php else: ?>
        <?php if (isset($_SESSION['message'])): ?>
            <p class="alert alert-danger"><?php echo htmlspecialchars($_SESSION['message']); unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <form action="index.php?controller=Login&action=authenticate" method="POST" class="mt-4">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <input type="submit" value="Se connecter" class="btn btn-primary mt-3">
        </form>
        <a href="index.php?controller=Inscription&action=index" class="btn btn-link">Pas encore inscrit ? Créez un compte</a>
    <?php endif; ?>
</div>
</body>
</html>
