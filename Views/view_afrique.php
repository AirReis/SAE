<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../MVC/Content/css/continent/afrique.css">
    <link rel="stylesheet" href="../MVC/Content/css/yes.css">
    <title>Fichier SVG en arrière-plan</title>
</head>
<body>
  <div id="background"></div>
<div id="container">
  
  <div class="title">
    <strong><span class= "gradient-text">Afrique</span></strong>
  </div>

  <div class="word-map">
      <img src="../MVC/Content/img/continents/afrique.png" alt="map"/>

      <img id="player" src="../MVC/Content/img/voiture.png" alt="Voiture">

      <div class="clickable-point" id="point1" style="left: 100px; top: 150px;" onclick="navigateToPage('../../Views/view_forum.php')">
        <div class="pin forum">
          <span><a href="?controller=forum&action=forum">Forum</a></span>
        </div>
      </div>

      <div class="clickable-point" id="point2" style="left: 300px; top: 250px;" onclick="navigateToPage('../../Vues/Traduction.php')">
        <div class="pin traduction">
          <span><a href="?controller=traduction&action=traduction">Traduction</a></span>
        </div>
      </div>


      <div class="clickable-point" id="point3" style="left: 500px; top: 100px;" onclick="navigateToPage('../../Views/view_quizz.php')">
        <div class="pin quizz">
          <span><a href="?controller=quizz&action=quizz">Quizz</a></span>
        </div>
    </div>

      <div class="pin message">
        <span><a href="?controller=message&action=message">Message</a></span>
      </div>

      <div class="pin profil">
        <span>Profil</span>
      </div>

  </div>

</div>
  <script src="../../Assets/js/yes.js"></script>
</body>
</html>
