<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../MVC/Content/css/MessageVue.css">
</head>
<body>
 
  <main>
    <nav class="main-menu">
      <div>
        <div class="user-info">
          <img src="../MVC/Content/img/airplane.png" alt="user" />
  
        </div>
        <ul>
          <li class="nav-item">
            <a href="Forum.php">
              <i class="fa fa-map nav-icon"></i>
              <span class="nav-text">Forum</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="MessageVue.php">
              <i class="fa fa-arrow-trend-up nav-icon"></i>
              <span class="nav-text">Message</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="Traduction.php">
              <i class="fa fa-compact-disc nav-icon"></i>
              <span class="nav-text">Traduction</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="quizzName.php">
              <i class="fa fa-circle-play nav-icon"></i>
              <span class="nav-text">Quizz</span>
            </a>
          </li>
        </ul>
      </div>
      <ul>
        <li class="nav-item">
          <a href="#">
            <i class="fa fa-user nav-icon"></i>
            <span class="nav-text">Account</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="../index.php">
            <i class="fa fa-right-from-bracket nav-icon"></i>
            <span class="nav-text">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- FIN PARTIE GAUCHE -->
    <section class="content">
      <div class="left-content">
        <div class="slider-container">
          <!-- Formulaire pour saisir le texte à traduire et choisir la langue -->
          <h1>Traduction</h1>
          <br>
          <form method="post" action="?controller=traduction&action=traduireMessage">
            <label for="user_input">Texte à traduire :</label>
            <textarea id="user_input" class="message" name="user_input" required></textarea>
            <label for="language">Langue de destination :</label>
            <select id="language" name="language">
              <option value="en">Anglais</option>
              <option value="fr">Français</option>
              <option value="es">Espagnol</option>
              <!-- Ajoutez d'autres langues au besoin -->
            </select>
            <button class="traduire" type="submit" name="submit">Traduire</button>
          </form>
          <!-- Affichage de l'historique -->
        </div>
        <div class="artists">
          <!-- FIN  -->
        </div>
      </div>
      <!-- DEBUT PARTIE DROITE -->
      <div class="right-content">
    <div class="message-container">
        <h2>Historique de traduction:</h2>
        <ul>
            <?php foreach ($utilisateurs as $traduction): ?>
                <li>
                    <strong>Texte original :</strong> <?php echo $traduction['original_text']; ?><br>
                    <strong>Texte traduit :</strong> <?php echo $traduction['translated_text']; ?><br>
                    <strong>Langue cible :</strong> <?php echo $traduction['target_language']; ?><br><hr>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

      </div>
    </section>
  </main>
</body>
</html>
