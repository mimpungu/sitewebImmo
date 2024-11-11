<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="deo mimpungu gracia">
    <title>Projet Immo</title>
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
    <script src="assets/js/color-modes.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="../immo/css/carousel.css" rel="stylesheet">
   
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
     
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    <main>
         <!-- nav et header -->

         <header data-bs-theme="dark">
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
              <!-- Logo à gauche -->
              <a class="navbar-brand" href="#">
                <img src="assets/brand/logo.png" alt="Logo" height="50" class="d-inline-block align-text-top">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="estimation.php">Estimation</a>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Vendre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Louer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
                       <!-- Bouton Login & sign-up à droite -->
                <div class="text-end">
                
                  <!-- Example single danger button -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Plus
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="login.php">Se connecter</a></li>
                    <li><a class="dropdown-item" href="register.php">Créer un compte</a></li>
                  </ul>
                </div>
                  <a href="login.php">
                    <button type="button" class="btn btn-primary">Se connecter</button>
                  </a>
                </div>
      
              </div>
            </div>
          </nav>
        </header>
     
    </main>
     
         <!-- carousel-->

         <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
             <!-- carousel 1-->

          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/002.jpg" class="d-block w-100" alt="Slide 2">
                  <div class="container">
                      <div class="carousel-caption text-start">
                          <h1>Une évaluation instantanée.</h1>
                          <p>Estimez la valeur d'un bien immobilier grâce à notre outil basé sur des centaines de milliers de ventes.</p>

                          <a class="btn btn-lg btn-primary" href="estimation.php">Estimer mon bien</a>
                      </div>
                  </div>
              </div>
              
                 <!-- carousel 2 -->

              <div class="carousel-item">
                <img src="images/008.jpg" class="d-block w-100" alt="Slide 2">
                  <div class="container">
                      <div class="carousel-caption text-end">
                          <h1> Est-ce le bon moment pour vendre ?</h1>
                          <p>La première phase consiste à évaluer et comprendre le marché de l’immobilier dans votre quartier : quel est le prix au m² ? Est-il en baisse ou en hausse ? Y a-t-il autant d’acheteurs que de vendeurs ?</p>
                          <a class="btn btn-lg btn-primary" href="register.php">Sign up today</a>
                      </div>
                  </div>
              </div>

                <!-- carousel 3 -->
             
              <div class="carousel-item">
                  <img src="images/009.jpg" class="d-block w-100" alt="Slide 3">
                  <div class="container">
                      <div class="carousel-caption text-end">
                          <h1>Louer.</h1>
                          <p>Estimez la valeur d'un bien immobilier grâce à notre outil basé sur des centaines de milliers de ventes.</p>
                          <a class="btn btn-lg btn-primary" href="register.php">Sign up today</a>
                      </div>
                  </div>
              </div>
          </div>
      
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>

   <!-- Thumbnail 1 -->

  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="album py-5 bg-body-tertiary">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">

                <div class="col">
                  <div class="card shadow-sm">
                      <img src="images/3.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail Image">
                  </div>
              </div>

                <div class="card-body">
                  <p class="card-text"> Estimer un bien par un agent immobilier est généralement gratuit si vous lui confiez par la suite le mandat de vente, si vous faites appel à un expert immobilier ou un notaire, vous serez facturée.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

             <!-- Thumbnail 2 -->

            <div class="col">
              <div class="card shadow-sm">
                <div class="col">
                  <div class="card shadow-sm">
                      <img src="images/2.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail Image">
                      <!-- ... autres éléments du code ... -->
                  </div>
              </div>
                <div class="card-body">
                  <p class="card-text">Pour estimer le prix d’un logement, il est possible d’utiliser un simulateur d’estimation de biens immobiliers en ligne, qui compare plusieurs informations au sujet du logement et de son environnement.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

             <!-- Thumbnail 3-->

            <div class="col">
              <div class="card shadow-sm">
                <div class="col">
                  <div class="card shadow-sm">
                      <img src="images/4.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail Image">
                      <!-- ... autres éléments du code ... -->
                  </div>
              </div>
                <div class="card-body">
                  <p class="card-text">L’estimation immobilière d’un bien est une première étape dans le projet de vente, et cette évaluation du prix va influencer fortement l’attractivité du logement et donc la rapidité de la vente.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->

    <!-- FEATURETTES  1-->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">     ACHETER DANS LE NEUF <span class="text-body-secondary">It’ll blow your mind.</span></h2>
          <p class="lead">Que vous souhaitiez acheter pour habiter ou pour investir, un logement neuf vous permet de bénéficier d’un financement via le Prêt à Taux Zéro ou d’une fiscalité incitative. </p>
      </div>
      <div class="col-md-5">
          <img src="images/5.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Featurette Image" width="500" height="700">
      </div>
  </div>

     <!-- FEATURETTES  2-->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"> Comment estimer une maison ?
          <span class="text-body-secondary">See for yourself.</span></h2>
        <p class="lead">Vous pouvez réaliser une estimation de maison gratuite vous-même en tenant compte de plusieurs facteurs : le marché immobilier dans votre secteur, la surface, l’état de la maison, le nombre de pièces, la nécessité ou non de réaliser des travaux et l’environnement direct.</p>
      </div>
      <div class="col-md-5">
        <img src="images/6.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Featurette Image" width="500" height="700">
    </div>
    </div>

    <!-- FEATURETTES  3-->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Comment estimer un appartement ? <span class="text-body-secondary">Checkmate.</span></h2>
        <p class="lead">Si vous réalisez une estimation de l’appartement en ligne, outre les critères pris en compte pour une maison, le simulateur tiendra compte également des équipements collectifs dans l’immeuble tels qu’un ascenseur, un parc de jeux, un service de gardiennage, une piscine, etc.</p>
      </div>
      <div class="col-md-5">
        <img src="images/1.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Featurette Image" width="500" height="700">
    </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Estimation</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5>Vente</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5>Louer</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2023 University of bordeaux, All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
</main>
<script src="assets/dist/js/bootstrap.bundle.js"></script>

    </body>
</html>
