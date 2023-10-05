<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GEWERKMEISTER</title>
    <!-- TITLE ICON -->
    <link rel="icon" href="img/Logo-imaga.png" type="image/icon type" />

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- NAV -->
    <nav class="navbar-expand-md">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <svg
            width="107"
            viewBox="0 0 107 57"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <rect
              x="2"
              y="2"
              width="103"
              height="8"
              fill="white"
              stroke="white"
              stroke-width="3"
            />
            <rect
              x="2"
              y="47"
              width="103"
              height="8"
              fill="white"
              stroke="white"
              stroke-width="3"
            />
            <rect
              x="2"
              y="25"
              width="103"
              height="7"
              fill="white"
              stroke="white"
              stroke-width="3"
            />
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="#main">ÜBER UNS</a>
            <a class="nav-link" href="#gallery">GALERIE</a>
            <a class="nav-link" href="#soc_siete">SOZIALE NETZWERKE</a>
            <a class="nav-link" href="#footer">KONTAKT</a>
          </div>
          <div class="navbar-nav ms-auto languages">
            <a class="nav-link" href="index.php"
              ><img src="img/sk.svg" alt="SK" width="25px"
            /></a>
            <a class="nav-link" href="indexEN.php"
              ><img src="img/uk.svg" alt="EN" width="25px"
            /></a>
            <a class="nav-link" href="indexDE.php"
              ><img src="img/ge.svg" alt="GE" width="25px"
            /></a>
          </div>
        </div>
      </div>
    </nav>

    <!-- HEADER -->

    <header id="header" class="container-fluid text-center">
      <img src="img/Logo.svg" alt="LOGO" />
      <div class="header-text">
        <h1>GEWERK MEISTER</h1>
        <p>ES GIBT NICHTS, WAS WIR NICHT REGELN KÖNNEN !</p>
      </div>
    </header>

    <!-- MAIN -->

    <main id="main" class="container-fluid">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <h3>ÜBER UNS</h3>
        </div>
        <div class="main_text col-lg-6 m-auto">
          <h6>WER WIR SIND</h6>
          <p>
            Wir sind ein sich entwickelndes Unternehmen, das ständig neue
            Kontakte knüpft durch ausländische Verbraucher. Wir beschäftigen uns
            mit Industrie Elektroinstallation, Hauselektroinstallation,
            Photovoltaik und durch die Installation von Netzwerktechnologien.
            <br />
            Wir sind ständig auf der Suche nach neuen qualifizierten
            Mitarbeitern würde uns neue Erfahrungen bringen.
          </p>
        </div>
      </div>
    </main>

    <!-- GALLERY -->

    <div id="gallery" class="gallery">
      <div class="indicators">
        <button
          id="solar-pan"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="gall-button active"
          aria-current="true"
          aria-label="Slide 1"
        >
          Solarplatten
        </button>
        <button
          id="priem-ele"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
          class="gall-button"
        >
          Industrielle Verkabelung
        </button>
        <button
          id="byt-ele"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
          class="gall-button"
        >
          Hausverkabelung
        </button>
        <button
          id="siet-tech"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="3"
          aria-label="Slide 4"
          class="gall-button"
        >
          Netzwerktechnologien
        </button>
      </div>
      <div class="row">
        <div id="gall-arrow" class="col-md-3"></div>

        <div id="carouselExampleIndicators" class="col-md-9 carousel">
          <div class="carousel-inner">
            <!-- CAR 1 -->
            <div class="carousel-item text-center active">
              <img id="gall-img-solar" src="img/solar/img1.jpg" alt="image" />
            </div>

            <!-- CAR 2 -->
            <div class="carousel-item text-center">
              <img id="gall-img-priem" src="img/priem/img1.jpg" alt="image" />
            </div>

            <!-- CAR 3 -->
            <div class="carousel-item text-center">
              <img id="gall-img-byt" src="img/byt/img1.jpg" alt="image" />
            </div>

            <!-- CAR 4 -->
            <div class="carousel-item text-center">
              <img id="gall-img-siet" src="img/siet/img1.jpg" alt="image" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SOC. SIETE -->
    <div id="soc_siete" class="soc_siete container-fluid">
      <div class="row">
        <div class="col-md-9 m-auto">
          <h3 class="max-h3">NETZWERKE</h3>
          <h3 class="min-h3">NETZW.</h3>
        </div>

        <div class="col-md-3 m-auto">
          <a href="https://www.instagram.com/">
            <svg
              fill="#151515"
              version="1.1"
              id="Layer_1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 169.063 169.063"
              xml:space="preserve"
              stroke="#151515"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <path
                    d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752 c17.455,0,31.656,14.201,31.656,31.655V122.407z"
                  ></path>
                  <path
                    d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"
                  ></path>
                  <path
                    d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78 C135.661,29.421,132.821,28.251,129.921,28.251z"
                  ></path>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- FOOTER -->

    <footer id="footer" class="container-fluid">
      <div class="row">
        <div class="col-lg-9 m-auto">
          <h3>KONTAKT</h3>
        </div>

        <div class="col-lg-3 m-auto">
          <ul>
            <h6>TELEFONNUMMER</h6>
            <li>+421 948 700 651</li>

            <h6>EMAIL</h6>
            <li>info@gewerkmeister.eu</li>

            <h6>VISITENKARTE</h6>
            <li>
              <a
                href="img/vizitka.jpg"
                target="_blank"
                download="visitenkarte.jpg"
                >Visitenkarte.jpg</a
              >
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- BOOTSTRAP - JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>

    <!-- JS -->
    <script src="index.js"></script>
  </body>
</html>
