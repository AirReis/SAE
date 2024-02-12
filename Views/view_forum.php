<!DOCTYPE html>
<html>
<head>
    <?php var_dump($_POST) ?>
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
                <p>Marie</p>
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
            <div class="message-container">
                <h1>AIR REIS - Forum </h1>
                <div class="exp-posts-container">
                    <?php foreach ($publications as $publication): ?>
                        <div class="exp-post">
                            <div class="user-info">
                                 <!-- <span><?= htmlspecialchars($publication['nomUtilisateur']) ?></span> -->
                                <span><?= date('d M Y H:i', strtotime($publication['datePublication'])) ?></span>
                            </div>
                            <?php if (!empty($publication['image'])): ?>
                                <img src="<?= htmlspecialchars('uploads/' . basename($publication['image'])) ?>" alt="Image de la publication" />
                            <?php endif; ?>
                            <div class="post-content">
                                <h3><?= htmlspecialchars($publication['titre']) ?></h3>
                                <p><?= htmlspecialchars($publication['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- DEBUT PARTIE DROITE -->
        <div class="right-content">
            <div class="message-container">
                <h1>AIR REIS - Partagez votre voyage</h1>
                <form action="?controller=forum&action=publicationForum" method="post" class="exp-form">
                    <h2>Partager une expérience de voyage</h2>
                    <input type="text" name="exp_titre" placeholder="Titre de votre post" required class="exp-titre-input">
                    <textarea name="exp_description" placeholder="Racontez votre expérience" required class="exp-textarea"></textarea>
                    <input type="file" name="exp_image" accept="image/*" >
                    <button type="submit" name="submitExp" class="exp-post-btn">Publier</button>
                </form>
            </div>
            <button type="submit" name="submitExp" class="exp-post-btn"><a class="questions" href="?controller=question&action=question">Questions/Réponses</a></button>
        </div>
    </section>
</main>
</body>
</html>
