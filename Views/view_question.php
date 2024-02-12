<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Titre de la page</title>
  <link rel="stylesheet" href="../MVC/Content/css/question.css">
</head>
<body>
  <main>
    <nav class="main-menu">
      <div>
        <div class="user-info">
          <img src="../MVC/Content/img/airplane.png" alt="user" />
          <p>Jane Wilson</p>
        </div>
        <ul>
          <li class="nav-item active">
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
          <li class="nav-item">
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
        <div class="rubrique-forum-container">
          <h1>Forum de Questions</h1>
          <div class="message-container">
            <div class="rubrique-questions-existantes">
                <?php foreach ($publications as $question): ?>
                <div class="rubrique-question-card" data-question-id="<?= $question['questionID'] ?>">
                  <div class="rubrique-question-header">
                    <h3><a href="discussion.php?questionID=<?= $question['questionID'] ?>"><?= htmlspecialchars($question['titre']) ?></a></h3>
                    <span class="rubrique-question-date"><?= date('d M Y', strtotime($question['dateCreation'])) ?></span>
                  </div>
                  <div class="rubrique-question-body">
                    <p><?= htmlspecialchars($question['texte']) ?></p>
                  </div>
                  <div class="rubrique-question-footer">
                    <!-- <span class="rubrique-question-author"><?= htmlspecialchars($question['nomUtilisateur']) ?></span> -->
                    <a href="?controller=discussion&action=discussion&questionID=<?= $question['questionID'] ?>" class="rubrique-reply-btn">Répondre</a>
                  </div>  
                </div>
                <hr> <!-- Ajout d'une ligne horizontale entre chaque question -->
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- DEBUT PARTIE DROITE -->
      <div class="right-content">
        <form  class="rubrique-question-form"  action='?controller=question&action=PoserUneQuestion' method="post" >
          <h2>Poser une nouvelle question</h2>
          <input type="text" name="titreQuestion" placeholder="Titre de votre question" required class="rubrique-titre-input">
          <textarea name="texteQuestion" placeholder="Détaillez votre question ici" required class="rubrique-textearea"></textarea>
          <!-- <input type="hidden" name="continentID" value=""> -->
          <button type="submit" class="rubrique-post-btn">Poster</button>
        </form>
      </div>
    </section>
  </main>
</body>
</html>
