<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="../MVC/Content/css/forum.css">
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
    <!-- FIN PARTIE GAUCHE  -->
    <section class="content">
        <div class="left-content">
            <div class="rubrique-discussion-container">
                <h1><?= htmlspecialchars($question['titre']) ?></h1>
                <p><?= htmlspecialchars($question['texte']) ?></p>
                <form action="?controller=discussion&action=repondreQuestion" method="post" class="rubrique-response-form">
                    <textarea name="texteReponse" placeholder="Votre réponse..." required class="rubrique-textearea"></textarea>
                    <input type="hidden" name="questionID" value="<?= $question['questionID'] ?>">
                    <button type="submit" action class="rubrique-post-btn">Envoyer</button>
                </form>
            </div>
        </div>
        <!-- DEBUT PARTIE DROITE -->
        <div class="right-content">
            <div class="reponses-container">
                <?php foreach ($reponses as $reponse): ?>
                    <div class="reponse">
                        <p><?= htmlspecialchars($reponse['texte']) ?></p>
                        <span>Posté par Utilisateur <?= $reponse['utilisateurID'] ?> le <?= date('d M Y H:i:s', strtotime($reponse['dateCreation'])) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
</body>
</html>
