<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
    <title>Document</title>
</head>
<body>
  <?php include ("menu.php") ?>

<!-- <nav class="navbar navbar-expand-lg  bg-dark ">
  <div class="container-fluid">
  <div class="maman">
    <i class="bi bi-universal-access"></i>
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 200px;">
        <li class="nav-item">
        
            <a class="nav-link text-white" href="#">HOME</a>
          </li>
          <li class="nav-item">
        
            <a class="nav-link text-white" href="#">About</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PROJECTS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">chaussure</a></li>
            <li><a class="dropdown-item" href="#">Sac</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">brague</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">bracelet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">CONTACT</a>
          </li>
      </ul>
     
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="bi bi-exclamation-circle"></i></button>
      </form>
    </div>
  </div>
</nav>   -->
<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="14.jpg" class="d-block w-100" alt="...">
        <div class="container">
        <div class="carousel-caption text-left">
          <h1>Vendez au Burkina Faso.</h1>
          <p>Une site unique qui vous permettra d'achat vos different produit en ligne clients en boutique et partout.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Inscrivez-vous aujourd'hui sur le site</a></p>
        </div>
      </div>
    </div>
      <div class="carousel-item">
      <img class="second-slide" src="9.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>achete vos produits sur le site.</h1>
          <p>Séduisez des millions de clients, vendez partout et gérez toute mon activité depuis site.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Apprendre encore plus</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="5.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Un de plus pour faire bonne mesure.</h1>
          <p>Le commerce de détail est mon principal canal et il s’est révélé être un excellent tremplin qui na permis de mieux faire connaître mon activite et de renforcer ma présence en ligne.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Parcourir la galerie</a></p>
        </div>
      </div>
    </div>
</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">

        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="12.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Titre</h2>
            <h3>Des expériences d’achat flexibles</h3>
            <p>Offrez aux clients un service personnalisé, et proposez une expérience d’achat flexible et une politique de retour simplifiée.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Titre</h2>
            <h3>Une interface de gestion unifiée</h3>
            <p>Utilisez un seul outil pour gérer tous mais produits, mais stocks et mais clients, quel que soit le nombre de points de vente.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="6.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Titre</h2>
            <h3>Des rapports essentiels</h3>
            <p>Prenez des décisions éclairées plus rapidement grâce à des rapports regroupant les données de vente de mon site web.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
          <h2 class="featurette-heading">Propulsez votre entreprise avec le processus de paiement le plus performant au monde.</h2> <br>
            <!-- <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2> -->
            <p class="lead">Le moyen le plus simple de convertir des clients potentiels et de saisir chaque paiement.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="6.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Vendez mais produits au Burkina Faso.</span></h2>
            <p class="lead">Développez mon entreprise au Burkina Faso et rationalisez mon activité de vente,le tout à partir d’une seule et même site.</p>
            <!-- <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="8.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Vendez en gros.</span></h2>
            <p class="lead">Vendez à la fois à mais clients grossistes et aux acheteur à partir d’une même plateforme et d’une même boutique en ligne grace au site.</p>
            <!-- <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="10.jpg" alt="Generic placeholder image">
          </div>
        </div> <br> <br> <br>
    </div>
        
        
    <?php include ("footer.php") ?>

        <!-- <section class="omni">
        <div class="D">
            <img src="4.jpg" alt="">
            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                  <h5>NOUVEAU SUR LE SITE ?</h5>
                  <p>Inscrivez-vous à nos communications pour recevoir nos meilleures offres!</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Homme</button>
                    <button class="btn btn-primary" type="button">Femme</button>
                  </div>
                </form>
              </div>
            </div>
        <div class="footer container-fluid">
          <div class="Q">
            <img src="4.jpg" alt="">
            <p class="T">Burkina Faso</p>
            <p class="T">Pays des Hommes intègres</p>
            <p class="T">Terre d'accueil et de traditions,</p>
            <p class="T">Pays de culture</p>
          </div>
          <div>
            <p class="R">Contact</p>
            <div class="S">
              <i class="bi bi-egg-fill"></i>
              <P>01 B.P. 1311 Ouagadougou <br>01 Burkina Faso</P>
            </div>
            <div class="V">
              <i class="bi bi-telephone-fill"></i>
              <p>+226 65 90 44 32</p>
            </div>
            <div class="W">
              <i class="bi bi-envelope"></i>
              <p>info@ontb.bf</p>
            </div>
            <div class="X">
              <i class="bi bi-facebook"></i>
              <i class="bi bi-instagram i"></i>
              <i class="bi bi-youtube i"></i>
              <i class="bi bi-twitter i"></i>
            </div>
          </div>
          <div>
            <p class="Z">GAGNEZ DE L'ARGENT AVEC ....</p>
            <div class="a">
              <i class="bi bi-check"></i>
              <p>Vendez sur ....</p>
            </div>
            <div class="b">
              <i class="bi bi-check"></i>
              <p>Assistant vendeur</p>
            </div>
            <div class="c">
              <i class="bi bi-check"></i>
              <p>Devenez Consultant ....</p>
            </div>
            <div class="d">
              <i class="bi bi-check"></i>
              <p>Devenir partenaire de service logistique</p>
            </div>
            <div class="e">
              <i class="bi bi-check"></i>
              <p>Devenir partenaire de service logistique</p>
            </div>
          </div>

          <div>
            <p class="f">Liens utiles</p>
            <div class="g">
              <i class="bi bi-check"></i>
              <p>Contactez-nous</p>
            </div>
            <div class="h">
              <i class="bi bi-check"></i>
              <p>Commandez par Tél: 05.22.04.18.18</p>
            </div>
            <div class="j">
              <i class="bi bi-check"></i>
              <p>Acheter sur ....</p>
            </div>
            <div class="k">
              <i class="bi bi-check"></i>
              <p>Utiliser un Bon d'achat</p>
            </div>
            <div class="l">
              <i class="bi bi-check"></i>
              <p>Modalités de Livraison</p>
            </div>
          </div>
</div>
        <div class="m">
          <P class="o">Propulsé par. FasoCompute.</P>
          <div class="n">
            <P>ONTB © 2023 Tous droits réservés - Mentions Légales..</P>
          </div>
        </div>
      </section> -->
    
  <script src="bootstrap.bundle.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>