<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <?php var_dump($sujets); ?> -->
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../MVC/Content/css/MessageVue.css">
  <link rel="stylesheet" href="../MVC/Content/css/quizz.css">
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
          <li class="nav-item ">
            <a href="Traduction.php">
              <i class="fa fa-compact-disc nav-icon"></i>
              <span class="nav-text">Traduction</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#">
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
            <div class="quiz-container">
                <!-- <?php if (!$sujetChoisi): ?> -->

                    <h1>Choisissez un sujet pour le quiz</h1>
                    <div class="quiz-subjects">
                        <?php foreach ($sujets as $sujet): ?>
                            <div class="quiz-subject">
                            <a href="view_quizz.php?sujet=<?= urlencode($sujet['sujet']) ?>">                                    
                                    <div class="quiz-subject-name"><?= htmlspecialchars($sujet['sujet']) ?></div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    </form>
                <?php else: ?>

                    <div class="quiz-progress">
                        <!-- <span><?= $questions->rowCount()?> QUESTIONS</span> -->
                    </div>
                    <h1>Quizz sur <?= htmlspecialchars($sujetChoisi) ?></h1>
                    <form action="submit_quizz.php" method="POST">
                        <?php while ($question = $questions->fetch(PDO::FETCH_ASSOC)): ?>
                            <div class="question">
                                <p><?= htmlspecialchars($question['question']) ?></p>
                                <div class="choices">
                                    <?php
                                    while ($choixQuestion): ?>
                                        <input type="radio" id="choice<?= $choixQuestion['choixID'] ?>_<?= $question['questionID'] ?>" name="q<?= $question['questionID'] ?>" value="<?= htmlspecialchars($choixQuestion['choixTexte']) ?>">
                                        <label for="choice<?= $choixQuestion['choixID'] ?>_<?= $question['questionID'] ?>"><?= htmlspecialchars($choixQuestion['choixTexte']) ?></label>
                                    <?php endwhile; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <input type="submit" class="submit-btn" value="Valider">
                    </form>
                <?php endif; ?>

    </div>

        </div>
        <div class="artists">
          <!-- FIN  -->
        </div>
      </div>
      <!-- DEBUT PARTIE DROITE -->
      <div class="right-content">
        <div class="message-container">
          <!-- Ajoutez du contenu à droite si nécessaire -->
          
        </div>
      </div>
    </section>
  </main>
</body>
</html>
