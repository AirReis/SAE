<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="../MVC/Content/css/accueil.css">
  </head>
  <body>
    <header>
        <div class="logo">Air Reïs</div>
        <nav>
            <a href="">Accueil</a>
            <a href="#">Infos</a>
            <a href="?controller=inscription&action=inscription"> <strong><span class= "gradient-text">Inscription</span></strong></a>
        </nav>
    </header>
    <section class="home">
      <div class="description">
        <h1 class="title">
          <span class="gradient-text">Air Reïs</span> 
        </h1>
        <p class="paragraph">
            Chez Air Reïs, nous croyons que les meilleures aventures commencent par le partage. Que vous soyez un voyageur chevronné ou un explorateur débutant, 
            notre plateforme est conçue pour vous permettre de vous connecter,
            d'échanger des conseils précieux, de dénicher des bons plans inédits et de communiquer avec d'autres amoureux du voyage du monde entier..
        </p>
          <button type="submit" class="btn" aria-label="submit">
          <a href="?controller=inscription&action=inscription"> <span>S'inscrire</span></a>
         </button>
      </div>

      <div class="users-color-container">
        <span class="item" style="--i: 1"></span>
        <img
          class="item"
          src="../MVC/Content/img/Paris.jpg"
          style="--i: 2"
          alt="" />
        <span class="item" style="--i: 3"></span>
        <img
          class="item"
          src="../MVC/Content/img/Maroc.jpg"
          style="--i: 4"
          alt="" />

        <img
          class="item"
          src="../MVC/Content/img/EU.jpg"
          style="--i: 10"
          alt="" />
        <span class="item" style="--i: 11"></span>
        <img class="item" src="../MVC/Content/img/piramide.jpg" style="--i: 12" alt="" />
        <span class="item" style="--i: 5"></span>

        <span class="item" style="--i: 9"></span>
        <img class="item" src="../MVC/Content/img/chine.jpg" style="--i: 8" alt="" />
        <span class="item" style="--i: 7"></span>
        <img class="item" src="../MVC/Content/img/italie.jpg" style="--i: 6" alt="" />
      </div>
    </section>

    <section class="card-container" id="card-container">
      <div class="slider">
        <div class="card" data-tilt>
            <div class="content">
              <img src="../MVC/Content/img/passeport.jpg" alt="" />
              <h1>Forums de Discussionn</h1>
              <p>
                Plongez dans nos forums thématiques pour discuter de destinations spécifiques, 
                des dernières tendances de voyage, et échangez des conseils pratiques pour faciliter la planification de votre prochaine aventure.
              </p>
              <button class="btn btn-grad">
                <span>Learn More</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </div>
          </div>
        <div class="card" data-tilt>
          <div class="content">
            <img src="../MVC/Content/img/voyage.jpg" alt="" />
            <h1>Conseils de Voyage</h1>
            <p>
                Profitez des expériences riches de notre communauté. Posez des questions, 
                obtenez des conseils personnalisés et partagez vos propres astuces pour rendre chaque voyage inoubliable.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
        <div class="card" data-tilt>
            <div class="content">
              <img src="../MVC/Content/img/carnet.jpg" alt="" />
              <h1>Carnets de Voyage</h1>
              <p>Créez et partagez vos carnets de voyage personnalisés, illustrés de photos captivantes 
                et d'anecdotes fascinantes, pour inspirer d'autres membres de la communauté.
              </p>
              <button class="btn btn-grad">
                <span>Learn More</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="content">
              <img src="../MVC/Content/img/carte.jpg" alt="" />
              <h1>Bons Plans</h1>
              <p>
                Découvrez des offres exclusives, des réductions spéciales et des recommandations 
                locales pour optimiser votre budget tout en profitant au maximum de votre séjour.
              </p>
              <button class="btn btn-grad">
                <span>Learn More</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </div>
          </div>
    </div>
      </div>
    </section>
    <footer>
        <p>&copy; 2024 Air Reïs. Tous droits réservés.</p>
    </footer>

  </body>
</html>