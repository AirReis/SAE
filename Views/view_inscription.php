<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion / Inscription - Air Reis</title>
    <link rel="stylesheet" href="../MVC/Content/css/style.css">
    <script src="../MVC/Content/js/inscription.js"></script>
</head>
<body>
<div class="form-container">
    <div class="form-toggle">
        <span id="login-toggle" onclick="toggleForms()">Se connecter</span> |
        <span id="signup-toggle" onclick="toggleForms()">S'inscrire</span>
    </div>

    <!-- Formulaire de Connexion -->
    <form id="login-form" action='?controller=connexion&action=login' method="post" style="display: none;">
        <h2>Se connecter</h2>
        <label for="login-email">E-mail :</label>
        <input type="email" id="login-email" name="email" required>
        <label for="login-password">Mot de passe :</label>
        <input type="password" id="login-password" name="password" required>
        <p class="form-footer">
            Première visite sur Air Reis ? <a href="#" onclick="toggleForms()">Inscrivez-vous</a>.
        </p>
        <button type="submit" name="action" value="login">Se connecter</button>
    </form>

    <!-- Formulaire d'Inscription -->
    <form id="signup-form" action='?controller=inscription&action=sinscrire' method="post">
        <h2>S'inscrire</h2>
        <label for="signup-email">E-mail :</label>
        <input type="email" id="signup-email" name="email" required>
        <label for="signup-username">Nom d'utilisateur :</label>
        <input type="text" id="signup-username" name="username" required>
        <label for="signup-password">Mot de passe :</label>
        <input type="password" id="signup-password" name="password" required>
        <button type="submit" name="action" value="signup">S'inscrire</button>
    </form>
</div>
</body>
</html>
